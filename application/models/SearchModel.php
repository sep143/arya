<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class SearchModel extends CI_Model{
 //Non form section 
        function nonformFill($id){
            $data='select * from student_record where class_id="'.$id.'" and status=0';
            $data= $this->db->query($data);
            return $data->result();
        }
         function eleven(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=1";
        $data=  $this->db->query($data);
        return $data->result();
    }
        function physics(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function PnonPay(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=1 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        } 
        function Ppay(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=1 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        } 
        //11 chemistry
        function chemistry(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=2";
            $data=  $this->db->query($data);
            return $data->result();
        } 
        function CnonPay(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=2 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        } 
        function Cpay(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=2 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        } 
        //11 Maths
        function maths(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=3";
            $data=  $this->db->query($data);
            return $data->result();
        } 
        function MnonPay(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=3 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        } 
        function Mpay(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=3 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        } 
    function twelve(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=2";
        $data=  $this->db->query($data);
        return $data->result();
    }
    //12 Physics
        function physics12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=4";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function PnonPay12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=4 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function Ppay12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=4 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    //12 Chemistry
        function chemistry12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=5";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function CnonPay12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=5 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function CPay12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=5 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    //12 Maths
        function maths12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=6";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function MnonPay12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=6 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function MPay12(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=6 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    function bsc1(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3";
        $data=  $this->db->query($data);
        return $data->result();
    }
    //bsc 1 year physics
        function physicsBsc1All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=10";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc1P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=10 and paper=15";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc1P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=10 and paper=16";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc1P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=10 and paper=17";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //bsc 1 year chemistry
        function chemistryBsc1All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=11 ";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc1P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=11 and paper=18";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc1P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=11 and paper=19";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc1P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=11 and paper=20";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //bsc 1 year Maths
        function mathsBsc1All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=12";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc1P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=12 and paper=21";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc1P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=12 and paper=22";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc1P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=3 and subject=12 and paper=23";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
            
    function bsc2(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4";
        $data=  $this->db->query($data);
        return $data->result();
    }
     //bsc 2 year physics
        function physicsBsc2All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=13";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc2P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=13 and paper=24";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc2P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=13 and paper=25";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc2P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=13 and paper=26";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //bsc 2 year chemistry
        function chemistryBsc2All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=14 ";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc2P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=14 and paper=27";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc2P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=14 and paper=28";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc2P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=14 and paper=29";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //bsc 2 year Maths
        function mathsBsc2All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=15";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc2P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=15 and paper=30";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc2P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=15 and paper=31";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc2P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=4 and subject=15 and paper=32";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    
    function bsc3(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5";
        $data=  $this->db->query($data);
        return $data->result();
    }
    //bsc 3 year physics
        function physicsBsc3All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=16";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc3P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=16 and paper=33";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc3P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=16 and paper=34";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsBsc3P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=16 and paper=35";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //bsc 2 year chemistry
        function chemistryBsc3All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=17 ";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc3P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=17 and paper=36";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc3P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=17 and paper=37";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryBsc3P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=17 and paper=38";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //bsc 2 year Maths
        function mathsBsc3All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=18";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc3P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=18 and paper=39";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc3P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=18 and paper=40";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsBsc3P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=5 and subject=18 and paper=41";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    
    function msc1(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6";
        $data=  $this->db->query($data);
        return $data->result();
    }
    //msc 1 year Physics
        function physicsMsc1All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=7";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc1P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=7 and paper=42";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc1P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=7 and paper=43";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc1P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=7 and paper=44";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc1P4(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=7 and paper=45";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc1P5(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=7 and paper=46";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //msc 1 year chemistry
        function chemistryMsc1All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=8";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc1P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=8 and paper=47";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc1P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=8 and paper=48";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc1P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=8 and paper=49";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc1P4(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=8 and paper=50";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc1P5(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=8 and paper=51";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //msc 1 year Maths
        function mathsMsc1All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=9";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc1P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=9 and paper=52";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc1P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=9 and paper=53";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc1P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=9 and paper=54";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc1P4(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=9 and paper=55";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc1P5(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=6 and subject=9 and paper=56";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    
    function msc2(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7";
        $data=  $this->db->query($data);
        return $data->result();
    }
    //msc 1 year Physics
        function physicsMsc2All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=19";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc2P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=19 and paper=57";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc2P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=19 and paper=58";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc2P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=19 and paper=59";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc2P4(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=19 and paper=60";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function physicsMsc2P5(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=19 and paper=61";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //msc 1 year chemistry
        function chemistryMsc2All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=20";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc2P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=20 and paper=62";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc2P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=20 and paper=63";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc2P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=20 and paper=64";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc2P4(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=20 and paper=65";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function chemistryMsc2P5(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=20 and paper=66";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    //msc 1 year Maths
        function mathsMsc2All(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=21";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc2P1(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=21 and paper=67";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc2P2(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=21 and paper=68";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc2P3(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=21 and paper=69";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc2P4(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=21 and paper=70";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
        function mathsMsc2P5(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=7 and subject=21 and paper=71";
            $data=  $this->db->query($data);
            return $data->result(); 
        }
    
    function iit(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=8";
        $data=  $this->db->query($data);
        return $data->result();
    }
    //iit Physics
        function physicsIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=22";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function PnonPayIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=22 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function PpayIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=22 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    //iit Chemistry
        function chemistryIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=23";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function CnonPayIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=23 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function CPayIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=23 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    //iit Maths
        function mathsIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=24";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function MnonPayIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=24 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function MPayIIT(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=24 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    
    function net(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where class=9";
        $data=  $this->db->query($data);
        return $data->result();
    }
        //iit Physics
        function physicsNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=25";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function PnonPayNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=25 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function PpayNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=25 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    //iit Chemistry
        function chemistryNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=26";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function CnonPayNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=26 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function CPayNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=26 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
    //iit Maths
        function mathsNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=27";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function MnonPayNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=27 and pay_status=0";
            $data=  $this->db->query($data);
            return $data->result();
        }
        function MPayNET(){
            $data="select * from student_record a inner join student_data b on a.id=b.student_id where subject=27 and pay_status=1";
            $data=  $this->db->query($data);
            return $data->result();
        }
}
