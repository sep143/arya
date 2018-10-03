<?php 
defined('BASEPATH')OR exit('No direct script sccess allowed');

class LoginController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('CommonModel');
        $this->load->helper('custom');
    }
    
    function index(){
        $this->load->view('login');
        
    }
    
    function login(){
        $this->form_validation->set_rules('user_name','User Name','required|trim|xss_clean');
        $this->form_validation->set_rules('password','Password','required|trim|xss_clean|callback_check');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }  else {
            redirect(site_url('LoginController/dashboard'));
        }
    }
    
    function check($password){
        $userName=  $this->input->post('user_name');
        $result=  $this->CommonModel->check($userName,$password);
        if($result){
            $data=array(
                'log_id'=> $result->id,
                'log_name'=> $result->name,
            );
            $this->session->set_userdata('mylog',$data);
            return TRUE;
        }  else {
            $this->form_validation->set_message('check','Invalid ID & Password');
            return FALSE;
        }
    }
    
    function logout(){
        $this->session->unset_userdata('mylog');
        $this->session->set_flashdata('danger_msg','Seccessfully Logout');
        redirect(site_url());
    }
            
    function dashboard(){
        $this->load->view('layout/header');
        $data['total']=  $this->CommonModel->totalForm();
        $data['np']=  $this->CommonModel->nonForm();
        $data['p']=  $this->CommonModel->form();
        $this->load->view('arya_classes/dashboard_v',$data);
        $this->load->view('layout/footer');
    }
    function search(){
        $searchID = $this->input->post('searchvalue');
        if ($searchID) {
            $data['result'] = $this->CommonModel->search($searchID);
            $this->load->view('arya_classes/searchResultID_Dash', $data);
        }
    }
}