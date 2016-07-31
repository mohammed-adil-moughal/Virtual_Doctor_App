<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesapal extends CI_Controller {

	function __construct() {
		parent::__construct(); // call to parent constructor

		$this->load->model('Model_payment_api'); //Load site_model

		$session_user = $this->session->userdata('username');
		$session_log = $this->session->userdata('is_logged_in');
		if (!isset($session_user) && $session_log != 1) {
			redirect('login'); // check if session exists
		}
	}

	public function index()
	{
		// Load Data
		$headerdata['loggedUserInfo'] = $this->model_users->getLoggedUserInfo(); // get logged in user info
		$headerdata['doctorList'] = $this->model_users->getDoctorList(); // get doctors
		$headerdata['userCount'] = $this->model_users->getUserCount(); // get doctors
		$headerdata['doctorCount'] = $this->model_users->getDoctorCount(); // get doctors
		$headerdata['adminList'] = $this->model_users->getAdminList(); // get admins
		$headerdata['patientCount'] = $this->model_users->getPatientCount(); // get patients
		$headerdata['messages'] = $this->model_chat_api->retrieve_messages(); // get messages
		$headerdata['messageCount'] = $this->model_chat_api->getMessageCount(); // get messages

		$this->load->view('includes/header', $headerdata);
		$this->load->view('pesapal-iframe.php');
		$this->load->view('includes/footer');
	}

	public function confirm() {
		// load model data
		$this->load->model('model_payment_api');
		$headerdata['DB_UPDATE_IS_SUCCESSFUL'] = $this->model_payment_api->create_new_payment(); // make payment update in DB		
		$this->load->view('pesapal-ipn-listener.php', $headerdata);
	}
}
