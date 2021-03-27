<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_user_model extends CI_Model
{

    /*Insert customer_user*/
    public function insert_customer_user($data)
    {
        $this->load->helper('common_helper');
        $_FILES['profile_avatar']['name'] = preg_replace('/\s+/', '_', $_FILES['profile_avatar']['name']);
        $image_extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);
        $path = './uploads/';
        $file_name = $_FILES['profile_avatar']['name'];
        $form_name = 'profile_avatar';
        $check_upload = upload_image($file_name,$form_name,$path);  
        $avatar_name = $file_name;

        $insert_data = array(
            'user_group' => $data['user_group'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'company_name' => $data['company_name'],
            'street1' => $data['street1'],
            'street2' => $data['street2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip_code' => $data['zip_code'],
            'country' => $data['country'],
            'language' => $data['language'],
            'password' => $data['password'],
            'user_group' => $data['user_group'],
            'which_admin' => $this->session->userdata('id'),
            'profile_avatar' => $avatar_name,
            'profile_avatar_remove' => $data['profile_avatar_remove']
        );
        $result = $this->db->insert('customer_user', $insert_data);
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }

    /*update customer_user*/
    public function update_customer_user($data){
        if(isset($_FILES['profile_avatar']['name']) && !empty($_FILES['profile_avatar']['name'])){
            $this->load->helper('common_helper');
            $_FILES['profile_avatar']['name'] = preg_replace('/\s+/', '_', $_FILES['profile_avatar']['name']);
            $image_extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);
            $path = './uploads/';
            $file_name = $_FILES['profile_avatar']['name'];
            $form_name = 'profile_avatar';
            $check_upload = upload_image($file_name,$form_name,$path);  
            $avatar_name = $file_name;
        }else{
            $get_avatar = $this->get_customer_user($data['customer_id']);
            $avatar_name = $get_avatar->profile_avatar ;
        }
        $update_data = array(
            'user_group' => $data['user_group'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'company_name' => $data['company_name'],
            'street1' => $data['street1'],
            'street2' => $data['street2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip_code' => $data['zip_code'],
            'country' => $data['country'],
            'language' => $data['language'],
            'password' => $data['password'],
            'profile_avatar' => $avatar_name,
            'profile_avatar_remove' => $data['profile_avatar_remove']
        );
        $this->db->where('id',$data['customer_id']);
        $result = $this->db->update('customer_user', $update_data);
        return $result;
    }

    /*View customer user*/
    public function get_customer_user($id){
        $this->db->select('*');
        $this->db->from('customer_user');
        $this->db->where('id',$id);
        $result = $this->db->get()->row();
        return $result;
    }

    /*Listing all customer_user*/
    public function list_customer_user()
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        if($this->session->userdata('role') != 'SuperAdmin'){
            $this->db->where('which_admin',$this->session->userdata('id'));
        }
        
        $result = $this->db->get()->result();
        return $result;
    }

    /*Delete customer_user*/
    public function delete_customer_user($id)
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        $this->db->where('id', $id);
        $result = $this->db->get()->row()->customer_user_id;
        $this->db->where('id', $id);
        $this->db->delete('customer_user');
        return $result;
    }

}
