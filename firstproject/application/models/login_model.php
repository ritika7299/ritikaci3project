<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Controller
{


    public function isvalidate($username, $password)
    {
        $q = $this->db->where(['username' => $username, 'password' => $password])
            ->get('users');

        if ($q->num_rows()) {
            return True;
        } else {
            return false;
        }

    }
}