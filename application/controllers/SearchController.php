<?php
defined('BASEPATH')OR exit('No direct script sccess allowed');

class SearchController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('SearchModel');
        $this->load->helper('custom');
    }
    
    function index(){
        
    }
 //Non form filter use
        function nonformFill($id){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->nonformFill($id);
        $this->load->view('arya_classes/nonForm_1',$data);
        $this->load->view('layout/footer');
        }
         function eleven(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->eleven();
        $this->load->view('arya_classes/classes/eleven_v',$data);
        $this->load->view('layout/footer');
    }
    //11 class physics data
        function physics(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->physics();
            $this->load->view('arya_classes/classes/11/physics_11',$data);
            $this->load->view('layout/footer');
        }
        function PnonPay(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->PnonPay();
            $this->load->view('arya_classes/classes/11/pNonPay_11',$data);
            $this->load->view('layout/footer');
        }
        function Ppay(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->Ppay();
            $this->load->view('arya_classes/classes/11/pPay_11',$data);
            $this->load->view('layout/footer');
        }
        //11 chemistry
        function chemistry(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->chemistry();
            $this->load->view('arya_classes/classes/11/chemistry_11',$data);
            $this->load->view('layout/footer');
        }
        function CnonPay(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->CnonPay();
            $this->load->view('arya_classes/classes/11/cNonPay_11',$data);
            $this->load->view('layout/footer');
        }
        function Cpay(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->Cpay();
            $this->load->view('arya_classes/classes/11/cPay_11',$data);
            $this->load->view('layout/footer');
        }  
        //11 Maths
        function maths(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->maths();
            $this->load->view('arya_classes/classes/11/maths_11',$data);
            $this->load->view('layout/footer');
        }
        function MnonPay(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->MnonPay();
            $this->load->view('arya_classes/classes/11/mNonPay_11',$data);
            $this->load->view('layout/footer');
        }
        function Mpay(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->Mpay();
            $this->load->view('arya_classes/classes/11/mPay_11',$data);
            $this->load->view('layout/footer');
        }
    function twelve(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->twelve();
        $this->load->view('arya_classes/classes/twelve_v',$data);
        $this->load->view('layout/footer');
    }
    //12 physics
        function physics12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->physics12();
            $this->load->view('arya_classes/classes/12/physics_12',$data);
            $this->load->view('layout/footer');
        }
        function PnonPay12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->PnonPay12();
            $this->load->view('arya_classes/classes/12/pNonPay_12',$data);
            $this->load->view('layout/footer');
        }
        function Ppay12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->Ppay12();
            $this->load->view('arya_classes/classes/12/pPay_12',$data);
            $this->load->view('layout/footer');
        }
    //12 Chemistry
        function chemistry12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->chemistry12();
            $this->load->view('arya_classes/classes/12/chemistry_12',$data);
            $this->load->view('layout/footer');
        }
        function CnonPay12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->CnonPay12();
            $this->load->view('arya_classes/classes/12/cNonPay_12',$data);
            $this->load->view('layout/footer');
        }
        function CPay12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->CPay12();
            $this->load->view('arya_classes/classes/12/cPay_12',$data);
            $this->load->view('layout/footer');
        }
    //12 Maths
           function maths12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->maths12();
            $this->load->view('arya_classes/classes/12/maths_12',$data);
            $this->load->view('layout/footer');
        }
        function MnonPay12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->MnonPay12();
            $this->load->view('arya_classes/classes/12/mNonPay_12',$data);
            $this->load->view('layout/footer');
        }
        function MPay12(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->MPay12();
            $this->load->view('arya_classes/classes/12/mPay_12',$data);
            $this->load->view('layout/footer');
        } 
    function bsc1(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->bsc1();
        $this->load->view('arya_classes/classes/bsc1_v',$data);
        $this->load->view('layout/footer');
    }
    //bsc 1 year physics
            function physicsBsc1All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc1All();
                $this->load->view('arya_classes/classes/bsc1/physicsBsc1All',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc1P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc1P1();
                $this->load->view('arya_classes/classes/bsc1/physicsBsc1P1',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc1P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc1P2();
                $this->load->view('arya_classes/classes/bsc1/physicsBsc1P2',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc1P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc1P3();
                $this->load->view('arya_classes/classes/bsc1/physicsBsc1P3',$data);
                $this->load->view('layout/footer');
            }
    //bsc 1 year Chemistry
            function chemistryBsc1All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc1All();
                $this->load->view('arya_classes/classes/bsc1/chemistryBsc1All',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc1P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc1P1();
                $this->load->view('arya_classes/classes/bsc1/chemistryBsc1P1',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc1P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc1P2();
                $this->load->view('arya_classes/classes/bsc1/chemistryBsc1P2',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc1P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc1P3();
                $this->load->view('arya_classes/classes/bsc1/chemistryBsc1P3',$data);
                $this->load->view('layout/footer');
            } 
    //bsc 1 year Maths
            function mathsBsc1All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc1All();
                $this->load->view('arya_classes/classes/bsc1/mathsBsc1All',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc1P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc1P1();
                $this->load->view('arya_classes/classes/bsc1/mathsBsc1P1',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc1P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc1P2();
                $this->load->view('arya_classes/classes/bsc1/mathsBsc1P2',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc1P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc1P3();
                $this->load->view('arya_classes/classes/bsc1/mathsBsc1P3',$data);
                $this->load->view('layout/footer');
            }
    
                    
    function bsc2(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->bsc2();
        $this->load->view('arya_classes/classes/bsc2_v',$data);
        $this->load->view('layout/footer');
    }
    
     //bsc 2 year physics
            function physicsBsc2All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc2All();
                $this->load->view('arya_classes/classes/bsc2/physicsBsc2All',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc2P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc2P1();
                $this->load->view('arya_classes/classes/bsc2/physicsBsc2P1',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc2P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc2P2();
                $this->load->view('arya_classes/classes/bsc2/physicsBsc2P2',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc2P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc2P3();
                $this->load->view('arya_classes/classes/bsc2/physicsBsc2P3',$data);
                $this->load->view('layout/footer');
            }
    //bsc 2 year Chemistry
            function chemistryBsc2All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc2All();
                $this->load->view('arya_classes/classes/bsc2/chemistryBsc2All',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc2P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc2P1();
                $this->load->view('arya_classes/classes/bsc2/chemistryBsc2P1',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc2P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc2P2();
                $this->load->view('arya_classes/classes/bsc2/chemistryBsc2P2',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc2P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc2P3();
                $this->load->view('arya_classes/classes/bsc2/chemistryBsc2P3',$data);
                $this->load->view('layout/footer');
            } 
    //bsc 2 year Maths
            function mathsBsc2All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc2All();
                $this->load->view('arya_classes/classes/bsc2/mathsBsc2All',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc2P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc2P1();
                $this->load->view('arya_classes/classes/bsc2/mathsBsc2P1',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc2P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc2P2();
                $this->load->view('arya_classes/classes/bsc2/mathsBsc2P2',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc2P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc2P3();
                $this->load->view('arya_classes/classes/bsc2/mathsBsc2P3',$data);
                $this->load->view('layout/footer');
            }
    
    function bsc3(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->bsc3();
        $this->load->view('arya_classes/classes/bsc3_v',$data);
        $this->load->view('layout/footer');
    }
    //bsc 3 year physics
            function physicsBsc3All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc3All();
                $this->load->view('arya_classes/classes/bsc3/physicsBsc3All',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc3P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc3P1();
                $this->load->view('arya_classes/classes/bsc3/physicsBsc3P1',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc3P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc3P2();
                $this->load->view('arya_classes/classes/bsc3/physicsBsc3P2',$data);
                $this->load->view('layout/footer');
            }
            function physicsBsc3P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsBsc3P3();
                $this->load->view('arya_classes/classes/bsc3/physicsBsc3P3',$data);
                $this->load->view('layout/footer');
            }
    //bsc 2 year Chemistry
            function chemistryBsc3All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc3All();
                $this->load->view('arya_classes/classes/bsc3/chemistryBsc3All',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc3P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc3P1();
                $this->load->view('arya_classes/classes/bsc3/chemistryBsc3P1',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc3P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc3P2();
                $this->load->view('arya_classes/classes/bsc3/chemistryBsc3P2',$data);
                $this->load->view('layout/footer');
            }
            function chemistryBsc3P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryBsc3P3();
                $this->load->view('arya_classes/classes/bsc3/chemistryBsc3P3',$data);
                $this->load->view('layout/footer');
            } 
    //bsc 2 year Maths
            function mathsBsc3All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc3All();
                $this->load->view('arya_classes/classes/bsc3/mathsBsc3All',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc3P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc3P1();
                $this->load->view('arya_classes/classes/bsc3/mathsBsc3P1',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc3P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc3P2();
                $this->load->view('arya_classes/classes/bsc3/mathsBsc3P2',$data);
                $this->load->view('layout/footer');
            }
            function mathsBsc3P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsBsc3P3();
                $this->load->view('arya_classes/classes/bsc3/mathsBsc3P3',$data);
                $this->load->view('layout/footer');
            }
    
    function msc1(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->msc1();
        $this->load->view('arya_classes/classes/msc1_v',$data);
        $this->load->view('layout/footer');
    }
    //msc1 year physics
            function physicsMsc1All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc1All();
                $this->load->view('arya_classes/classes/msc1/physicsMsc1All',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc1P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc1P1();
                $this->load->view('arya_classes/classes/msc1/physicsMsc1P1',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc1P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc1P2();
                $this->load->view('arya_classes/classes/msc1/physicsMsc1P2',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc1P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc1P3();
                $this->load->view('arya_classes/classes/msc1/physicsMsc1P3',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc1P4(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc1P4();
                $this->load->view('arya_classes/classes/msc1/physicsMsc1P4',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc1P5(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc1P5();
                $this->load->view('arya_classes/classes/msc1/physicsMsc1P5',$data);
                $this->load->view('layout/footer');
            }
    //msc 1 year chemistry
            function chemistryMsc1All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc1All();
                $this->load->view('arya_classes/classes/msc1/chemistryMsc1All',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc1P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc1P1();
                $this->load->view('arya_classes/classes/msc1/chemistryMsc1P1',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc1P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc1P2();
                $this->load->view('arya_classes/classes/msc1/chemistryMsc1P2',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc1P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc1P3();
                $this->load->view('arya_classes/classes/msc1/chemistryMsc1P3',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc1P4(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc1P4();
                $this->load->view('arya_classes/classes/msc1/chemistryMsc1P4',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc1P5(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc1P5();
                $this->load->view('arya_classes/classes/msc1/chemistryMsc1P5',$data);
                $this->load->view('layout/footer');
            }
     //msc 1 year Maths
            function mathsMsc1All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc1All();
                $this->load->view('arya_classes/classes/msc1/mathsMsc1All',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc1P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc1P1();
                $this->load->view('arya_classes/classes/msc1/mathsMsc1P1',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc1P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc1P2();
                $this->load->view('arya_classes/classes/msc1/mathsMsc1P2',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc1P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc1P3();
                $this->load->view('arya_classes/classes/msc1/mathsMsc1P3',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc1P4(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc1P4();
                $this->load->view('arya_classes/classes/msc1/mathsMsc1P4',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc1P5(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc1P5();
                $this->load->view('arya_classes/classes/msc1/mathsMsc1P5',$data);
                $this->load->view('layout/footer');
            }
            
    function msc2(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->msc2();
        $this->load->view('arya_classes/classes/msc2_v',$data);
        $this->load->view('layout/footer');
    }
    //msc 2 year physics
            function physicsMsc2All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc2All();
                $this->load->view('arya_classes/classes/msc2/physicsMsc2All',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc2P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc2P1();
                $this->load->view('arya_classes/classes/msc2/physicsMsc2P1',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc2P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc2P2();
                $this->load->view('arya_classes/classes/msc2/physicsMsc2P2',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc2P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc2P3();
                $this->load->view('arya_classes/classes/msc2/physicsMsc2P3',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc2P4(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc2P4();
                $this->load->view('arya_classes/classes/msc2/physicsMsc2P4',$data);
                $this->load->view('layout/footer');
            }
            function physicsMsc2P5(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->physicsMsc2P5();
                $this->load->view('arya_classes/classes/msc2/physicsMsc2P5',$data);
                $this->load->view('layout/footer');
            }
    //msc 2 year chemistry
            function chemistryMsc2All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc2All();
                $this->load->view('arya_classes/classes/msc2/chemistryMsc2All',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc2P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc2P1();
                $this->load->view('arya_classes/classes/msc2/chemistryMsc2P1',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc2P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc2P2();
                $this->load->view('arya_classes/classes/msc2/chemistryMsc2P2',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc2P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc2P3();
                $this->load->view('arya_classes/classes/msc2/chemistryMsc2P3',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc2P4(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc2P4();
                $this->load->view('arya_classes/classes/msc2/chemistryMsc2P4',$data);
                $this->load->view('layout/footer');
            }
            function chemistryMsc2P5(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->chemistryMsc2P5();
                $this->load->view('arya_classes/classes/msc2/chemistryMsc2P5',$data);
                $this->load->view('layout/footer');
            }
     //msc 2 year Maths
            function mathsMsc2All(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc2All();
                $this->load->view('arya_classes/classes/msc2/mathsMsc2All',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc2P1(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc2P1();
                $this->load->view('arya_classes/classes/msc2/mathsMsc2P1',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc2P2(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc2P2();
                $this->load->view('arya_classes/classes/msc2/mathsMsc2P2',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc2P3(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc2P3();
                $this->load->view('arya_classes/classes/msc2/mathsMsc2P3',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc2P4(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc2P4();
                $this->load->view('arya_classes/classes/msc2/mathsMsc2P4',$data);
                $this->load->view('layout/footer');
            }
            function mathsMsc2P5(){
                $this->load->view('layout/header');
                $data['result']=  $this->SearchModel->mathsMsc2P5();
                $this->load->view('arya_classes/classes/msc2/mathsMsc2P5',$data);
                $this->load->view('layout/footer');
            }
    
    function iit(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->iit();
        $this->load->view('arya_classes/classes/iit_v',$data);
        $this->load->view('layout/footer');
    }
    //iit physics
        function physicsIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->physicsIIT();
            $this->load->view('arya_classes/classes/iit/physics_iit',$data);
            $this->load->view('layout/footer');
        }
        function PnonPayIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->PnonPayIIT();
            $this->load->view('arya_classes/classes/iit/pNonPay_iit',$data);
            $this->load->view('layout/footer');
        }
        function PpayIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->PpayIIT();
            $this->load->view('arya_classes/classes/iit/pPay_iit',$data);
            $this->load->view('layout/footer');
        }
    //iit Chemistry
        function chemistryIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->chemistryIIT();
            $this->load->view('arya_classes/classes/iit/chemistry_iit',$data);
            $this->load->view('layout/footer');
        }
        function CnonPayIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->CnonPayIIT();
            $this->load->view('arya_classes/classes/iit/cNonPay_iit',$data);
            $this->load->view('layout/footer');
        }
        function CPayIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->CPayIIT();
            $this->load->view('arya_classes/classes/iit/cPay_iit',$data);
            $this->load->view('layout/footer');
        }
    //iit Maths
           function mathsIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->mathsIIT();
            $this->load->view('arya_classes/classes/iit/maths_iit',$data);
            $this->load->view('layout/footer');
        }
        function MnonPayIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->MnonPayIIT();
            $this->load->view('arya_classes/classes/iit/mNonPay_iit',$data);
            $this->load->view('layout/footer');
        }
        function MPayIIT(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->MPayIIT();
            $this->load->view('arya_classes/classes/iit/mPay_iit',$data);
            $this->load->view('layout/footer');
        } 
    
    function net(){
        $this->load->view('layout/header');
        $data['result']=  $this->SearchModel->net();
        $this->load->view('arya_classes/classes/net_v',$data);
        $this->load->view('layout/footer');
    }
    //NET physics
        function physicsNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->physicsNET();
            $this->load->view('arya_classes/classes/net/physics_net',$data);
            $this->load->view('layout/footer');
        }
        function PnonPayNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->PnonPayNET();
            $this->load->view('arya_classes/classes/net/pNonPay_net',$data);
            $this->load->view('layout/footer');
        }
        function PpayNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->PpayNET();
            $this->load->view('arya_classes/classes/net/pPay_net',$data);
            $this->load->view('layout/footer');
        }
    //NET Chemistry
        function chemistryNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->chemistryNET();
            $this->load->view('arya_classes/classes/net/chemistry_net',$data);
            $this->load->view('layout/footer');
        }
        function CnonPayNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->CnonPayNET();
            $this->load->view('arya_classes/classes/net/cNonPay_net',$data);
            $this->load->view('layout/footer');
        }
        function CPayNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->CPayNET();
            $this->load->view('arya_classes/classes/net/cPay_net',$data);
            $this->load->view('layout/footer');
        }
    //NET Maths
           function mathsNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->mathsNET();
            $this->load->view('arya_classes/classes/net/maths_net',$data);
            $this->load->view('layout/footer');
        }
        function MnonPayNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->MnonPayNET();
            $this->load->view('arya_classes/classes/net/mNonPay_net',$data);
            $this->load->view('layout/footer');
        }
        function MPayNET(){
            $this->load->view('layout/header');
            $data['result']=  $this->SearchModel->MPayNET();
            $this->load->view('arya_classes/classes/net/mPay_net',$data);
            $this->load->view('layout/footer');
        } 
    
    function demo(){
        $this->load->view('layout/header');
        //$data['result']=  $this->SearchModel->net();
        $this->load->view('arya_classes/demo');
        $this->load->view('layout/footer');
    }
}
