<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
        $this->load->helper('language');
        $this->lang->load('global',$this->session->userdata('site_lang'));
        $session = $this->session->userdata('email');
		if (empty($session)) {
			$this->session->set_flashdata('error', 'You are not logged in !');
			redirect(base_url(''));
		}
		$this->load->library('form_validation');
    }

	public function switchLang($language = "") {
	    $this->session->set_userdata('site_lang', $language);
	    redirect('administrator/dashboard','refresh');
	  }
}
