<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Batch2Controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Batch2Model');
         $this->load->helper('custom');
    }
//Msc 2 Year Maths Paper 1
    function mathsMsc2P1A(){
        $this->load->view('layout/header');
        $data['result2']=  $this->Batch2Model->mathsMsc2P1A();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P1B();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P1C();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P1D();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P1E();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1E',$data);
        $this->load->view('layout/footer');
    }
}
