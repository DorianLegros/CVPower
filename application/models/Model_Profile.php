<?php

class Model_Profile extends CI_Model
{
    public function construct()
    {
        parent::construct();
    }

    public function getAll()
    {
        return $this->db->select('*')->from('cvp_c_profile')->get()->result_array();
    }

    public function get($idP)

    {
        return $this->db->select('*')->from('cvp_c_profile')->where('id', $idP)->get();
    }
}