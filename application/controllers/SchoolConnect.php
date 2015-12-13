<?php

class SchoolConnect extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('school_model');
    }

    public function load_view($view, $data) {
        $this->load->view('template/header_1');
        $this->load->view($view, $data);
        $this->load->view('template/footer');
    }

    public function index() {
        $data = array(
            'list_all_url' => site_url('SchoolConnect/schools'),
            'search_url' => site_url('SchoolConnect/search'),
            'register_url' => site_url('SchoolConnect/register_school'),
        );


        $this->load_view('school/temp_home', $data);
    }

    public function register_school() {
        if ($this->input->post('reg_number')) {
            $school = array(
                'reg_number' => $this->input->post('reg_number'),
                'school_name' => $this->input->post('school_name'),
                'city' => $this->input->post('city'),
                'district' => $this->input->post('district'),
                'state' => $this->input->post('state'),
                'contact_number' => $this->input->post('state')
            );
            $response_code = $this->school_model->insertSchool($school);
            
            $this->set_success_flash("School registered successfully. id=$response_code");
            redirect('SchoolConnect/register_school');
        }
        $data = array(
            'form_submit_url' => site_url('SchoolConnect/register_school'),
            'back_url' => site_url('SchoolConnect'),
        );


        $this->load_view('school/register', $data);
    }

    public function schools() {
        $data = array(
            'schools' => $this->school_model->listSchools(),
            'back_url' => site_url('SchoolConnect')
        );
        $this->load_view('school/all', $data);
    }
    
    public function search(){
        $data = array(
            'back_url'=>  site_url('SchoolConnect'),
            'form_submit_url'=> site_url('SchoolConnect/search')
        );
        if($this->input->post('search_term') || $this->input->post('city')){
            $city = $this->input->post('city');
            $search_term = $this->input->post('search_term');
            $data['search_results'] = $this->school_model->search($city,$search_term);
            
        }else{
            
        }
        $this->load_view("school/search", $data);
    }

}
