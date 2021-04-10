<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logs_model extends CI_Model
{
    // Logs Session 
    public function log_session($child = NULL){
        $this->db->select('ls.*,cu.firstname,cu.lastname');
        $this->db->from('log_session as ls');
        $this->db->join('customer_user as cu','ls.user_id = cu.id ','LEFT');
        if($child != '' && !empty($child)){
         $implodeChild = explode(',',$child);
         $this->db->where_in('ls.user_id',$child);
        }
        $this->db->order_by('ls.created_on','DESC');
        $result = $this->db->get()->result();
        return $result;
    }

    // Logs User 
    public function log_user($child = NULL)
    {
        $this->db->select('lu.*,cu.firstname,cu.lastname');
        $this->db->from('log_user as lu');
        $this->db->join('customer_user as cu','lu.created_by = cu.id','LEFT');
        if($child != '' && !empty($child)){
         $implodeChild = explode(',',$child);
         $this->db->where_in('lu.customer_user_id',$child);
        }
        $this->db->order_by('lu.created_on','DESC');
        $result = $this->db->get()->result();
        return $result;
    }

    public function get_childrens(){
        $this->db->select('GROUP_CONCAT(id) as childrens');
        $this->db->from('customer_user');
        $this->db->where('which_admin',$this->session->userdata('id'));
        $this->db->or_where('id',$this->session->userdata('id'));
        $result = $this->db->get()->result();
        return $result[0]->childrens;
    }

}