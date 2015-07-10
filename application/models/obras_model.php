<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obras_model extends CI_Model {

	public function __construct () {
		parent::__construct();
		$this->load->database();
	}

	public function create ($work, $images, $infos) {

		$this->db->trans_start();

		$this->db->insert ('works', $work);
		$i_id = $this->db->insert_id ();

		foreach ($images as $image) {
			$this->db->insert ('extra_image', Array (
				'id_work' => $i_id,
				'path' => $image
			));
		}

		foreach ($infos as $info) {
			$this->db->insert ('extra_image', Array (
				'id_work' => $i_id,
				'title' => $info ['title'],
				'desc' => $info ['desc'],
				'icon' => $info ['icon']
			));
		}

		$this->db->trans_complete();

	}

	public function update ($work, $infos, $id) {

		$this->db->trans_start();

		$this->db->where ('id', $id);
		$this->db->update ('works', $work);

		foreach ($infos as $info) {
			$this->db->where ('id', $info ['id']);

			$this->db->update ('extra_image', Array (
				'title' => $info ['title'],
				'desc' => $info ['desc']
			));
		}

		$this->db->trans_complete();

	}

	public function get ($id) {
		$list = $this->db->select ('works.*, high_profile.type as priority') 
						->from ('works')
						->join ('high_profile', 'works.owner = high_profile.id', 'LEFT');

		if ($id != "") $this->db->where ('works.owner', $id);

		return $this->db->get ()
				        ->result ();
	}
	
}
