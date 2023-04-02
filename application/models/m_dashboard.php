<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function total_buku()
    {
        return $this->db->get('buku')->num_rows();
    }

    public function total_penyunting()
    {
        return $this->db->get('penyunting')->num_rows();
    }

    public function total_penerbit()
    {
        return $this->db->get('penerbit')->num_rows();
    }

    public function total_feedback()
    {
        return $this->db->get('feedback')->num_rows();
    }
}
?>