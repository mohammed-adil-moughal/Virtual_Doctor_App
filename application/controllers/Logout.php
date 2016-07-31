<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Logout extends CI_Controller {
		function __construct() {
			parent::__construct(); // call to parent constructor
		}

		public function index() {
			// Check if the user is logged in with a session
			$session_user = $this->session->userdata('username');
			$session_log = $this->session->userdata('is_logged_in');
			if (isset($session_user) && $session_log == 1) {
				$this->session->sess_destroy();
				redirect('login');
			} else {
				redirect('login');
			}
		}
	}
?>