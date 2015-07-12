<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function __construct () {
		parent::__construct();
		$this->load->database();
	}

	public function log_in ($u, $p) {

		$this->db->trans_start();
		$user = $this->db->query ('
			SELECT user.id as u_id, user, name, last_name, address, tel, email, type
			FROM user
			LEFT JOIN profile ON user.id = profile.user_id
			WHERE SHA2(CONCAT(user.salt, "'.$p.'"), 512) = user.hash
				AND user.user = "'.$u.'"
		')->row();
		$this->db->trans_complete();

		if ($user) {
			$this->session->set_userdata('data', $user);
			return true;
		}

		return false;
	}

	public function create ($user_data, $profile_data) {

		$this->db->trans_start();
		$uuid = uniqid();
		$user_data ['hash'] = hash ('sha512', $uuid.$user_data['hash']);
		$user_data ['salt'] = $uuid;
		$user = $this->db->insert ('user', $user_data);

		$profile_data ['user_id'] = $this->db->insert_id();
		$profile = $this->db->insert ('profile', $profile_data);
		$this->db->trans_complete();

		if ($this->db->trans_status() === TRUE) {
			return true;
		}

		return false;
	}

	public function user_exists ($user, &$errors) {
		$query = $this->db->select ("id")
			              ->from ("user")
			              ->where ("user = '".$user."'")
			              ->get();

		if ($query->num_rows() > 0) {
			$errors [] = "El usuario ya existe.";
		}
	}

	public function update_user ($u_id, $password) {
		$this->db->where('id', $u_id);
		$uuid = uniqid();
		$this->db->update('user', Array (
			'hash' => hash ('sha512', $uuid.$password),
			'salt' => $uuid
		)); 
	}

	public function update_profile ($u_id, $data) {
		$this->db->where('user_id', $u_id);
		$this->db->update('profile', $data); 
	}

	public function update_session ($id) {

		$this->db->trans_start();
		$user = $this->db->select ('user.id as u_id, user, name, last_name, address, tel, email, type, birth_date')
						 ->from ('user')
						 ->join ('profile', 'user.id = profile.user_id', 'LEFT')
						 ->where ('user.id = "'.$id.'"')
						 ->get ()
						 ->row ();
		$this->db->trans_complete();

		if ($user) {
			$this->session->set_userdata('data', $user);
			return true;
		}

		return false;

	}

}
