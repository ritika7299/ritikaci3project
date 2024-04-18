<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');

    }
    public function loginUser()
    {
        $this->db->select('*');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $this->db->from('users');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }

    }
    public function registerUser($data)
    {
        return $this->db->insert('users', $data);
    }
}