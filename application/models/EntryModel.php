<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class EntryModel extends CI_Model{
    
    function addEnquiry($data){
        $this->db->insert('student_record',$data);
    }
    
    function showStudent(){
        $data="select * from student_record";
        $data=  $this->db->query($data);
        return $data->result();
    }
    
    function nonForm(){
        $data="select * from student_record where status=0";
        $data=  $this->db->query($data);
        return $data->result();
    }
    
    function form(){
        $data="select * from student_record where status=1";
        $data=  $this->db->query($data);
        return $data->result();
    }
    
    function fillForm($id){
        $data="select * from student_record where id=?";
        $data= $this->db->query($data,$id);
        return $data->row();
    }
    function GetClasses(){
        $data="select * from classes";
        $data=  $this->db->query($data);
        return $data->result();
    }
    function updateForm($update, $id){
        $this->db->where('id',$id);
        $sql=$this->db->update('student_record',$update);
        return $sql=$this->db->insert_id();
    }
    function updateBill($id2,$data){
        $this->db->where('id',$id2);
        $this->db->update('student_data',$data);
    }
            
    function studentData($data){
        $this->db->insert('student_data',$data);
    }
    
    function search($student){
        $data="select * from student_record where form_id like ? or id like ? or name like ?";
        $data=  $this->db->query($data,array("$student","$student","%$student%"));
        return $data->result();
    }
    
    function studentEdit($id){
        $data="select * from student_record where id=?";
        $data=  $this->db->query($data,$id);
        return $data->row();
    }
    function studentData2($id){
        $data="select * from student_record a inner join student_data b on a.id=b.student_id where a.id=?";
        $data=  $this->db->query($data,$id);
        return $data->result();
    }
    function deletePaper($idDel){
        $this->db->where('id',$idDel);
        $this->db->delete('student_data');
    }
    
    function deleteStudent($id){
        $this->db->where('id',$id);
        $this->db->delete('student_record');
    }
}
