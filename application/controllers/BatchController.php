<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class BatchController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('BatchModel');
         $this->load->helper('custom');
    }
 //11 Physics Batch Wise   
    function physics11A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics11A();
        $this->load->view('arya_classes/classes/11/batch/physics11A',$data);
        $this->load->view('layout/footer');
    }
    function physics11B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics11B();
        $this->load->view('arya_classes/classes/11/batch/physics11B',$data);
        $this->load->view('layout/footer');
    }
    function physics11C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics11C();
        $this->load->view('arya_classes/classes/11/batch/physics11C',$data);
        $this->load->view('layout/footer');
    }
    function physics11D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics11D();
        $this->load->view('arya_classes/classes/11/batch/physics11D',$data);
        $this->load->view('layout/footer');
    }
    function physics11E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics11E();
        $this->load->view('arya_classes/classes/11/batch/physics11E',$data);
        $this->load->view('layout/footer');
    }
//11 chemistry Batch Wise
    function chemistry11A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry11A();
        $this->load->view('arya_classes/classes/11/batch/chemistry11A',$data);
        $this->load->view('layout/footer');
    }
    function chemistry11B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry11B();
        $this->load->view('arya_classes/classes/11/batch/chemistry11B',$data);
        $this->load->view('layout/footer');
    }
    function chemistry11C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry11C();
        $this->load->view('arya_classes/classes/11/batch/chemistry11C',$data);
        $this->load->view('layout/footer');
    }
    function chemistry11D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry11D();
        $this->load->view('arya_classes/classes/11/batch/chemistry11D',$data);
        $this->load->view('layout/footer');
    }
    function chemistry11E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry11E();
        $this->load->view('arya_classes/classes/11/batch/chemistry11E',$data);
        $this->load->view('layout/footer');
    }
//11 Maths Batch Wise
    function maths11A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths11A();
        $this->load->view('arya_classes/classes/11/batch/maths11A',$data);
        $this->load->view('layout/footer');
    }
    function maths11B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths11B();
        $this->load->view('arya_classes/classes/11/batch/maths11B',$data);
        $this->load->view('layout/footer');
    }
    function maths11C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths11C();
        $this->load->view('arya_classes/classes/11/batch/maths11C',$data);
        $this->load->view('layout/footer');
    }
    function maths11D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths11D();
        $this->load->view('arya_classes/classes/11/batch/maths11D',$data);
        $this->load->view('layout/footer');
    }
    function maths11E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths11E();
        $this->load->view('arya_classes/classes/11/batch/maths11E',$data);
        $this->load->view('layout/footer');
    }
 //12 physics Bath wise
    function physics12A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics12A();
        $this->load->view('arya_classes/classes/12/batch/physics12A',$data);
        $this->load->view('layout/footer');
    }
    function physics12B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics12B();
        $this->load->view('arya_classes/classes/12/batch/physics12B',$data);
        $this->load->view('layout/footer');
    }
    function physics12C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics12C();
        $this->load->view('arya_classes/classes/12/batch/physics12C',$data);
        $this->load->view('layout/footer');
    }
    function physics12D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics12D();
        $this->load->view('arya_classes/classes/12/batch/physics12D',$data);
        $this->load->view('layout/footer');
    }
    function physics12E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physics12E();
        $this->load->view('arya_classes/classes/12/batch/physics12E',$data);
        $this->load->view('layout/footer');
    }
//12 Chemistry Batch Wise
    function chemistry12A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry12A();
        $this->load->view('arya_classes/classes/12/batch/chemistry12A',$data);
        $this->load->view('layout/footer');
    }
    function chemistry12B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry12B();
        $this->load->view('arya_classes/classes/12/batch/chemistry12B',$data);
        $this->load->view('layout/footer');
    }
    function chemistry12C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry12C();
        $this->load->view('arya_classes/classes/12/batch/chemistry12C',$data);
        $this->load->view('layout/footer');
    }
    function chemistry12D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry12D();
        $this->load->view('arya_classes/classes/12/batch/chemistry12D',$data);
        $this->load->view('layout/footer');
    }
    function chemistry12E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistry12E();
        $this->load->view('arya_classes/classes/12/batch/chemistry12E',$data);
        $this->load->view('layout/footer');
    }
 //12 Maths Batch Wise
    function maths12A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths12A();
        $this->load->view('arya_classes/classes/12/batch/maths12A',$data);
        $this->load->view('layout/footer');
    }
    function maths12B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths12B();
        $this->load->view('arya_classes/classes/12/batch/maths12B',$data);
        $this->load->view('layout/footer');
    }
    function maths12C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths12C();
        $this->load->view('arya_classes/classes/12/batch/maths12C',$data);
        $this->load->view('layout/footer');
    }
    function maths12D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths12D();
        $this->load->view('arya_classes/classes/12/batch/maths12D',$data);
        $this->load->view('layout/footer');
    }
    function maths12E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->maths12E();
        $this->load->view('arya_classes/classes/12/batch/maths12E',$data);
        $this->load->view('layout/footer');
    }
//IIT Physics Batch Wise
    function physicsIITA(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsIITA();
        $this->load->view('arya_classes/classes/iit/batch/physicsIITA',$data);
        $this->load->view('layout/footer');
    }
    function physicsIITB(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsIITB();
        $this->load->view('arya_classes/classes/iit/batch/physicsIITB',$data);
        $this->load->view('layout/footer');
    }
    function physicsIITC(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsIITC();
        $this->load->view('arya_classes/classes/iit/batch/physicsIITC',$data);
        $this->load->view('layout/footer');
    }
    function physicsIITD(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsIITD();
        $this->load->view('arya_classes/classes/iit/batch/physicsIITD',$data);
        $this->load->view('layout/footer');
    }
    function physicsIITE(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsIITE();
        $this->load->view('arya_classes/classes/iit/batch/physicsIITE',$data);
        $this->load->view('layout/footer');
    }
