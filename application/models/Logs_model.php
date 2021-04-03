<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logs_model extends CI_Model
{
    // Logs Session 
    public function log_session(){
        $this->db->select('ls.*,cu.firstname');
        $this->db->from('log_session as ls');
        $this->db->join('customer_user as cu','ls.user_id = cu.id ','LEFT');
        $this->db->order_by('ls.id','DESC');
        $result = $this->db->get()->result();
        return $result;
    }

    // Logs User 
    public function log_user()
    {
        $this->db->select('lu.*,cu.firstname');
        $this->db->from('log_user as lu');
        $this->db->join('customer_user as cu','lu.created_by = cu.id','LEFT');
        $this->db->order_by('lu.id','DESC');
        $result = $this->db->get()->result();
        return $result;
    }

}