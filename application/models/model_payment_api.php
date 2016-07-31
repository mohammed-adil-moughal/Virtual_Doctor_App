<?php
	class Model_payment_api extends CI_Model {
		
		function __construct() {
			parent::__construct(); // call to model constructor
		}

		public function getMessageCount() {
			$this->db->select("1");
			$query = $this->db->get('messages');
			return $query->num_rows();
		}

		function create_new_payment() {
			// Initialize Variables
			$username = $this->session->userdata('username');
			$transactionID = $this->input->get('pesapal_transaction_tracking_id');
			$reference = $this->input->get('pesapal_merchant_reference');

			$sql = 'SELECT 		id
					FROM 		users 
					WHERE 		username = ?';
			$query = $this->db->query($sql, array($username));
			$m_sender = $query->row()->id; // retrieve sender ID

			$ip = getenv('HTTP_CLIENT_IP')?:
				  getenv('HTTP_X_FORWARDED_FOR')?:
				  getenv('HTTP_X_FORWARDED')?:
				  getenv('HTTP_FORWARDED_FOR')?:
				  getenv('HTTP_FORWARDED')?:
				  getenv('REMOTE_ADDR');

		  	$new_payment = array (
				'm_sender' 		=>	$m_sender,
				'transactionID' 	=>	$transactionID,
				'reference' 		=>	$reference,
				'timestamp' 	=>	date('Y-m-d H:i:s',time()),
				'ip_add'	=> $ip
			);

			$insert = $this->db->insert('payments', $new_payment);
			return $insert;
		}

		function retrieve_messages() {
			$sql = 'SELECT 		*
					FROM		messages
					ORDER BY 	m_timestamp DESC';

			$query = $this->db->query($sql, array(2));

			if ($query->num_rows() > 0) {
				return $query->result(); // use result() for more than one result
			} else {
				return NULL;
			}
		}
	}
?>