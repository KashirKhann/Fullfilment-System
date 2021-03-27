<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

   public function validate_user($email)
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        $this->db->where('email', $email);
        $user = $this->db->get()->row();
        if(isset($user->email)){
            return true;
        }
        return false;
    }



    public function validate_ref($getRef)
    {
        $this->db->select('*');
        $this->db->from('customer_user');
        $this->db->where('recovery_ref', $getRef);
        $user = $this->db->get()->row();
        if(isset($user->email)){
            return true;
        }
        return false;
    }

    public function update_forget_ref($randRef,$email){
        $this->db->set('recovery_ref',$randRef);
        $this->db->where('email',$email);
        if($this->db->update('customer_user')){
            return true;
        }else{
            return false;
        }
    }

    public function update_passwordUser($randRef,$password){
        $this->db->set('password',$password);
        $this->db->where('recovery_ref',$randRef);
        if($this->db->update('customer_user')){
            return true;
        }else{
            return false;
        }
    }
}
