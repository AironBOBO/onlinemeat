<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myinfo extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Carousel_model');
        $this->load->model('Products_model');
        $this->load->model('Category_model');
        $this->load->model('Cart_model');
        $this->load->model('Order_model');
        // $this->load->model('Users_model');
        // $this->load->model('Wall_post_model');
        $this->validate_session();

    }

    public function index()
    {
        $user_id=$this->session->user_id;
        $m_carousel=$this->Carousel_model;
        $m_category=$this->Category_model;
        $m_products=$this->Products_model;
        $m_cart=$this->Cart_model;
        $m_orders=$this->Order_model;
        $data['_title']="Furnies OL-Shoppe";
        //to view categories in navigation
        $cat['products_cart']=$m_cart->get_list(
          'products.is_deleted=0 AND cart.user_id='.$user_id,
          'products.product_id,products.product_name,products.price,products.image1,cart.quantity,cart.cart_id',
                    array(
                          array('products','products.product_id=cart.product_id','left'),
                      ),
          null,
          'product_id'
                    );

        $cat['category']=$m_category->get_list(
          'category.is_deleted=0 AND category.is_active=1',
          'category.*'
                    );

        $cat['myoders']=$m_orders->get_list(
          'user_id='.$user_id,
          'orders.*,products.*,order_items.*,order_status.order_status_name',
                    array(
                          array('order_items','order_items.order_id=orders.order_id','left'),
                          array('products','products.product_id=order_items.product_id','left'),
                          array('order_status','order_status.order_status_id=order_items.order_status_id','left'),
                      )
                    );

        $data['_footer']=$this->load->view('template/elements/footer','',TRUE);
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigationforshoppingcart',$cat,TRUE);
        $this->load->view('my_info_view',$data);
        $data['title'] = 'Dashboard';
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'create':
                $m_wallpost=$this->Wall_post_model;
                $m_wallpost->post_content=$this->input->post('post_content',TRUE);
                $m_wallpost->user_id = $this->session->user_id;
                $m_wallpost->date_created = date("Y-m-d H:i:s");
                $m_wallpost->save();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Post Successfull.';
                echo json_encode($response);

            break;
        }
    }
}
