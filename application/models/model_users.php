<?php
	class Model_users extends CI_Model {
		
		function __construct() {
			parent::__construct(); // call to model constructor
		}

		function getLoggedUserInfo() {
			$username = $this->session->userdata('username');
			$sql = 'SELECT 		users.id, users.firstname, users.lastname, users.email, users.level, user_levels.description 
					FROM 		users 
					LEFT JOIN 	user_levels 
					ON 			users.level = user_levels.id 
					WHERE 		users.username = ?
					OR 			users.email = ?';

			$query = $this->db->query($sql, array($username, $username));

			if ($query->num_rows() > 0) {
				return $query->row(); // user row() for only one expected result
			} else {
				return NULL;
			}
		}

		function getUserInfo($id) {
			$user = $id;
			$sql = 'SELECT 		users.*, user_levels.description 
					FROM 		users 
					LEFT JOIN 	user_levels 
					ON 			users.level = user_levels.id 
					WHERE 		users.id = ?';

			$query = $this->db->query($sql, array($user));

			if ($query->num_rows() > 0) {
				return $query->row(); // user row() for only one expected result
			} else {
				return NULL;
			}
		}

		function getUserCount() {
			$this->db->select("1");
			$query = $this->db->get('users');
			return $query->num_rows();
		}

		
		function getAdminList() {
			$sql = 'SELECT 		id, username, firstname, lastname, email, address, phone, age, gender, reg_date, job_title, job_place
					FROM		users
					WHERE		level = "1"
					ORDER BY 	reg_date DESC';

			$query = $this->db->query($sql, array(2));

			if ($query->num_rows() > 0) {
				return $query->result(); // use result() for more than one result
			} else {
				return NULL;
			}
		}

		function getDoctorList() {
			$sql = 'SELECT 		id, username, firstname, lastname, email, address, phone, age, gender, reg_date, job_title, job_place
					FROM		users
					WHERE		level = "2"
					ORDER BY 	reg_date DESC';

			$query = $this->db->query($sql, array(2));

			if ($query->num_rows() > 0) {
				return $query->result(); // use result() for more than one result
			} else {
				return NULL;
			}
		}

		public function getDoctorCount() {
			$user_level = 2;
			$this->db->select("1");
			$query = $this->db->get_where('users', array('level =' => $user_level));
			return $query->num_rows();
		}

		function getPatientList() {
			$sql = 'SELECT 		id, username, firstname, lastname, email, address, phone, age, gender, reg_date, job_title, job_place
					FROM		users
					WHERE		level = "3"
					ORDER BY 	reg_date DESC';

			$query = $this->db->query($sql, array(2));

			if ($query->num_rows() > 0) {
				return $query->result(); // use result() for more than one result
			} else {
				return NULL;
			}
		}

		public function getPatientCount() {
			$user_level = 3;
			$this->db->select("1");
			$query = $this->db->get_where('users', array('level =' => $user_level));
			return $query->num_rows();
		}

		function getPatientDetailbyID($patient) {
			$sql = 'SELECT 		*
					FROM		users
					WHERE		id= ?';

			$query = $this->db->query($sql, array($patient));

			if ($query->num_rows() > 0) {
				return $query->row(); // user row() for only one expected result
			} else {
				return NULL;
			}
		}

		function edit_patient() {
			$names = explode(" ",$this->input->post('name'));

			//echo $this->input->post('contact_relation'); exit;

			$data = array(
						'address' => $this->input->post('address'),
						'age' => $this->input->post('age'),
						'contact_name' => $this->input->post('contact_name'),
						'contact_phone' => $this->input->post('contact_phone'),
						'contact_relation' => $this->input->post('contact_relation'),
						'email' => $this->input->post('email'),
						'firstname' => $names[0],
						'lastname' => $names[1],
						'phone' => $this->input->post('phone'),
						'gender' => $this->input->post('sex')
					);

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('users', $data);
		}

		function new_patient() {
			$names = explode(" ",$this->input->post('name'));
			if (!isset($names[1])) {
				$names[1] = ''; // if user didnt write a 2nd name
			}

			$data = array(
						'username' => $this->input->post('email'),
						'address' => $this->input->post('address'),
						'age' => $this->input->post('age'),
						'contact_name' => $this->input->post('contact_name'),
						'contact_phone' => $this->input->post('contact_phone'),
						'contact_relation' => $this->input->post('contact_relation'),
						'email' => $this->input->post('email'),
						'firstname' => $names[0],
						'lastname' => $names[1],
						'phone' => $this->input->post('phone'),
						'gender' => $this->input->post('sex'),
						'level' => '3'
					);

			$sql = $this->db->insert('users', $data);
			if ($sql) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function new_doctor() {
			$names = explode(" ",$this->input->post('name'));
			if (!isset($names[1])) {
				$names[1] = ''; // if user didnt write a 2nd name
			}

			$data = array(
						'username' => $this->input->post('email'),
						'address' => $this->input->post('address'),
						'age' => $this->input->post('age'),
						//'contact_name' => $this->input->post('contact_name'),
						//'contact_phone' => $this->input->post('contact_phone'),
						//'contact_relation' => $this->input->post('contact_relation'),
						'email' => $this->input->post('email'),
						'firstname' => $names[0],
						'lastname' => $names[1],
						'phone' => $this->input->post('phone'),
						'gender' => $this->input->post('gender'),
						'job_title' => $this->input->post('specialization'),
						'level' => '2'
					);

			$sql = $this->db->insert('users', $data);
			if ($sql) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function del_patient($patient) {
			$data = array('id' => $patient);

			$sql1 = $this->db->get_where('users', $data); // get user details
			$sql2 = $this->db->insert('users_deleted', $sql1->row()); // store them in recycle bin
			$sql3 = $this->db->delete('users', $data); // delete from user table

			if ($sql1 && $sql2 && $sql3) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function check_if_email_exists($request) {
			// Check email for logged in user
			$this->db->where('email', $request);
			$this->db->where('username !=', $_SESSION['username']); // check session against username
			$this->db->where('email !=', $_SESSION['username']); // check session against email
			$this->db->where('id !=', $this->input->post('id')); // check id against id posted
			$result = $this->db->get('users');

			if ($result->num_rows() > 0) {
				return FALSE; // username taken
			} else {
				return TRUE; // Allow registration
			}
		}
	}
?>