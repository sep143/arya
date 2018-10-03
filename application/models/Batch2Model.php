<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Batch2Model extends CI_Model{
    //Msc 2 Year Maths Paper 1
    function mathsMsc2P1A(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=333";
        $data=  $this->db->query($data);
    }
    function mathsMsc2P1B(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=334";
        $data=  $this->db->query($data);
    }
    function mathsMsc2P1C(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=335";
        $data=  $this->db->query($data);
    }
    function mathsMsc2P1D(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=336";
        $data=  $this->db->query($data);
    }
    function mathsMsc2P1E(){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where batch=337";
        $data=  $this->db->query($data);
    }
}