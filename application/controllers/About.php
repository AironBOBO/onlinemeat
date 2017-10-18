<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Carousel_model');
        $this->load->model('Products_model');
        $this->load->model('Category_model');
        $this->load->model('Cart_model');
        $this->load->model('Unit_model');

    }

    public function index()
    {
        $user_id=$this->session->user_id;
        $m_carousel=$this->Carousel_model;
        $m_category=$this->Category_model;
        $m_products=$this->Products_model;
        $m_cart=$this->Cart_model;
        $m_unit=$this->Unit_model;
        $data['_title']="Gerona Marketplace";


        $cat['products_cart']=$m_cart->get_list(
          'products.is_deleted=0 AND cart.user_id='.$user_id,
          'products.product_id,products.product_name,products.price,products.image1,cart.quantity,cart.cart_id',
                    array(
                          array('products','products.product_id=cart.product_id','left'),
                      ),
          null,
          'product_id'
                    );

        $data['units'] = $m_unit->get_list();
        $data['carousel']=$m_carousel->get_list(
          'carousel.is_deleted=0 AND carousel.is_active=1',
          'carousel.*'
        );

        $data['products_new']=$m_products->get_list(
          'products.is_deleted=0 AND products.is_newarrival=1',
          'products.*,category.category',
                    array(
                          array('category','category.category_id=products.category_id','left')
                      )
                    );


        $data['category']=$m_category->get_list(
          'category.is_deleted=0 AND category.is_active=1',
          'category.*'
                    );


        $data['_footer']=$this->load->view('template/elements/footer','',TRUE);
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation',$cat,TRUE);
        $this->load->view('about_view',$data);
        $data['title'] = 'Dashboard';
    }

}
