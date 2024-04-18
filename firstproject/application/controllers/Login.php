<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->helper('form');
        $this->load->model('UserModel');

    }


    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('user/login');
        $this->load->view('template/footer');

    }
    public function login_info()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        if ($this->form_validation->run() == FALSE) {
            // Fails
            $this->index();
        } else {

            $data = [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            ];
            $user = new UserModel;
            $result = $user->loginUser($data);
            if ($result != FALSE) {
                echo $result->first_name;
            } else {
                $this->session->set_flashdata('email', 'This email of password is not valid');
                redirect(base_url('login_info'));

            }
        }


    }
}