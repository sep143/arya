<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class BatchModel extends CI_Model{
 
//11 physics Batch wise
    function physics11A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=8";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics11B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=9";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics11C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=10";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics11D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=11";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics11E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=12";
        $data=  $this->db->query($data);
        return $data->result();
    }
//11 chemistry Batch wise
    function chemistry11A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=13";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry11B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=14";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry11C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=15";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry11D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=16";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry11E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=17";
        $data=  $this->db->query($data);
        return $data->result();
    }
//11 Maths Batch Wise
    function maths11A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=18";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths11B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=19";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths11C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=20";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths11D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=21";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths11E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=22";
        $data=  $this->db->query($data);
        return $data->result();
    }
//12 physics Batch Wise
    function physics12A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=23";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics12B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=24";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics12C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=25";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics12D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=26";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physics12E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=27";
        $data=  $this->db->query($data);
        return $data->result();
    }
//12 Chemistry Batch Wise
    function chemistry12A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=28";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry12B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=29";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry12C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=30";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry12D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=31";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistry12E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=32";
        $data=  $this->db->query($data);
        return $data->result();
    }
//12 Maths Batch wise
    function maths12A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=33";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths12B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=34";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths12C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=35";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths12D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=36";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function maths12E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=37";
        $data=  $this->db->query($data);
        return $data->result();
    }
 //IIT Physics Batch Wise
    function physicsIITA(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=38";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsIITB(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=39";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsIITC(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=40";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsIITD(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=41";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsIITE(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=42";
        $data=  $this->db->query($data);
        return $data->result();
    }
//IIT Chemistry Batch Wise
    function chemistryIITA(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=43";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryIITB(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=44";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryIITC(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=45";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryIITD(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=46";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryIITE(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=47";
        $data=  $this->db->query($data);
        return $data->result();
    }
//IIT Maths Batch Wise
    function mathsIITA(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=48";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsIITB(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=49";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsIITC(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=50";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsIITD(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=51";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsIITE(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=52";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Net Physics Batch Wise
    function physicsNetA(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=53";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsNetB(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=54";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsNetC(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=55";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsNetD(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=56";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsNetE(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=57";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Net Chemistry Batch Wise
    function chemistryNetA(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=58";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryNetB(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=59";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryNetC(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=60";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryNetD(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=61";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryNetE(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=62";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Net Maths Batch Wise
    function mathsNetA(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=63";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsNetB(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=64";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsNetC(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=65";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsNetD(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=66";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsNetE(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=67";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 Year Chemistry paper 1
    function chemistryBsc1P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=83";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=84";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=85";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=86";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=87";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 Year Chemistry Paper 2
    function chemistryBsc1P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=88";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=89";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=90";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=91";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=92";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 Year Chemistry paper 3
    function chemistryBsc1P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=93";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=94";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=95";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=96";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc1P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=97";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 Year Maths Paper 1
    function mathsBsc1P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=98";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=99";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=100";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=101";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=102";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 Year Maths Paper 2
    function mathsBsc1P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=103";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=104";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=105";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=106";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=107";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 year Maths Paper 3
    function mathsBsc1P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=108";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=109";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=110";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=111";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc1P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=112";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 year Physics Paper 1
    function physicsBsc1P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=68";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=69";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=70";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=71";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=72";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 Year Physics Paper 2
    function physicsBsc1P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=73";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=74";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=75";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=76";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=77";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 1 Year Physics Paper 3
    function physicsBsc1P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=78";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=79";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=80";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=81";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc1P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=82";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Physics Paper 1
    function physicsBsc2P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=113";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=114";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=115";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=116";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=117";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Physics Paper 2
    function physicsBsc2P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=118";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=119";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=120";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=121";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=122";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Physics Paper 3
    function physicsBsc2P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=123";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=124";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=125";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=126";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc2P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=127";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Chemistry Paper 1
    function chemistryBsc2P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=128";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=129";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=130";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=131";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=132";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Chemistry Paper 2
    function chemistryBsc2P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=133";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=134";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=135";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=136";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=137";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Chemistry Paper 3
    function chemistryBsc2P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=138";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=139";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=140";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=141";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc2P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=142";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Maths Paper 1
    function mathsBsc2P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=143";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=144";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=145";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=146";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=147";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Maths Paper 2
    function mathsBsc2P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=148";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=149";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=150";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=151";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=152";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 2 Year Maths Paper 3
    function mathsBsc2P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=153";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=154";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=155";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=156";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc2P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=157";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Physics Paper 1
    function physicsBsc3P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=158";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=159";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=160";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=161";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=162";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Physics Paper 2
    function physicsBsc3P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=163";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=164";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=165";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=166";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=167";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Physics Paper 3
    function physicsBsc3P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=168";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=169";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=170";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=171";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsBsc3P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=172";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Chemistry Paper 1
    function chemistryBsc3P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=173";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=174";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=175";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=176";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=177";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Chemistry Paper 2
    function chemistryBsc3P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=178";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=179";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=180";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=181";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=182";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Chemistry Paper 3
    function chemistryBsc3P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=183";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=184";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=185";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=186";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryBsc3P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=187";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Maths Paper 1
    function mathsBsc3P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=188";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=189";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=190";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=191";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=192";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Maths Paper 2
    function mathsBsc3P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=193";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=194";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=195";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=196";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=197";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Bsc 3 Year Maths Paper 3
    function mathsBsc3P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=198";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=199";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=200";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=201";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsBsc3P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=202";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Physics Paper 1
    function physicsMsc1P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=203";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=204";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=205";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=206";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=207";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Physics Paper 2
    function physicsMsc1P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=208";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=209";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=210";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=211";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=212";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Physics Paper 3
    function physicsMsc1P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=213";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=214";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=215";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=216";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=217";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Physics Paper 4
    function physicsMsc1P4A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=218";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P4B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=219";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P4C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=220";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P4D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=221";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P4E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=222";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Physics Paper 5
    function physicsMsc1P5A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=223";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P5B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=224";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P5C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=225";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P5D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=226";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc1P5E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=227";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Chemistry Paper 1
    function chemistryMsc1P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=228";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=229";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=230";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=231";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=232";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Chemistry Paper 2
    function chemistryMsc1P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=233";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=234";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=235";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=236";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=237";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Chemistry Paper 3
    function chemistryMsc1P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=238";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=239";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=240";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=241";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=242";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Chemistry Paper 4
    function chemistryMsc1P4A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=243";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P4B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=244";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P4C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=245";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P4D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=246";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P4E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=247";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Chemistry Paper 5
    function chemistryMsc1P5A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=248";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P5B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=249";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P5C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=250";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P5D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=251";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc1P5E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=252";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Maths Paper 1
    function mathsMsc1P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=253";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=254";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=255";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=256";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=257";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Maths Paper 2
    function mathsMsc1P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=258";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=259";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=260";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=261";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=262";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Maths Paper 3
    function mathsMsc1P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=263";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=264";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=265";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=266";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=267";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Maths Paper 4
    function mathsMsc1P4A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=268";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P4B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=269";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P4C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=270";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P4D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=271";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P4E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=272";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 1 Year Maths Paper 5
    function mathsMsc1P5A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=273";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P5B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=274";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P5C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=275";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P5D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=276";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc1P5E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=277";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Physics Paper 1
    function physicsMsc2P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=278";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=279";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=280";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=281";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=282";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Physics Paper 2
    function physicsMsc2P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=283";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=284";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=285";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=286";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=287";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Physics Paper 3
    function physicsMsc2P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=288";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=289";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=290";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=291";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=292";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Physics Paper 4
    function physicsMsc2P4A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=293";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P4B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=294";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P4C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=295";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P4D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=296";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P4E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=297";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Physics Paper 5
    function physicsMsc2P5A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=298";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P5B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=299";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P5C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=300";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P5D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=301";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function physicsMsc2P5E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=302";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Chemistry Paper 1
    function chemistryMsc2P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=303";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=304";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=305";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=306";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=307";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Chemistry Paper 2
    function chemistryMsc2P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=308";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=309";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=310";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=311";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=312";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Chemistry Paper 3
    function chemistryMsc2P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=313";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=314";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=315";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=316";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=317";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Chemistry Paper 4
    function chemistryMsc2P4A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=318";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P4B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=319";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P4C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=320";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P4D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=321";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P4E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=322";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Chemistry Paper 5
    function chemistryMsc2P5A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=323";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P5B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=324";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P5C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=325";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P5D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=326";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function chemistryMsc2P5E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=327";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Maths Paper 1
    function mathsMsc2P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=333";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=334";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=335";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=336";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=337";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Maths Paper 2
    function mathsMsc2P2A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=338";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P2B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=339";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P2C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=340";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P2D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=341";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P2E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=342";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Maths Paper 3
    function mathsMsc2P3A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=343";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P3B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=344";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P3C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=345";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P3D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=346";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P3E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=347";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Maths Paper 4
    function mathsMsc2P4A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=348";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P4B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=349";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P4C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=350";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P4D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=351";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P4E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=352";
        $data=  $this->db->query($data);
        return $data->result();
    }
//Msc 2 Year Maths Paper 5
    function mathsMsc2P5A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=353";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P5B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=354";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P5C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=355";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P5D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=356";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function mathsMsc2P5E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=357";
        $data=  $this->db->query($data);
        return $data->result();
    }

}