<?php
class M_login extends CI_Model
{

    public function get($username)
    {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }
}