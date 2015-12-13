<?php

Class School_model extends CI_Model{
    public $table_name = "schools";
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('rb');
    }
    public function insertSchool($school){
        $s = R::dispense($this->table_name);
        
        $s->reg_number = $school['reg_number'];
        $s->school_name = $school['school_name'];
        $s->city = $school['city'];
        $s->district = $school['district'];
        $s->state = $school['state'];
        $s->contact_number = $school['contact_number'];
        
        $id = R::store($s);
        return $id;
    }
    public function listSchools(){
        $query = $this->db->get('schools');
        return $query->result();
    }
    
    public function search($city,$search_term){
        $query = null; 
        if($city &&!$search_term){
            //city
            $this->db->like('city',$city,'both');
            $query = $this->db->get_where($this->table_name);
            
        }else if(!$city && $search_term){
            //search term
            $this->db->like('school_name',$search_term,'both');
            $query = $this->db->get_where($this->table_name);
            
        }else if($city && $search_term){
            //both
             $this->db->like('city',$city,'both');
             $this->db->or_like('school_name',$search_term,'both');
             $query = $this->db->get_where($this->table_name);
        }
        return $query->result();
    }
    
}