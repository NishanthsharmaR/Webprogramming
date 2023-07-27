<?php

class StudentController extends CI_Controller {
     
    public function index()
    {
        $this->load->model('StudentModel');
        $student = $this->StudentModel->student_data();
        // $student_class = $this->StudentModel->student_class();
        // echo $student;
        $this->load->view('crudoperations');
        // echo $student_class;
        
    }
    public function create()
    {
        // $this->load->model('StudentModel');
        // $student = $this->StudentModel->student_data();
        // $student_class = $this->StudentModel->student_class();
        // echo $student;
        $this->load->view('quicklinks');
        $this->load->view('create');
        
        // echo $student_class;
        
    }


}

?>