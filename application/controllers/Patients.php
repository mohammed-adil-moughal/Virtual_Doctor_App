The<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {

	function __construct() {
		parent::__construct(); // call to parent constructor

		$session_user = $this->session->userdata('username');
		$session_log = $this->session->userdata('is_logged_in');
		if (!isset($session_user) && $session_log != 1) {
			redirect('login'); // check if session exists
		}

		// load global data
		$this->load->model('model_users');
		$this->load->model('model_chat_api');
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
		$headerdata['patientList']= $this->model_users->getPatientList();
		$headerdata['messages'] = $this->model_chat_api->retrieve_messages(); // get messages
		$headerdata['messageCount'] = $this->model_chat_api->getMessageCount(); // get messages

		$this->load->view('includes/header', $headerdata);
		$this->load->view('main-patient');
		$this->load->view('includes/footer');
	}
}
