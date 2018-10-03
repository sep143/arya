<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class CommonModel extends CI_Model{
    
    function check($username,$password){
        $data="select * from admin where user_name=? and password=?";
        $data=  $this->db->query($data,array($username,$password));
        if($data->num_rows()==1){
            return $data->row();
        }else{
            return FALSE;
        }
    }
    //setting Controller
    function classes($data){
        $this->db->insert('classes',$data);
    }
    
    function getClass(){
        $data="select * from classes";
        $data=  $this->db->query($data);
        return $data->result();
    }
    
    function subject($data){
        $this->db->insert('subjects',$data);
    }
    
    function Addpaper($data){
        $this->db->insert('papers',$data);
    }
    
    function Addbatch($data){
        $this->db->insert('batch',$data);
    }
            
    function getPaper(){
        $data="select * from subjects a inner join classes b on a.class_id=b.id";
        $data=  $this->db->query($data);
        return $data->result();
    }
    
    function classid($value){
        $data="select * from subjects where class_id like ?";
        $data=  $this->db->query($data,$value);
        return $data->result();
    }
    
    function subjectid($value2){
        $data="select * from papers where subject_id like ?";
        $data=  $this->db->query($data,$value2);
        return $data->result();
    }
    
    function paperid($value3){
        $data="select * from batch where paper_id like ? ";
        $data=  $this->db->query($data,array("$value3"));
        return $data->result();
    }
    
    function totalForm(){
        $data="select * from student_record";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function nonForm(){
        $data="select * from student_record where status=0 ";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function form(){
        $data="select * from student_record where status=1 ";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function search($student){
        $data="select * from student_record a left join student_data b on a.id=b.student_id where a.form_id like ? or a.id like ? or a.name like ?";
        $data=  $this->db->query($data,array("$student","$student","%$student%"));
        return $data->result();
    }
}
