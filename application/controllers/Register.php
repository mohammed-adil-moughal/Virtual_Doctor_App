<?php
	class Register extends CI_Controller {
		function index() {
			//$this->load->view('includes/header');
			$this->load->view('register');
			//$this->load->view('includes/footer');
		}

		function process() { 
			$this->load->library('form_validation');

			// validation rules
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_check_email_exists');
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[15]|callback_check_username_exists');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');

			if ($this->form_validation->run() == false) {
				$this->load->view('includes/header');
				$this->load->view('view_register'); // redirect to index if validation fails
				$this->load->view('includes/footer');
			} else {
				$this->load->model('model_login');
				if ($query = $this->model_login->create_user()) {
					$data['account_created'] = '<h4 class="text-center">Your account has been created!</h4>';
					$this->load->view('includes/header');
					$this->load->view('view_login', $data); // display message if the user was just created
					$this->load->view('includes/footer');
				} else {
					$this->load->view('includes/header');
					$this->load->view('view_register'); // redirect to index if validation fails
					$this->load->view('includes/footer');
				}
			}
		}

		function check_email_exists($req) {
			$this->load->model('model_login');
			$email_ok = $this->model_login->check_if_email_exists($req);
			if ($email_ok) {
				return true;
			} else {
				return false;
			}
		}

		function check_username_exists($req) {
			$this->load->model('model_login');
			$username_ok = $this->model_login->check_if_username_exists($req);
			if ($username_ok) {
				return true;
			} else {
				return false;
			}
		}
	}
?>