//IIT Chemistry Batch Wise
    function chemistryIITA(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryIITA();
        $this->load->view('arya_classes/classes/iit/batch/chemistryIITA',$data);
        $this->load->view('layout/footer');
    }
    function chemistryIITB(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryIITB();
        $this->load->view('arya_classes/classes/iit/batch/chemistryIITB',$data);
        $this->load->view('layout/footer');
    }
    function chemistryIITC(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryIITC();
        $this->load->view('arya_classes/classes/iit/batch/chemistryIITC',$data);
        $this->load->view('layout/footer');
    }
    function chemistryIITD(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryIITD();
        $this->load->view('arya_classes/classes/iit/batch/chemistryIITD',$data);
        $this->load->view('layout/footer');
    }
    function chemistryIITE(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryIITE();
        $this->load->view('arya_classes/classes/iit/batch/chemistryIITE',$data);
        $this->load->view('layout/footer');
    }
//IIT Maths Batch Wise
    function mathsIITA(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsIITA();
        $this->load->view('arya_classes/classes/iit/batch/mathsIITA',$data);
        $this->load->view('layout/footer');
    }
    function mathsIITB(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsIITB();
        $this->load->view('arya_classes/classes/iit/batch/mathsIITB',$data);
        $this->load->view('layout/footer');
    }
    function mathsIITC(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsIITC();
        $this->load->view('arya_classes/classes/iit/batch/mathsIITC',$data);
        $this->load->view('layout/footer');
    }
    function mathsIITD(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsIITD();
        $this->load->view('arya_classes/classes/iit/batch/mathsIITD',$data);
        $this->load->view('layout/footer');
    }
    function mathsIITE(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsIITE();
        $this->load->view('arya_classes/classes/iit/batch/mathsIITE',$data);
        $this->load->view('layout/footer');
    }
//Net Physics Batch Wise
    function physicsNetA(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsNetA();
        $this->load->view('arya_classes/classes/net/batch/physicsNetA',$data);
        $this->load->view('layout/footer');
    }
    function physicsNetB(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsNetB();
        $this->load->view('arya_classes/classes/net/batch/physicsNetB',$data);
        $this->load->view('layout/footer');
    }
    function physicsNetC(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsNetC();
        $this->load->view('arya_classes/classes/net/batch/physicsNetC',$data);
        $this->load->view('layout/footer');
    }
    function physicsNetD(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsNetD();
        $this->load->view('arya_classes/classes/net/batch/physicsNetD',$data);
        $this->load->view('layout/footer');
    }
    function physicsNetE(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsNetE();
        $this->load->view('arya_classes/classes/net/batch/physicsNetE',$data);
        $this->load->view('layout/footer');
    }
 //Net Chemistry Batch Wise
    function chemistryNetA(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryNetA();
        $this->load->view('arya_classes/classes/net/batch/chemistryNetA',$data);
        $this->load->view('layout/footer');
    }
    function chemistryNetB(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryNetB();
        $this->load->view('arya_classes/classes/net/batch/chemistryNetB',$data);
        $this->load->view('layout/footer');
    }
    function chemistryNetC(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryNetC();
        $this->load->view('arya_classes/classes/net/batch/chemistryNetC',$data);
        $this->load->view('layout/footer');
    }
    function chemistryNetD(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryNetD();
        $this->load->view('arya_classes/classes/net/batch/chemistryNetD',$data);
        $this->load->view('layout/footer');
    }
    function chemistryNetE(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryNetE();
        $this->load->view('arya_classes/classes/net/batch/chemistryNetE',$data);
        $this->load->view('layout/footer');
    }
