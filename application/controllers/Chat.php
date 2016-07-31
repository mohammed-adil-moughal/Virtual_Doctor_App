<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	function __construct() {
		parent::__construct(); // call to parent constructor

		$session_user = $this->session->userdata('username');
		$session_log = $this->session->userdata('is_logged_in');
		if (!isset($session_user) && $session_log != 1) {
			redirect('login'); // check if session exists
		}

		// load global data
		$this->load->model('model_users');
	}

	function send() {
		$this->load->model('model_chat_api'); //
		if ($query = $this->model_chat_api->create_new_message()) {
			echo "Sucess";
		} else {
			echo "Failed";
		}
	}

	function retrieve() {
		
	}


	/*public function send() {
		echo "Received: ".$this->input->post('msg');
	}*/
}
