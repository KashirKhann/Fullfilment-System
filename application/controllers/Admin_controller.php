<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_user_model');
		$session = $this->session->userdata('email');
		if (empty($session)) {
			$this->session->set_flashdata('error', 'You are not logged in !');
			redirect(base_url(''));
		}
	}

	/*Dashboard*/
	public function dashboard()
	{
		$this->load->view('backend/common/header');
		$this->load->view('backend/dashboard');
		$this->load->view('backend/common/footer');
	}

	/*******************Cutomer Sectiion****************/

	/********************users listing Starts***************/

	public function users()
	{
		$data['user'] = $this->Customer_user_model->list_customer_user();
		$this->load->view('backend/common/header');
		$this->load->view('backend/users/users', $data);
		$this->load->view('backend/common/footer');
	}

	public function insert_customer_user()
	{
		$this->Customer_user_model->insert_customer_user($_POST);
		$this->session->set_flashdata('success', 'User addedd successfully!');
		redirect('administrator/users');
	}

	public function view_customer_user($id)
	{
		$data['customer_user'] = $this->Customer_user_model->get_customer_user($id);
		$this->load->view('backend/common/header');
		$this->load->view('backend/users/view_user', $data);
		$this->load->view('backend/common/footer');
	}

	public function add_user()
	{
		$this->load->view('backend/common/header');
		$this->load->view('backend/users/add_user');
		$this->load->view('backend/common/footer');
	}

	public function edit_customer_user($id)
	{
		$data['customer_user'] = $this->Customer_user_model->get_customer_user($id);
		$this->load->view('backend/common/header');
		$this->load->view('backend/users/edit_user', $data);
		$this->load->view('backend/common/footer');
	}

	/*Update customer user*/
	public function update_customer_user()
	{
		$data['customer_user'] = $this->Customer_user_model->update_customer_user($_POST);
		redirect('administrator/edit_customer_user/' . $_POST['customer_id']);
	}

	/*Delete customer user*/
	public function delete_customer_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('customer_user');
		$this->session->set_flashdata('error', 'User deleted successfully!');
		redirect('administrator/users');
	}
	/********************users listing Ends***************/

	/********************users listing Starts***************/

	public function settings()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->db->query('select * from customer_user where id=' . $id)->row();
		$this->load->view('backend/common/header');
		$this->load->view('backend/settings/settings', $data);
		$this->load->view('backend/common/footer');
	}

	public function change_password()
	{
		$this->db->select('*');
		$this->db->from('customer_user');
		$this->db->where('id', $this->session->userdata('id'));
		$this->db->where('password', $_POST['current_password']);
		$check_current_password = $this->db->get()->row();
		if (empty($check_current_password)) {
			$this->session->set_flashdata('error', 'Current password does not match!');
			redirect('administrator/settings');
		} else {
			if ($_POST['new_password'] == $_POST['verify_password']) {
				$update_password = array(
					'password' => $_POST['new_password']
				);
				$this->db->where('id', $this->session->userdata('id'));
				$this->db->update('customer_user', $update_password);
				$this->session->set_flashdata('success', 'Password changed successfully !');
				redirect('administrator/settings');
			} else {
				$this->session->set_flashdata('error', 'New password and verify password does not match !');
				redirect('administrator/settings');
			}
		}
	}

	public function update_user()
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
			$this->db->select('*');
			$this->db->from('customer_user');
			$this->db->where('id', $this->session->userdata('id'));
			$result = $this->db->get()->row();
			$avatar_name = $result->profile_avatar;
		}
		$update_data = array(
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'number' => $_POST['number'],
			'profile_avatar' => $avatar_name,
		);
		$this->db->where('id', $this->session->userdata('id'));
		$result = $this->db->update('customer_user', $update_data);
		redirect('administrator/settings');
	}
	/********************users listing End***************/

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
		$this->email->from('Kashir');
		$this->email->to($to_email);
		$this->email->subject('Credit Requested!');
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

	/*logout*/
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('error', 'You are logged out !');
		redirect('administrator');
	}
}
