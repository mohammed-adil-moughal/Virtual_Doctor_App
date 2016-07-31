<?php
	class Model_login extends CI_Model {
		
		function __construct() {
			parent::__construct(); // call to model constructor
		}

		// LOGIN
		function validate() {
			$this->db->where('username', $this->input->post('username')); // checks using username
			$this->db->where('password', md5($this->input->post('password')));
			$query = $this->db->get('users');

			$this->db->where('email', $this->input->post('username')); // checks using email
			$this->db->where('password', md5($this->input->post('password')));
			$query2 = $this->db->get('users');

			//echo $query->num_rows();
			//exit;

			if ($query->num_rows() == 1 || $query2->num_rows() == 1) {
				return TRUE; // user validated
			} else {
				return FALSE;
			}
		}

		function check_password_match($request) {
			$this->db->where('username', $this->input->post('username'));
			$this->db->where('password',md5($request));
			$result = $this->db->get('users');

			$this->db->where('email', $this->input->post('username'));
			$this->db->where('password',md5($request));
			$result2 = $this->db->get('users');

			if ($result->num_rows() == 1 || $result2->num_rows() == 1) {
				return TRUE; // user validated
			} else {
				return FALSE;
			}
		}

		function check_account_active($request) {
			$this->db->where('email', $request);
			$this->db->where('active','1');
			$result = $this->db->get('users');

			if ($result->num_rows() == 1) {
				return TRUE; // user validated
			} else {
				//return FALSE;
			}
		}

		// SIGNUP

		function create_user() {
			$username = $this->input->post('username');
			
			$new_user_insert_data = array (
				'firstname'	=>	$this->input->post('first_name'),
				'lastname' 	=>	$this->input->post('last_name'),
				'email' 	=>	$this->input->post('email'),
				'username'	=>	$this->input->post('username'),
				'password' 	=>	md5($this->input->post('password'))
			);

			$insert = $this->db->insert('users', $new_user_insert_data);
			return $insert;
		}

		function check_if_email_exists($request) {

			$this->db->where('email', $request);
			$result = $this->db->get('users');

			if ($result->num_rows() > 0) {
				return FALSE; // username taken
			} else {
				return TRUE; // Allow registration
			}
		}

		function check_if_username_exists($request) {

			$this->db->where('username', $request);
			$result = $this->db->get('users');

			if ($result->num_rows() > 0) {
				return FALSE; // username taken
			} else {
				return TRUE; // Allow registration
			}
		}


		function getUserDetails() {
			$logged_user = $this->session->userdata('username');
			$this->db->where('id', $logged_user);
			$query = $this->db->get('users');

			if ($query->num_rows() > 0) { 	// one or more results found
				return $query->result(); 	// returns array of objects
			} else {
				return NULL;				// no result found
			} 
		}
	}
?>