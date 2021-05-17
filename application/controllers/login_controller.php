<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->helper('string');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->helper('language');
		$this->lang->load('global', $this->session->userdata('site_lang'));
	}

	/* Login Page */
	public function login()
	{
		$this->load->view('backend/login');
	}

	/*Validate Login*/
	public function validate_login()
	{
		$this->db->select('*');
		$this->db->from('customer_user');
		$this->db->where('email', $_POST['email']);
		$this->db->where('password', $_POST['password']);
		$user = $this->db->get()->row();

		if ($user->language == 'de') {
			$user->language = 'german';
		} else {
			$user->language = 'english';
		}

		if (isset($user) && !empty($user)) {
			$session_data  = array(
				'firstname' => $user->firstname,
				'email' => $user->email,
				'role' => $user->user_group,
				'id' => $user->id,
				'site_lang' => $user->language
			);
			// Inserting the data into the logs 
			$this->db->insert('log_session', array(
				'firstname' => $user->firstname,
				'email' => $user->email,
				'type' => 'login',
				'role' => $user->user_group,
				'user_id' => $user->id,
			));
			$this->session->set_userdata($session_data);
			$this->session->set_flashdata('success', 'Welcome ' . $user->firstname . ' !');
			redirect('administrator/dashboard');
		} else {
			$this->session->set_flashdata('error', 'Wrong Credentials !');
			redirect('administrator');
		}
	}

	public function update_password()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() === TRUE) {
			$passUpdate = $this->Login_model->update_passwordUser($this->input->post('ref'), $this->input->post('password'));
			if ($passUpdate) {
				$this->session->set_flashdata('success', 'Password Has Been Changed');
				redirect('Login_controller/login/');
			} else {
				$this->session->set_flashdata('success', 'Password Changed Failed');
				redirect('Login_controller/login/');
			}
		} else {
			$this->session->set_flashdata('message', 'Confirm passwod not matched');
			redirect('Login_controller/new_password/' . $_POST['ref']);
		}
	}

	public function new_password($getRef)
	{
		$checkRefExist = $this->Login_model->validate_ref($getRef);
		if ($checkRefExist) {
			$data['ref'] = $getRef;
			$this->load->view('backend/new_password', $data);
		} else {
			$this->load->view('backend/login');
		}
	}

	public function reset_password()
	{
		$randRef = random_string('alnum', 16) . time();
		$email = $this->input->post('email');
		$checkUserExist = $this->Login_model->validate_user($email);
		if ($checkUserExist) {
			$updateRef = $this->Login_model->update_forget_ref($randRef, $email);
			if ($updateRef) {
				$message = '<div>
							<strong>Hi,</strong>
							<div>Please click the link below to reset password</div>
							<div>' . base_url('Login_controller/new_password/' . $randRef) . '</div>
							</div>';
				$this->send_mail($email, $message);
				echo json_encode("Password Recovery Email Has Been Send, Check Email!");
			} else {
				echo json_encode("Something Went Wrong");
			}
		} else {
			echo json_encode("Not Email Exist, Try Again");
		}
		exit();
	}

	public function send_mail($to_email, $message)
	{
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465, //465
			'smtp_user' => 'hackbaby1996@gmail.com',
			'smtp_pass' => 'feb231996',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->email->initialize($config);
		// echo "<pre>";
		// print_r($to_email);
		// exit();
		$this->email->set_newline("\r\n");
		$this->email->from('Fullfillment-System');
		$this->email->to($to_email);
		$this->email->subject('Reset Your Password');
		$this->email->message($message);
		//echo $this->email->print_debugger();

		if ($this->email->send()) {
			// echo 'Your email was sent';
			$this->session->set_flashdata("email_sent", "Congragulation Email Send Successfully.");
			// redirect('email');
		} else {
			// var_dump($this->email->print_debugger());
			$this->session->set_flashdata("email_sent", "You have encountered an error");
			// redirect('email');
		}
	}
}
