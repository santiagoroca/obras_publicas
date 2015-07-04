<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function __construct () {
		parent::__construct();
		$this->load->database();
	}

	public function log_in ($u, $p) {
		$user = $this->db->query ('
			SELECT id as u_id, user, name, last_name, adress, tel, email, type
			FROM user
			LEFT JOIN profile ON user.id = profile.userid
			WHERE SHA2(CONCAT(user.salt, $p)) = user.hash
				AND user.user = $u
		')->row ();

		if (isset($user)) {
			$this->session->set_userdata($user);
			return true;
		}

		return false;
	}

}
