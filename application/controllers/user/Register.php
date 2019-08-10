<?php

class Register extends CI_Controller {

    public function index()
    {
        $this->load->view('user/register_form');
    }

    public function save()
    {
        $fullName   = $this->input->post('fullName');
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        $re_password= $this->input->post('re_password');

        $this->form_validation->set_rules('$fullName','Adınız Soyadınız','required|trim');
        $this->form_validation->set_rules('$email','E-posta ','required|trim|is_unique[users.email]|valid_email');
        $this->form_validation->set_rules('$password','Şifre','required|trim|min_length[6]');
        $this->form_validation->set_rules('$re_password','Şifre tekrarı','required|trim|min_length[6]|matches[password]');

        $this->form_validation->set_message('required', 'Lütfen %s alanını doldurunuz!');


    }
}
