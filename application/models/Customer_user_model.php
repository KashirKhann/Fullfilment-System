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
        $check_upload = upload_image($file_name, $form_name, $path);
        $avatar_name = $file_name;

        if ($data['user_parent'] == '') {
            $user_parent = $this->session->userdata('id');
        } else {
            $user_parent = $data['user_parent'];
        }

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
            'which_admin' => $user_parent,
            'profile_avatar' => $avatar_name,
            'profile_avatar_remove' => $data['profile_avatar_remove'],
            'created_by' => $this->session->userdata('id'),
        );
        $result = $this->db->insert('customer_user', $insert_data);
        $last_id = $this->db->insert_id();

        $this->db->insert('log_user', array(
            'email' => $data['email'],
            'which_admin' => $user_parent,
            'type' => 'add',
            'created_by' => $this->session->userdata('id'),
            'customer_user_id' => $last_id,
        ));
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }

    /*update customer_user*/
    public function update_customer_user($data)
    {
        if (isset($_FILES['profile_avatar']['name']) && !empty($_FILES['profile_avatar']['name'])) {
            $this->load->helper('common_helper');
            $_FILES['profile_avatar']['name'] = preg_replace('/\s+/', '_', $_FILES['profile_avatar']['name']);
            $image_extension = pathinfo($_FILES['profile_avatar']['name'], PATHINFO_EXTENSION);
            $path = './uploads/';
            $file_name = $_FILES['profile_avatar']['name'];
            $form_name = 'profile_avatar';
            $check_upload = upload_image($file_name, $form_name, $path);
            $avatar_name = $file_name;
        } else {
            $get_avatar = $this->get_customer_user($data['id']);
            $avatar_name = $get_avatar->profile_avatar;
        }
        $update_data = array(
            'user_group' => $data['user_group'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'company_name' => $data['company_name'],
            'email' => $data['email'],
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
        $this->db->where('id', $data['id']);
        $result = $this->db->update('customer_user', $update_data);
        $this->db->insert('log_user', array(
            'email' => $data['email'],
            'which_admin' => '',
            'type' => 'update',
            'created_by' => $this->session->userdata('id'),
            'customer_user_id' => $data['id'],
        ));
        return $result;
    }

    public function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        if ($this->session->userdata('role') != 'SuperAdmin') {
          $this->db->where('created_by', $this->session->userdata('id'));
        }
        $result = $this->db->get()->result();
        return $result;
    }

    /*View customer user*/
    public function get_customer_user($id)
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        $this->db->where('id', $id);
        $result = $this->db->get()->row();
        return $result;
    }

    /*Listing all customer_user*/
    public function list_customer_user()
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        if ($this->session->userdata('role') != 'SuperAdmin') {
            $this->db->where('which_admin', $this->session->userdata('id'));
        }
        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            $i = 0;
            foreach ($q->result() as $row) {
                $data[$i] = $row;
                $data[$i]->created_name = $this->getCreatedName($row->which_admin);
                $data[$i]->parent_name = $this->getParentName($row->which_admin);
                $i++;
            }
        }
        return $data;
    }

    function getCreatedName($id)
    {
        $this->db->select('firstname');
        $this->db->from('customer_user');
        $this->db->where('id', $id);
        $q = $this->db->get();
        if (!empty($q->result())) {
            return $q->result()[0]->firstname;
        } else {
            return '';
        }
    } 


    function getParentName($id)
    {
        $this->db->select('which_admin');
        $this->db->from('customer_user');
        $this->db->where('id', $id);
        $q = $this->db->get();
        if (!empty($q->result())) {
            $this->db->select('firstname');
            $this->db->from('customer_user');
            $this->db->where('id',  $q->result()[0]->which_admin);
            $k = $this->db->get();
            return $k->result()[0]->firstname;
        } else {
            return '';
        }
    }

    /*Delete customer_user*/
    public function delete_customer_user($id)
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        $this->db->where('id', $id);
        $result = $this->db->get()->row()->customer_user_id;
        $rest_data = $this->db->get()->row();
        $this->db->where('id', $id);
        $this->db->delete('customer_user');
        $this->db->insert('log_user', array(
            'email' => $rest_data['email'],
            'which_admin' => '',
            'type' => 'delete',
            'created_by' => $this->session->userdata('id'),
            'customer_user_id' => $id,
        ));
        return $result;
    }
}
