<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyAccount extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        // $this->validate_session();
        require 'application/third_party/phpmail/PHPMailerAutoload.php';
        $this->load->model('Users_model');
        $this->load->model('Category_model');
    }


    public function index()
    {
        $m_category=$this->Category_model;
        $data['_title']="Gerona Marketplace";
        $cat['category']=$m_category->get_list(
          'category.is_deleted=0 AND category.is_active=1',
          'category.*'
                    );
        $this->create_required_default_data();

        $data['_footer']=$this->load->view('template/elements/footer','',TRUE);
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation',$cat,TRUE);

        $this->load->view('my_account_view',$data);

    }

    function create_required_default_data(){

        //create default user : the admin
        $m_users=$this->Users_model;
        $m_users->create_default_user();


    }




    function transaction($txn=null){

        switch($txn){

                //****************************************************************************
                case 'validate' :
                    $uname=$this->input->post('uname');
                    $pword=$this->input->post('pword');

                    $users=$this->Users_model;
                    $result=$users->authenticate_user($uname,$pword);

                    if($result->num_rows()>0){//valid username and pword
                        //set session data here and response data

                        if($result->row()->is_active==1){
                            $this->session->set_userdata(
                                array(
                                    'user_id'=>$result->row()->user_id,
                                    'user_name'=>$result->row()->user_name,
                                    'user_fullname'=>$result->row()->user_fullname,
                                    'user_fname'=>$result->row()->user_fname,
                                    'user_lname'=>$result->row()->user_lname,
                                    'user_address'=>$result->row()->user_address,
                                    'user_mobile'=>$result->row()->user_mobile,
                                    'user_photo'=>$result->row()->photo_path,
                                    'date_created'=>$result->row()->date_created,
                                    'user_group_id'=>$result->row()->user_group_id,
                                    'photo_path'=>$result->row()->photo_path,
                                    'brgy_id'=>$result->row()->brgy_id,
                                    'brgy_name'=>$result->row()->brgy_name,

                                )
                            );

                            $response['stat']='success';
                            $response['msg']='User successfully authenticated.';
                            $response['user_group_id']=$result->row()->user_group_id;

                            echo json_encode($response);
                          }
                          else{
                            $response['stat']='error';
                            // $response['msg']='Your account is not verified, Please check your email to verify your account, Thank you.  ';
                            $response['msg']='Your account is not yet approved, Please wait for the admin to approve your account before signing in.';
                            echo json_encode($response);
                          }

                    }
                    else{ //not valid

                        $response['stat']='error';
                        $response['msg']='Incorrect username or password.';
                        echo json_encode($response);

                    }

                break;
                //****************************************************************************
                case 'logout' :
                    $this->end_session();
                //****************************************************************************


                break;

                case 'verifyemail' :
                  $m_users=$this->Users_model;
                  $user_id=$this->input->get('code',TRUE);
                  $m_users->is_active = 1;
                  $m_users->modify($user_id);
                  redirect(base_url().'Index');
                break;

                case 'update':
                    $m_users=$this->Users_model;
                    $user_id = $this->input->post('user_id', TRUE);
                    $m_users->user_fname = $this->input->post('user_fname', TRUE);
                    $m_users->user_lname = $this->input->post('user_lname', TRUE);
                    $m_users->user_address = $this->input->post('user_address', TRUE);
                    $m_users->user_mobile = $this->input->post('user_mobile', TRUE);
                    $m_users->modify($user_id);
                    $full_name = $this->input->post('user_fname', TRUE) .' '. $this->input->post('user_lname', TRUE);

                    $this->session->set_userdata(
                        array(
                            'user_fullname'=>$full_name,
                            'user_fname'=>$this->input->post('user_fname', TRUE),
                            'user_lname'=>$this->input->post('user_lname', TRUE),
                            'user_address'=>$this->input->post('user_address', TRUE),
                            'user_mobile'=>$this->input->post('user_mobile', TRUE),
                        )
                    );
                    redirect(base_url().'MyInfo');
                break;

                default:


        }




    }




}
