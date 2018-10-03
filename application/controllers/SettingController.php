<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class SettingController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('CommonModel');
        $this->load->helper('custom');
    }
    
    function index(){
        $this->load->view('layout/header');
        $data['result']=$this->CommonModel->getClass();
        //$data2['result2']=  $this->CommonModel->getSubject();
        $this->load->view('setting/setting_v',$data);
        $this->load->view('layout/footer');
    }
    
    function classes(){
        $this->form_validation->set_rules('class_name','Class Name','required');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $data=array(
                'classes'=>  $this->input->post('class_name')
            );
            $this->CommonModel->classes($data);
            $this->session->set_flashdata('success_msg','Successfully New Cousre Create');
            redirect(site_url('SettingController'));
        }
    }
    
    function subject(){
        $this->form_validation->set_rules('course_id','Course','required');
        $this->form_validation->set_rules('subject_name','Subject Name','required');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $data=array(
                'class_id'=>  $this->input->post('course_id'),
                'subject'=>  $this->input->post('subject_name'),
            );
            $this->CommonModel->subject($data);
            $this->session->set_flashdata('success_msg','Successfully New Subject Create');
            redirect(site_url('SettingController'));
        }
    }
    
    function paper(){
        $this->load->view('layout/header');
        $data['result']=$this->CommonModel->getPaper();
        //$data2['result2']=  $this->CommonModel->getClass();
        //$data3['all']=$data['result'] $data2['result2'];
        $this->load->view('setting/paper_v',$data);
        $this->load->view('layout/footer');
    }
    
    function classid(){
        $value=  $this->input->post('searchvalue');
        if($value){
            $data['result']=  $this->CommonModel->classid($value);
            $this->load->view('setting/resultSubject_v',$data);
        }
    }
    
    function Addpaper(){
        $this->form_validation->set_rules('course_id','Class ID','required');
        $this->form_validation->set_rules('subject_id','Subject ID','required');
        $this->form_validation->set_rules('paper','Paper','required');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $data=array(
                'class_id'=>  $this->input->post('course_id'),
                'subject_id'=>  $this->input->post('subject_id'),
                'paper'=>  $this->input->post('paper'),
            );
            $this->CommonModel->Addpaper($data);
            $this->session->set_flashdata('success_msg','Successfully New Paper Create');
            redirect(site_url('SettingController'));
        }
    }
    
    function subjectid(){
        $value2=  $this->input->post('searchvalue');
        if($value2){
            $data['result']=  $this->CommonModel->subjectid($value2);
            $this->load->view('setting/resultPaper_v',$data);
        }
    }
    
    function Addbatch(){
        $this->form_validation->set_rules('course_id','Class ID','required');
        $this->form_validation->set_rules('subject_id','Subject ID','required');
        $this->form_validation->set_rules('batch','Paper','required');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
            $data=array(
                'class_id'=>  $this->input->post('course_id'),
                'subject_id'=>  $this->input->post('subject_id'),
                'paper_id'=>  $this->input->post('paper_id'),
                'batch'=>  $this->input->post('batch'),
            );
            $this->CommonModel->Addbatch($data);
            $this->session->set_flashdata('success_msg','Successfully Add New Batch');
            redirect(site_url('SettingController'));
        }
    }
    
    //detail show to use 
    function paperid(){
        $value3=  $this->input->post('searchvalue');
        if($value3){
            $data['result']=  $this->CommonModel->paperid($value3);
            $this->load->view('setting/resultBatch_v',$data);
        }
    }
}