//Net Maths Batch Wise
    function mathsNetA(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsNetA();
        $this->load->view('arya_classes/classes/net/batch/mathsNetA',$data);
        $this->load->view('layout/footer');
    }
    function mathsNetB(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsNetB();
        $this->load->view('arya_classes/classes/net/batch/mathsNetB',$data);
        $this->load->view('layout/footer');
    }
    function mathsNetC(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsNetC();
        $this->load->view('arya_classes/classes/net/batch/mathsNetC',$data);
        $this->load->view('layout/footer');
    }
    function mathsNetD(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsNetD();
        $this->load->view('arya_classes/classes/net/batch/mathsNetD',$data);
        $this->load->view('layout/footer');
    }
    function mathsNetE(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsNetE();
        $this->load->view('arya_classes/classes/net/batch/mathsNetE',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 Year Chemistry Batch Wise
    function chemistryBsc1P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P1A();
        $this->load->view('arya_classes/classes/bsc1/chemistry/1/chemistryBsc1P1A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P1B();
        $this->load->view('arya_classes/classes/bsc1/chemistry/1/chemistryBsc1P1B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P1C();
        $this->load->view('arya_classes/classes/bsc1/chemistry/1/chemistryBsc1P1C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P1D();
        $this->load->view('arya_classes/classes/bsc1/chemistry/1/chemistryBsc1P1D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P1E();
        $this->load->view('arya_classes/classes/bsc1/chemistry/1/chemistryBsc1P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 year chemistry paper 2
    function chemistryBsc1P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P2A();
        $this->load->view('arya_classes/classes/bsc1/chemistry/2/chemistryBsc1P2A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P2B();
        $this->load->view('arya_classes/classes/bsc1/chemistry/2/chemistryBsc1P2B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P2C();
        $this->load->view('arya_classes/classes/bsc1/chemistry/2/chemistryBsc1P2C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P2D();
        $this->load->view('arya_classes/classes/bsc1/chemistry/2/chemistryBsc1P2D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P2E();
        $this->load->view('arya_classes/classes/bsc1/chemistry/2/chemistryBsc1P2E',$data);
        $this->load->view('layout/footer');
    }
 //Bsc 1 year Chemistry paper 3
    function chemistryBsc1P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P3A();
        $this->load->view('arya_classes/classes/bsc1/chemistry/3/chemistryBsc1P3A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P3B();
        $this->load->view('arya_classes/classes/bsc1/chemistry/3/chemistryBsc1P3B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P3C();
        $this->load->view('arya_classes/classes/bsc1/chemistry/3/chemistryBsc1P3C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P3D();
        $this->load->view('arya_classes/classes/bsc1/chemistry/3/chemistryBsc1P3D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc1P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc1P3E();
        $this->load->view('arya_classes/classes/bsc1/chemistry/3/chemistryBsc1P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 Year Maths Paper 1
    function mathsBsc1P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P1A();
        $this->load->view('arya_classes/classes/bsc1/maths/1/mathsBsc1P1A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P1B();
        $this->load->view('arya_classes/classes/bsc1/maths/1/mathsBsc1P1B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P1C();
        $this->load->view('arya_classes/classes/bsc1/maths/1/mathsBsc1P1C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P1D();
        $this->load->view('arya_classes/classes/bsc1/maths/1/mathsBsc1P1D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P1E();
        $this->load->view('arya_classes/classes/bsc1/maths/1/mathsBsc1P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 Year Maths Paper 2
    function mathsBsc1P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P2A();
        $this->load->view('arya_classes/classes/bsc1/maths/2/mathsBsc1P2A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P2B();
        $this->load->view('arya_classes/classes/bsc1/maths/2/mathsBsc1P2B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P2C();
        $this->load->view('arya_classes/classes/bsc1/maths/2/mathsBsc1P2C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P2D();
        $this->load->view('arya_classes/classes/bsc1/maths/2/mathsBsc1P2D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P2E();
        $this->load->view('arya_classes/classes/bsc1/maths/2/mathsBsc1P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 Year Maths Paper 3
    function mathsBsc1P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P3A();
        $this->load->view('arya_classes/classes/bsc1/maths/3/mathsBsc1P3A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P3B();
        $this->load->view('arya_classes/classes/bsc1/maths/3/mathsBsc1P3B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P3C();
        $this->load->view('arya_classes/classes/bsc1/maths/3/mathsBsc1P3C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P3D();
        $this->load->view('arya_classes/classes/bsc1/maths/3/mathsBsc1P3D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc1P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc1P3E();
        $this->load->view('arya_classes/classes/bsc1/maths/3/mathsBsc1P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 Year Physics Paper 1
    function physicsBsc1P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P1A();
        $this->load->view('arya_classes/classes/bsc1/physics/1/physicsBsc1P1A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P1B();
        $this->load->view('arya_classes/classes/bsc1/physics/1/physicsBsc1P1B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P1C();
        $this->load->view('arya_classes/classes/bsc1/physics/1/physicsBsc1P1C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P1D();
        $this->load->view('arya_classes/classes/bsc1/physics/1/physicsBsc1P1D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P1E();
        $this->load->view('arya_classes/classes/bsc1/physics/1/physicsBsc1P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 Year Physics Paper 1
    function physicsBsc1P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P2A();
        $this->load->view('arya_classes/classes/bsc1/physics/2/physicsBsc1P2A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P2B();
        $this->load->view('arya_classes/classes/bsc1/physics/2/physicsBsc1P2B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P2C();
        $this->load->view('arya_classes/classes/bsc1/physics/2/physicsBsc1P2C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P2D();
        $this->load->view('arya_classes/classes/bsc1/physics/2/physicsBsc1P2D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P2E();
        $this->load->view('arya_classes/classes/bsc1/physics/2/physicsBsc1P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 1 Year Physics Paper 1
    function physicsBsc1P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P3A();
        $this->load->view('arya_classes/classes/bsc1/physics/3/physicsBsc1P3A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P3B();
        $this->load->view('arya_classes/classes/bsc1/physics/3/physicsBsc1P3B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P3C();
        $this->load->view('arya_classes/classes/bsc1/physics/3/physicsBsc1P3C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P3D();
        $this->load->view('arya_classes/classes/bsc1/physics/3/physicsBsc1P3D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc1P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc1P3E();
        $this->load->view('arya_classes/classes/bsc1/physics/3/physicsBsc1P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Physics Paper 1
    function physicsBsc2P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P1A();
        $this->load->view('arya_classes/classes/bsc2/physics/1/physicsBsc2P1A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P1B();
        $this->load->view('arya_classes/classes/bsc2/physics/1/physicsBsc2P1B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P1C();
        $this->load->view('arya_classes/classes/bsc2/physics/1/physicsBsc2P1C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P1D();
        $this->load->view('arya_classes/classes/bsc2/physics/1/physicsBsc2P1D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P1E();
        $this->load->view('arya_classes/classes/bsc2/physics/1/physicsBsc2P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Physics Paper 2
    function physicsBsc2P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P2A();
        $this->load->view('arya_classes/classes/bsc2/physics/2/physicsBsc2P2A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P2B();
        $this->load->view('arya_classes/classes/bsc2/physics/2/physicsBsc2P2B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P2C();
        $this->load->view('arya_classes/classes/bsc2/physics/2/physicsBsc2P2C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P2D();
        $this->load->view('arya_classes/classes/bsc2/physics/2/physicsBsc2P2D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P2E();
        $this->load->view('arya_classes/classes/bsc2/physics/2/physicsBsc2P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Physics Paper 3
    function physicsBsc2P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P3A();
        $this->load->view('arya_classes/classes/bsc2/physics/3/physicsBsc2P3A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P3B();
        $this->load->view('arya_classes/classes/bsc2/physics/3/physicsBsc2P3B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P3C();
        $this->load->view('arya_classes/classes/bsc2/physics/3/physicsBsc2P3C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P3D();
        $this->load->view('arya_classes/classes/bsc2/physics/3/physicsBsc2P3D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc2P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc2P3E();
        $this->load->view('arya_classes/classes/bsc2/physics/3/physicsBsc2P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Chemistry Paper 1
    function chemistryBsc2P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P1A();
        $this->load->view('arya_classes/classes/bsc2/chemistry/1/chemistryBsc2P1A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P1B();
        $this->load->view('arya_classes/classes/bsc2/chemistry/1/chemistryBsc2P1B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P1C();
        $this->load->view('arya_classes/classes/bsc2/chemistry/1/chemistryBsc2P1C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P1D();
        $this->load->view('arya_classes/classes/bsc2/chemistry/1/chemistryBsc2P1D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P1E();
        $this->load->view('arya_classes/classes/bsc2/chemistry/1/chemistryBsc2P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Chemistry Paper 2
    function chemistryBsc2P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P2A();
        $this->load->view('arya_classes/classes/bsc2/chemistry/2/chemistryBsc2P2A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P2B();
        $this->load->view('arya_classes/classes/bsc2/chemistry/2/chemistryBsc2P2B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P2C();
        $this->load->view('arya_classes/classes/bsc2/chemistry/2/chemistryBsc2P2C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P2D();
        $this->load->view('arya_classes/classes/bsc2/chemistry/2/chemistryBsc2P2D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P2E();
        $this->load->view('arya_classes/classes/bsc2/chemistry/2/chemistryBsc2P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Chemistry Paper 3
    function chemistryBsc2P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P3A();
        $this->load->view('arya_classes/classes/bsc2/chemistry/3/chemistryBsc2P3A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P3B();
        $this->load->view('arya_classes/classes/bsc2/chemistry/3/chemistryBsc2P3B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P3C();
        $this->load->view('arya_classes/classes/bsc2/chemistry/3/chemistryBsc2P3C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P3D();
        $this->load->view('arya_classes/classes/bsc2/chemistry/3/chemistryBsc2P3D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc2P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc2P3E();
        $this->load->view('arya_classes/classes/bsc2/chemistry/3/chemistryBsc2P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Maths Paper 1
    function mathsBsc2P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P1A();
        $this->load->view('arya_classes/classes/bsc2/maths/1/mathsBsc2P1A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P1B();
        $this->load->view('arya_classes/classes/bsc2/maths/1/mathsBsc2P1B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P1C();
        $this->load->view('arya_classes/classes/bsc2/maths/1/mathsBsc2P1C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P1D();
        $this->load->view('arya_classes/classes/bsc2/maths/1/mathsBsc2P1D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P1E();
        $this->load->view('arya_classes/classes/bsc2/maths/1/mathsBsc2P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Maths Paper 2
    function mathsBsc2P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P2A();
        $this->load->view('arya_classes/classes/bsc2/maths/2/mathsBsc2P2A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P2B();
        $this->load->view('arya_classes/classes/bsc2/maths/2/mathsBsc2P2B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P2C();
        $this->load->view('arya_classes/classes/bsc2/maths/2/mathsBsc2P2C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P2D();
        $this->load->view('arya_classes/classes/bsc2/maths/2/mathsBsc2P2D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P2E();
        $this->load->view('arya_classes/classes/bsc2/maths/2/mathsBsc2P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 2 Year Maths Paper 3
    function mathsBsc2P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P3A();
        $this->load->view('arya_classes/classes/bsc2/maths/3/mathsBsc2P3A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P3B();
        $this->load->view('arya_classes/classes/bsc2/maths/3/mathsBsc2P3B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P3C();
        $this->load->view('arya_classes/classes/bsc2/maths/3/mathsBsc2P3C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P3D();
        $this->load->view('arya_classes/classes/bsc2/maths/3/mathsBsc2P3D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc2P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc2P3E();
        $this->load->view('arya_classes/classes/bsc2/maths/3/mathsBsc2P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Physics Paper 1
    function physicsBsc3P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P1A();
        $this->load->view('arya_classes/classes/bsc3/physics/1/physicsBsc3P1A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P1B();
        $this->load->view('arya_classes/classes/bsc3/physics/1/physicsBsc3P1B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P1C();
        $this->load->view('arya_classes/classes/bsc3/physics/1/physicsBsc3P1C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P1D();
        $this->load->view('arya_classes/classes/bsc3/physics/1/physicsBsc3P1D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P1E();
        $this->load->view('arya_classes/classes/bsc3/physics/1/physicsBsc3P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Physics Paper 2
    function physicsBsc3P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P2A();
        $this->load->view('arya_classes/classes/bsc3/physics/2/physicsBsc3P2A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P2B();
        $this->load->view('arya_classes/classes/bsc3/physics/2/physicsBsc3P2B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P2C();
        $this->load->view('arya_classes/classes/bsc3/physics/2/physicsBsc3P2C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P2D();
        $this->load->view('arya_classes/classes/bsc3/physics/2/physicsBsc3P2D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P2E();
        $this->load->view('arya_classes/classes/bsc3/physics/2/physicsBsc3P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Physics Paper 3
    function physicsBsc3P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P3A();
        $this->load->view('arya_classes/classes/bsc3/physics/3/physicsBsc3P3A',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P3B();
        $this->load->view('arya_classes/classes/bsc3/physics/3/physicsBsc3P3B',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P3C();
        $this->load->view('arya_classes/classes/bsc3/physics/3/physicsBsc3P3C',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P3D();
        $this->load->view('arya_classes/classes/bsc3/physics/3/physicsBsc3P3D',$data);
        $this->load->view('layout/footer');
    }
    function physicsBsc3P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsBsc3P3E();
        $this->load->view('arya_classes/classes/bsc3/physics/3/physicsBsc3P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Chemistry Paper 1
    function chemistryBsc3P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P1A();
        $this->load->view('arya_classes/classes/bsc3/chemistry/1/chemistryBsc3P1A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P1B();
        $this->load->view('arya_classes/classes/bsc3/chemistry/1/chemistryBsc3P1B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P1C();
        $this->load->view('arya_classes/classes/bsc3/chemistry/1/chemistryBsc3P1C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P1D();
        $this->load->view('arya_classes/classes/bsc3/chemistry/1/chemistryBsc3P1D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P1E();
        $this->load->view('arya_classes/classes/bsc3/chemistry/1/chemistryBsc3P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Chemistry Paper 2
    function chemistryBsc3P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P2A();
        $this->load->view('arya_classes/classes/bsc3/chemistry/2/chemistryBsc3P2A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P2B();
        $this->load->view('arya_classes/classes/bsc3/chemistry/2/chemistryBsc3P2B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P2C();
        $this->load->view('arya_classes/classes/bsc3/chemistry/2/chemistryBsc3P2C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P2D();
        $this->load->view('arya_classes/classes/bsc3/chemistry/2/chemistryBsc3P2D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P2E();
        $this->load->view('arya_classes/classes/bsc3/chemistry/2/chemistryBsc3P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Chemistry Paper 3
    function chemistryBsc3P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P3A();
        $this->load->view('arya_classes/classes/bsc3/chemistry/3/chemistryBsc3P3A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P3B();
        $this->load->view('arya_classes/classes/bsc3/chemistry/3/chemistryBsc3P3B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P3C();
        $this->load->view('arya_classes/classes/bsc3/chemistry/3/chemistryBsc3P3C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P3D();
        $this->load->view('arya_classes/classes/bsc3/chemistry/3/chemistryBsc3P3D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryBsc3P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryBsc3P3E();
        $this->load->view('arya_classes/classes/bsc3/chemistry/3/chemistryBsc3P3E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Maths Paper 1
    function mathsBsc3P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P1A();
        $this->load->view('arya_classes/classes/bsc3/maths/1/mathsBsc3P1A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P1B();
        $this->load->view('arya_classes/classes/bsc3/maths/1/mathsBsc3P1B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P1C();
        $this->load->view('arya_classes/classes/bsc3/maths/1/mathsBsc3P1C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P1D();
        $this->load->view('arya_classes/classes/bsc3/maths/1/mathsBsc3P1D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P1E();
        $this->load->view('arya_classes/classes/bsc3/maths/1/mathsBsc3P1E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Maths Paper 2
    function mathsBsc3P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P2A();
        $this->load->view('arya_classes/classes/bsc3/maths/2/mathsBsc3P2A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P2B();
        $this->load->view('arya_classes/classes/bsc3/maths/2/mathsBsc3P2B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P2C();
        $this->load->view('arya_classes/classes/bsc3/maths/2/mathsBsc3P2C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P2D();
        $this->load->view('arya_classes/classes/bsc3/maths/2/mathsBsc3P2D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P2E();
        $this->load->view('arya_classes/classes/bsc3/maths/2/mathsBsc3P2E',$data);
        $this->load->view('layout/footer');
    }
//Bsc 3 Year Maths Paper 3
    function mathsBsc3P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P3A();
        $this->load->view('arya_classes/classes/bsc3/maths/3/mathsBsc3P3A',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P3B();
        $this->load->view('arya_classes/classes/bsc3/maths/3/mathsBsc3P3B',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P3C();
        $this->load->view('arya_classes/classes/bsc3/maths/3/mathsBsc3P3C',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P3D();
        $this->load->view('arya_classes/classes/bsc3/maths/3/mathsBsc3P3D',$data);
        $this->load->view('layout/footer');
    }
    function mathsBsc3P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsBsc3P3E();
        $this->load->view('arya_classes/classes/bsc3/maths/3/mathsBsc3P3E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Physics Paper 1
    function physicsMsc1P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P1A();
        $this->load->view('arya_classes/classes/msc1/physics/1/physicsMsc1P1A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P1B();
        $this->load->view('arya_classes/classes/msc1/physics/1/physicsMsc1P1B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P1C();
        $this->load->view('arya_classes/classes/msc1/physics/1/physicsMsc1P1C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P1D();
        $this->load->view('arya_classes/classes/msc1/physics/1/physicsMsc1P1D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P1E();
        $this->load->view('arya_classes/classes/msc1/physics/1/physicsMsc1P1E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Physics Paper 2
    function physicsMsc1P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P2A();
        $this->load->view('arya_classes/classes/msc1/physics/2/physicsMsc1P2A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P2B();
        $this->load->view('arya_classes/classes/msc1/physics/2/physicsMsc1P2B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P2C();
        $this->load->view('arya_classes/classes/msc1/physics/2/physicsMsc1P2C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P2D();
        $this->load->view('arya_classes/classes/msc1/physics/2/physicsMsc1P2D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P2E();
        $this->load->view('arya_classes/classes/msc1/physics/2/physicsMsc1P2E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Physics Paper 3
    function physicsMsc1P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P3A();
        $this->load->view('arya_classes/classes/msc1/physics/3/physicsMsc1P3A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P3B();
        $this->load->view('arya_classes/classes/msc1/physics/3/physicsMsc1P3B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P3C();
        $this->load->view('arya_classes/classes/msc1/physics/3/physicsMsc1P3C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P3D();
        $this->load->view('arya_classes/classes/msc1/physics/3/physicsMsc1P3D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P3E();
        $this->load->view('arya_classes/classes/msc1/physics/3/physicsMsc1P3E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Physics Paper 4
    function physicsMsc1P4A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P4A();
        $this->load->view('arya_classes/classes/msc1/physics/4/physicsMsc1P4A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P4B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P4B();
        $this->load->view('arya_classes/classes/msc1/physics/4/physicsMsc1P4B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P4C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P4C();
        $this->load->view('arya_classes/classes/msc1/physics/4/physicsMsc1P4C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P4D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P4D();
        $this->load->view('arya_classes/classes/msc1/physics/4/physicsMsc1P4D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P4E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P4E();
        $this->load->view('arya_classes/classes/msc1/physics/4/physicsMsc1P4E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Physics Paper 5
    function physicsMsc1P5A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P5A();
        $this->load->view('arya_classes/classes/msc1/physics/5/physicsMsc1P5A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P5B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P5B();
        $this->load->view('arya_classes/classes/msc1/physics/5/physicsMsc1P5B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P5C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P5C();
        $this->load->view('arya_classes/classes/msc1/physics/5/physicsMsc1P5C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P5D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P5D();
        $this->load->view('arya_classes/classes/msc1/physics/5/physicsMsc1P5D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc1P5E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc1P5E();
        $this->load->view('arya_classes/classes/msc1/physics/5/physicsMsc1P5E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Chemistry Paper 1
    function chemistryMsc1P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P1A();
        $this->load->view('arya_classes/classes/msc1/chemistry/1/chemistryMsc1P1A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P1B();
        $this->load->view('arya_classes/classes/msc1/chemistry/1/chemistryMsc1P1B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P1C();
        $this->load->view('arya_classes/classes/msc1/chemistry/1/chemistryMsc1P1C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P1D();
        $this->load->view('arya_classes/classes/msc1/chemistry/1/chemistryMsc1P1D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P1E();
        $this->load->view('arya_classes/classes/msc1/chemistry/1/chemistryMsc1P1E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Chemistry Paper 2
    function chemistryMsc1P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P2A();
        $this->load->view('arya_classes/classes/msc1/chemistry/2/chemistryMsc1P2A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P2B();
        $this->load->view('arya_classes/classes/msc1/chemistry/2/chemistryMsc1P2B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P2C();
        $this->load->view('arya_classes/classes/msc1/chemistry/2/chemistryMsc1P2C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P2D();
        $this->load->view('arya_classes/classes/msc1/chemistry/2/chemistryMsc1P2D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P2E();
        $this->load->view('arya_classes/classes/msc1/chemistry/2/chemistryMsc1P2E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Chemistry Paper 3
    function chemistryMsc1P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P3A();
        $this->load->view('arya_classes/classes/msc1/chemistry/3/chemistryMsc1P3A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P3B();
        $this->load->view('arya_classes/classes/msc1/chemistry/3/chemistryMsc1P3B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P3C();
        $this->load->view('arya_classes/classes/msc1/chemistry/3/chemistryMsc1P3C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P3D();
        $this->load->view('arya_classes/classes/msc1/chemistry/3/chemistryMsc1P3D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P3E();
        $this->load->view('arya_classes/classes/msc1/chemistry/3/chemistryMsc1P3E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Chemistry Paper 4
    function chemistryMsc1P4A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P4A();
        $this->load->view('arya_classes/classes/msc1/chemistry/4/chemistryMsc1P4A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P4B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P4B();
        $this->load->view('arya_classes/classes/msc1/chemistry/4/chemistryMsc1P4B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P4C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P4C();
        $this->load->view('arya_classes/classes/msc1/chemistry/4/chemistryMsc1P4C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P4D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P4D();
        $this->load->view('arya_classes/classes/msc1/chemistry/4/chemistryMsc1P4D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P4E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P4E();
        $this->load->view('arya_classes/classes/msc1/chemistry/4/chemistryMsc1P4E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Chemistry Paper 5
    function chemistryMsc1P5A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P5A();
        $this->load->view('arya_classes/classes/msc1/chemistry/5/chemistryMsc1P5A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P5B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P5B();
        $this->load->view('arya_classes/classes/msc1/chemistry/5/chemistryMsc1P5B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P5C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P5C();
        $this->load->view('arya_classes/classes/msc1/chemistry/5/chemistryMsc1P5C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P5D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P5D();
        $this->load->view('arya_classes/classes/msc1/chemistry/5/chemistryMsc1P5D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc1P5E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc1P5E();
        $this->load->view('arya_classes/classes/msc1/chemistry/5/chemistryMsc1P5E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Maths Paper 1
    function mathsMsc1P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P1A();
        $this->load->view('arya_classes/classes/msc1/maths/1/mathsMsc1P1A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P1B();
        $this->load->view('arya_classes/classes/msc1/maths/1/mathsMsc1P1B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P1C();
        $this->load->view('arya_classes/classes/msc1/maths/1/mathsMsc1P1C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P1D();
        $this->load->view('arya_classes/classes/msc1/maths/1/mathsMsc1P1D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P1E();
        $this->load->view('arya_classes/classes/msc1/maths/1/mathsMsc1P1E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Maths Paper 2
    function mathsMsc1P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P2A();
        $this->load->view('arya_classes/classes/msc1/maths/2/mathsMsc1P2A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P2B();
        $this->load->view('arya_classes/classes/msc1/maths/2/mathsMsc1P2B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P2C();
        $this->load->view('arya_classes/classes/msc1/maths/2/mathsMsc1P2C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P2D();
        $this->load->view('arya_classes/classes/msc1/maths/2/mathsMsc1P2D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P2E();
        $this->load->view('arya_classes/classes/msc1/maths/2/mathsMsc1P2E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Maths Paper 3
    function mathsMsc1P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P3A();
        $this->load->view('arya_classes/classes/msc1/maths/3/mathsMsc1P3A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P3B();
        $this->load->view('arya_classes/classes/msc1/maths/3/mathsMsc1P3B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P3C();
        $this->load->view('arya_classes/classes/msc1/maths/3/mathsMsc1P3C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P3D();
        $this->load->view('arya_classes/classes/msc1/maths/3/mathsMsc1P3D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P3E();
        $this->load->view('arya_classes/classes/msc1/maths/3/mathsMsc1P3E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Maths Paper 4
    function mathsMsc1P4A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P4A();
        $this->load->view('arya_classes/classes/msc1/maths/4/mathsMsc1P4A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P4B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P4B();
        $this->load->view('arya_classes/classes/msc1/maths/4/mathsMsc1P4B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P4C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P4C();
        $this->load->view('arya_classes/classes/msc1/maths/4/mathsMsc1P4C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P4D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P4D();
        $this->load->view('arya_classes/classes/msc1/maths/4/mathsMsc1P4D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P4E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P4E();
        $this->load->view('arya_classes/classes/msc1/maths/4/mathsMsc1P4E',$data);
        $this->load->view('layout/footer');
    }
//Msc 1 Year Maths Paper 5
    function mathsMsc1P5A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P5A();
        $this->load->view('arya_classes/classes/msc1/maths/5/mathsMsc1P5A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P5B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P5B();
        $this->load->view('arya_classes/classes/msc1/maths/5/mathsMsc1P5B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P5C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P5C();
        $this->load->view('arya_classes/classes/msc1/maths/5/mathsMsc1P5C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P5D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P5D();
        $this->load->view('arya_classes/classes/msc1/maths/5/mathsMsc1P5D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc1P5E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc1P5E();
        $this->load->view('arya_classes/classes/msc1/maths/5/mathsMsc1P5E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Physics Paper 1
    function physicsMsc2P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P1A();
        $this->load->view('arya_classes/classes/msc2/physics/1/physicsMsc2P1A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P1B();
        $this->load->view('arya_classes/classes/msc2/physics/1/physicsMsc2P1B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P1C();
        $this->load->view('arya_classes/classes/msc2/physics/1/physicsMsc2P1C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P1D();
        $this->load->view('arya_classes/classes/msc2/physics/1/physicsMsc2P1D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P1E();
        $this->load->view('arya_classes/classes/msc2/physics/1/physicsMsc2P1E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Physics Paper 2
    function physicsMsc2P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P2A();
        $this->load->view('arya_classes/classes/msc2/physics/2/physicsMsc2P2A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P2B();
        $this->load->view('arya_classes/classes/msc2/physics/2/physicsMsc2P2B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P2C();
        $this->load->view('arya_classes/classes/msc2/physics/2/physicsMsc2P2C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P2D();
        $this->load->view('arya_classes/classes/msc2/physics/2/physicsMsc2P2D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P2E();
        $this->load->view('arya_classes/classes/msc2/physics/2/physicsMsc2P2E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Physics Paper 3
    function physicsMsc2P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P3A();
        $this->load->view('arya_classes/classes/msc2/physics/3/physicsMsc2P3A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P3B();
        $this->load->view('arya_classes/classes/msc2/physics/3/physicsMsc2P3B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P3C();
        $this->load->view('arya_classes/classes/msc2/physics/3/physicsMsc2P3C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P3D();
        $this->load->view('arya_classes/classes/msc2/physics/3/physicsMsc2P3D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P3E();
        $this->load->view('arya_classes/classes/msc2/physics/3/physicsMsc2P3E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Physics Paper 4
    function physicsMsc2P4A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P4A();
        $this->load->view('arya_classes/classes/msc2/physics/4/physicsMsc2P4A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P4B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P4B();
        $this->load->view('arya_classes/classes/msc2/physics/4/physicsMsc2P4B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P4C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P4C();
        $this->load->view('arya_classes/classes/msc2/physics/4/physicsMsc2P4C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P4D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P4D();
        $this->load->view('arya_classes/classes/msc2/physics/4/physicsMsc2P4D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P4E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P4E();
        $this->load->view('arya_classes/classes/msc2/physics/4/physicsMsc2P4E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Physics Paper 5
    function physicsMsc2P5A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P5A();
        $this->load->view('arya_classes/classes/msc2/physics/5/physicsMsc2P5A',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P5B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P5B();
        $this->load->view('arya_classes/classes/msc2/physics/5/physicsMsc2P5B',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P5C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P5C();
        $this->load->view('arya_classes/classes/msc2/physics/5/physicsMsc2P5C',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P5D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P5D();
        $this->load->view('arya_classes/classes/msc2/physics/5/physicsMsc2P5D',$data);
        $this->load->view('layout/footer');
    }
    function physicsMsc2P5E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->physicsMsc2P5E();
        $this->load->view('arya_classes/classes/msc2/physics/5/physicsMsc2P5E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Chemistry Paper 1
    function chemistryMsc2P1A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P1A();
        $this->load->view('arya_classes/classes/msc2/chemistry/1/chemistryMsc2P1A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P1B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P1B();
        $this->load->view('arya_classes/classes/msc2/chemistry/1/chemistryMsc2P1B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P1C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P1C();
        $this->load->view('arya_classes/classes/msc2/chemistry/1/chemistryMsc2P1C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P1D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P1D();
        $this->load->view('arya_classes/classes/msc2/chemistry/1/chemistryMsc2P1D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P1E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P1E();
        $this->load->view('arya_classes/classes/msc2/chemistry/1/chemistryMsc2P1E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Chemistry Paper 2
    function chemistryMsc2P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P2A();
        $this->load->view('arya_classes/classes/msc2/chemistry/2/chemistryMsc2P2A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P2B();
        $this->load->view('arya_classes/classes/msc2/chemistry/2/chemistryMsc2P2B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P2C();
        $this->load->view('arya_classes/classes/msc2/chemistry/2/chemistryMsc2P2C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P2D();
        $this->load->view('arya_classes/classes/msc2/chemistry/2/chemistryMsc2P2D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P2E();
        $this->load->view('arya_classes/classes/msc2/chemistry/2/chemistryMsc2P2E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Chemistry Paper 3
    function chemistryMsc2P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P3A();
        $this->load->view('arya_classes/classes/msc2/chemistry/3/chemistryMsc2P3A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P3B();
        $this->load->view('arya_classes/classes/msc2/chemistry/3/chemistryMsc2P3B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P3C();
        $this->load->view('arya_classes/classes/msc2/chemistry/3/chemistryMsc2P3C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P3D();
        $this->load->view('arya_classes/classes/msc2/chemistry/3/chemistryMsc2P3D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P3E();
        $this->load->view('arya_classes/classes/msc2/chemistry/3/chemistryMsc2P3E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Chemistry Paper 4
    function chemistryMsc2P4A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P4A();
        $this->load->view('arya_classes/classes/msc2/chemistry/4/chemistryMsc2P4A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P4B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P4B();
        $this->load->view('arya_classes/classes/msc2/chemistry/4/chemistryMsc2P4B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P4C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P4C();
        $this->load->view('arya_classes/classes/msc2/chemistry/4/chemistryMsc2P4C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P4D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P4D();
        $this->load->view('arya_classes/classes/msc2/chemistry/4/chemistryMsc2P4D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P4E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P4E();
        $this->load->view('arya_classes/classes/msc2/chemistry/4/chemistryMsc2P4E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Chemistry Paper 5
    function chemistryMsc2P5A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P5A();
        $this->load->view('arya_classes/classes/msc2/chemistry/5/chemistryMsc2P5A',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P5B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P5B();
        $this->load->view('arya_classes/classes/msc2/chemistry/5/chemistryMsc2P5B',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P5C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P5C();
        $this->load->view('arya_classes/classes/msc2/chemistry/5/chemistryMsc2P5C',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P5D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P5D();
        $this->load->view('arya_classes/classes/msc2/chemistry/5/chemistryMsc2P5D',$data);
        $this->load->view('layout/footer');
    }
    function chemistryMsc2P5E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->chemistryMsc2P5E();
        $this->load->view('arya_classes/classes/msc2/chemistry/5/chemistryMsc2P5E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Maths Paper 1
    function mathsMsc2P1A(){
        $this->load->view('layout/header');
        $data2['result']=  $this->BatchModel->mathsMsc2P1A();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1A',$data2);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1B(){
        $this->load->view('layout/header');
        $data2['result']=  $this->BatchModel->mathsMsc2P1B();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1B',$data2);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1C(){
        $this->load->view('layout/header');
        $data2['result']=  $this->BatchModel->mathsMsc2P1C();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1C',$data2);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1D(){
        $this->load->view('layout/header');
        $data2['result']=  $this->BatchModel->mathsMsc2P1D();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1D',$data2);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P1E(){
        $this->load->view('layout/header');
        $data2['result']=  $this->BatchModel->mathsMsc2P1E();
        $this->load->view('arya_classes/classes/msc2/maths/1/mathsMsc2P1E',$data2);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Maths Paper 2
    function mathsMsc2P2A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P2A();
        $this->load->view('arya_classes/classes/msc2/maths/2/mathsMsc2P2A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P2B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P2B();
        $this->load->view('arya_classes/classes/msc2/maths/2/mathsMsc2P2B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P2C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P2C();
        $this->load->view('arya_classes/classes/msc2/maths/2/mathsMsc2P2C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P2D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P2D();
        $this->load->view('arya_classes/classes/msc2/maths/2/mathsMsc2P2D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P2E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P2E();
        $this->load->view('arya_classes/classes/msc2/maths/2/mathsMsc2P2E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Maths Paper 3
    function mathsMsc2P3A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P3A();
        $this->load->view('arya_classes/classes/msc2/maths/3/mathsMsc2P3A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P3B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P3B();
        $this->load->view('arya_classes/classes/msc2/maths/3/mathsMsc2P3B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P3C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P3C();
        $this->load->view('arya_classes/classes/msc2/maths/3/mathsMsc2P3C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P3D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P3D();
        $this->load->view('arya_classes/classes/msc2/maths/3/mathsMsc2P3D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P3E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P3E();
        $this->load->view('arya_classes/classes/msc2/maths/3/mathsMsc2P3E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Maths Paper 4
    function mathsMsc2P4A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P4A();
        $this->load->view('arya_classes/classes/msc2/maths/4/mathsMsc2P4A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P4B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P4B();
        $this->load->view('arya_classes/classes/msc2/maths/4/mathsMsc2P4B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P4C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P4C();
        $this->load->view('arya_classes/classes/msc2/maths/4/mathsMsc2P4C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P4D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P4D();
        $this->load->view('arya_classes/classes/msc2/maths/4/mathsMsc2P4D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P4E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P4E();
        $this->load->view('arya_classes/classes/msc2/maths/4/mathsMsc2P4E',$data);
        $this->load->view('layout/footer');
    }
//Msc 2 Year Maths Paper 5
    function mathsMsc2P5A(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P5A();
        $this->load->view('arya_classes/classes/msc2/maths/5/mathsMsc2P5A',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P5B(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P5B();
        $this->load->view('arya_classes/classes/msc2/maths/5/mathsMsc2P5B',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P5C(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P5C();
        $this->load->view('arya_classes/classes/msc2/maths/5/mathsMsc2P5C',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P5D(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P5D();
        $this->load->view('arya_classes/classes/msc2/maths/5/mathsMsc2P5D',$data);
        $this->load->view('layout/footer');
    }
    function mathsMsc2P5E(){
        $this->load->view('layout/header');
        $data['result']=  $this->BatchModel->mathsMsc2P5E();
        $this->load->view('arya_classes/classes/msc2/maths/5/mathsMsc2P5E',$data);
        $this->load->view('layout/footer');
    }
}