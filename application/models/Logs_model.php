<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logs_model extends CI_Model
{
    // Logs Session 
    public function log_session(){
        $this->db->select('*');
        $this->db->from('log_session');
        $result = $this->db->get()->result();
        return $result;
    }

    // Logs User 
    public function log_user()
    {
        $this->db->select('*');
        $this->db->from('log_user');
        $result = $this->db->get()->result();
        return $result;
    }

}