<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{

    public function get_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user');
    }

    public function get_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user');
    }

    public function add_pengguna($params)
    {
        return $this->db->insert('user', $params);
    }

    public function ubah_pengguna($id, $params)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $params);
    }
}
