<?php
class User extends CI_Controller{
    public function index(){
        $this->load->view("User/header");
        $this->load->view("User/home");
        $this->load->view("User/footer");
    }
    public function login(){
        $this->load->view("User/header");
        $this->load->view("User/login");
        $this->load->view("User/footer");
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('createpwd','createpwd','required');
        $this->form_validation->set_rules('confirmpwd','confirmpwd','required|matches[createpwd]');
        $this->form_validation->set_rules('mobile','mobile','required');
            //|valid_email|callback_email_check...
            if($this->form_validation->run()){
                $data=[
                    'name'=> $_POST['name'],
                    'email'=> $_POST['email'],
                    'createpwd'=> $_POST['createpwd'],
                    'mobile'=> $_POST['mobile']

                ];
                $this->datawork->insert('user_reg',$data);
                $this->session->set_flashdata("success","<div class='alert bg-info text-white mt-3'>User registration done successfully!!</div>");
                redirect('user/index');

            }
        }
     public function contact(){
        $this->load->view("User/header");
        $this->load->view("User/contact");
        $this->load->view("User/footer");
    }
    
}
?>