<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class EntryController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('EntryModel');
        $this->load->helper('custom');
    }
    
    function index(){
        
    }
    
    function enquiry(){
        $this->load->view('layout/header');
        $data['classes']=  $this->EntryModel->GetClasses();
        $this->load->view('arya_classes/enquiry',$data);
        $this->load->view('layout/footer');
    }
    
    function addEnquiry(){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('mobile','Mobile','required|is_unique[student_record.mobile]');
        if($this->form_validation->run()==FALSE){
            $this->enquiry();
        }else{
            $data=array(
                'name'=>  $this->input->post('name'),
                'father_name'=>  $this->input->post('father_name'),
                'mobile'=>  $this->input->post('mobile'),
                'whatsApp'=>  $this->input->post('whatsApp'),
                'email'=>  $this->input->post('email'),
                'address'=>  $this->input->post('address'),
                'father_mobile'=>  $this->input->post('father_mobile'),
                'class_id'=>  $this->input->post('classes')
                
            );
            $this->EntryModel->addEnquiry($data);
            $this->session->set_flashdata('success_msg','Seccessfully Add New Enquiry');
            redirect(site_url('EntryController/enquiry'));
        }
    }
    
    function showStudent(){
        $this->load->view('layout/header');
        $data['result']=  $this->EntryModel->showStudent();
        $this->load->view('arya_classes/showAll',$data);
        $this->load->view('layout/footer');
    }
    
    function nonForm(){
        $this->load->view('layout/header');
        $data['result']=  $this->EntryModel->nonForm();
        $this->load->view('arya_classes/nonForm',$data);
        $this->load->view('layout/footer');
    }
    
    function form(){
        $this->load->view('layout/header');
        $data['result']=  $this->EntryModel->form();
        $this->load->view('arya_classes/form',$data);
        $this->load->view('layout/footer');
    }
    
    function fillForm($id){
        $this->load->view('layout/header');
        $data['row']=  $this->EntryModel->fillForm($id);
        $data['classes']=  $this->EntryModel->GetClasses();
        $this->load->view('arya_classes/fillForm',$data);
        $this->load->view('layout/footer');
    }
    
    function updateForm(){
        $id=  $this->input->post('id');
        $this->form_validation->set_rules('form_id','Form ID','required|is_unique[student_record.form_id]');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('mobile','Mobile','required');
        if($this->form_validation->run()==FALSE){
            $this->fillForm($id);
        }else{
            $updateData=array(
                'form_id'=>  $this->input->post('form_id'),
                'name'=>  $this->input->post('name'),
                'father_name'=>  $this->input->post('father_name'),
                'mobile'=>  $this->input->post('mobile'),
                'father_mobile'=>  $this->input->post('fmobile'),
                'whatsApp'=>  $this->input->post('whatsApp'),
                'email'=>  $this->input->post('email'),
                'address'=>  $this->input->post('address'),
                'status'=> $this->input->post('status'),
                'formDate'=> Date('Y-m-d',  time('H:m:s')),
                //'formDate'=> now(),
            );
            //print_r($updateData);            exit();
            $student_id= $this->EntryModel->updateForm($updateData,$id);
            $classes= $this->input->post('classes');
            $subject=  $this->input->post('subject');
            $paper=  $this->input->post('paper');
            $batch=  $this->input->post('batch');
            
            if($this->input->post('bill')){
            $bill= $this->input->post('bill');
            }
            $pay=  $this->input->post('pay');
            
            foreach ($classes as $key =>$n){
                $data=array(
                    'student_id'=>$id,
                    'class'=>$classes[$key],
                    'subject'=>$subject[$key],
                    'paper'=>$paper[$key],
                    'batch'=>$batch[$key],
                    'update'=>  date('Y-m-d'),
                    'bill'=>$bill[$key],
                    'pay_status'=>$pay[$key],
                );
                $this->EntryModel->studentData($data);
            }
                            
            $this->session->set_flashdata('success_msg','Successfully Fill Form');
            redirect(site_url('EntryController/nonForm'));
        }
    }
    
    function searchID(){
        $this->load->view('layout/header');
        $this->load->view('arya_classes/search/search_v');
        $this->load->view('layout/footer');
    }
    
    function search(){
        $student = $this->input->post('searchvalue');
        if ($student) {
            $data['result'] = $this->EntryModel->search($student);
            $this->load->view('arya_classes/search/searchResult_v', $data);
        }
    }
    
    function studentEdit($id){
         $this->load->view('layout/header');
        // $data['result']=  $this->EntryModel->studentEdit($id);
        $data['row']=  $this->EntryModel->studentEdit($id);
        $data['student']=  $this->EntryModel->studentData2($id);
        $data['classes']=  $this->EntryModel->GetClasses();
        $this->load->view('arya_classes/search/editStudent_v',$data);
        $this->load->view('layout/footer');
    }
    function deletePaper(){
        $idDel= $this->input->post('user_id');
        $this->EntryModel->deletePaper($idDel);
        //redirect(site_url('EntryController/studentEdit/'.$id));
        //$this->studentEdit($id);
    }
    function studentDataUpdate(){
        $id=  $this->input->post('id');
        //$this->form_validation->set_rules('form_id','Form ID','required|is_unique[student_record.form_id]');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('mobile','Mobile','required');
        if($this->form_validation->run()==FALSE){
            $this->fillForm($id);
        }else{
            $updateData=array(
                //'form_id'=>  $this->input->post('form_id'),
                'name'=>  $this->input->post('name'),
                'father_name'=>  $this->input->post('father_name'),
                'mobile'=>  $this->input->post('mobile'),
                'father_mobile'=>  $this->input->post('fmobile'),
                'whatsApp'=>  $this->input->post('whatsApp'),
                'email'=>  $this->input->post('email'),
                'address'=>  $this->input->post('address'),
                'status'=> $this->input->post('status'),
                'UpdateFormDate'=> Date('Y-m-d',  time('H:m:s')),
                //'formDate'=> now(),
            );
            //print_r($updateData);            exit();
            $student_id= $this->EntryModel->updateForm($updateData,$id);
            //bill no. and payment update already select paper show and return update data only two row
            $subjectID=  $this->input->post('subjectID');
            $updateBill=  $this->input->post('bill2');
            $updatePay=  $this->input->post('pay2');
            //print_r($subjectID);                    exit();
              foreach ($subjectID as $key2 =>$n1){
                   $id2=$subjectID[$key2];
                  $data=array(
                         
                        'bill'=>$updateBill[$key2],
                        'pay_status'=>$updatePay[$key2],
                    );
                    //print_r($data);                    exit();
             $this->EntryModel->updateBill($id2,$data);
               }
            //add new paper
            $classes= $this->input->post('classes');
            $subject=  $this->input->post('subject');
            $paper=  $this->input->post('paper');
            $batch=  $this->input->post('batch');
            if($this->input->post('bill')){
            $bill= $this->input->post('bill');
            }
            $pay=  $this->input->post('pay');
            if(!empty($classes)){
            foreach ($classes as $key =>$n){
                $data=array(
                    'student_id'=>$id,
                    'class'=>$classes[$key],
                    'subject'=>$subject[$key],
                    'paper'=>$paper[$key],
                    'batch'=>$batch[$key],
                    'update'=>  date('Y-m-d'),
                    'bill'=>$bill[$key],
                    'pay_status'=>$pay[$key],
                );
                //print_r($data[$key]);                exit();
            $this->EntryModel->studentData($data);
            }
            }                
            $this->session->set_flashdata('success_msg','Successfully Fill Form');
            redirect(site_url('EntryController/searchID'));
        }
    }
    
    function deleteStudent($id){
        $this->EntryModel->deleteStudent($id);
        $this->session->set_flashdata('success_msg','Successfully Delete');
        redirect(site_url('EntryController/showStudent'));
    }
}