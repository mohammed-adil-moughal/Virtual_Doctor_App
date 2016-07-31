<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		//$thisUser;
		
	}

	function view($userID) {
		// Load Data
		$headerdata['loggedUserInfo'] = $this->model_users->getLoggedUserInfo(); // get logged in user info
		$headerdata['user'] = $this->model_users->getUserInfo($userID); // get details
		$headerdata['messages'] = $this->model_chat_api->retrieve_messages(); // get messages
		$headerdata['messageCount'] = $this->model_chat_api->getMessageCount(); // get messages

		$this->load->view('includes/header', $headerdata);
		$this->load->view('profile');
		$this->load->view('includes/footer');
	}

	function review($userID) {
		// Load Data
		$headerdata['loggedUserInfo'] = $this->model_users->getLoggedUserInfo(); // get logged in user info
		$headerdata['user'] = $this->model_users->getUserInfo($userID); // get details
		$headerdata['messages'] = $this->model_chat_api->retrieve_messages(); // get messages
		$headerdata['messageCount'] = $this->model_chat_api->getMessageCount(); // get messages
		//$headerdata['paymentID'] = $this->model_payment_api->getLastPaymentID(); // get messages

		$this->load->view('includes/header', $headerdata);
		$this->load->view('invoice');
		$this->load->view('includes/footer');
	}

	function pay($userID) {
		// Load Data
		$headerdata['loggedUserInfo'] = $this->model_users->getLoggedUserInfo(); // get logged in user info
		$headerdata['user'] = $this->model_users->getUserInfo($userID); // get details
		$headerdata['messages'] = $this->model_chat_api->retrieve_messages(); // get messages
		$headerdata['messageCount'] = $this->model_chat_api->getMessageCount(); // get messages

		$this->load->view('includes/header', $headerdata);
		$this->load->view('pesapal-iframe');
		$this->load->view('includes/footer');
	}
}
