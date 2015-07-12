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

		/*foreach ($images as $image) {
			$this->db->insert ('extra_image', Array (
				'id_work' => $i_id,
				'path' => $image
			));
		}*/

		foreach ($infos as $k => $info) {
			$this->db->insert ('extra_info', Array (
				'id_work' => $i_id,
				'title' => $info ['title'],
				'desc' => $info ['description'],
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
				'desc' => $info ['description']
			));
		}

		$this->db->trans_complete();

	}

	public function get ($id = "", $one = false) {
		$this->db->select ('works.*, high_profile.type as priority') 
						->from ('works')
						->join ('high_profile', 'works.owner = high_profile.id', 'LEFT');

		if ($id != "" && !$one) { $this->db->where ('works.owner', $id); }

		if ($id != "" && $one) {
			$this->db->where ('works.id', $id)->limit (1); 

			return $this->db->get ()
				        ->row ();
		}

		return $this->db->get ()
				        ->result ();
	}

	public function its_mine ($u_id, $w_id) {
				$this->db->select ('works.*') 
						->from ('works')
						->where ('works.id', $w_id)
						->where ('works.owner', $u_id);

		return $this->db->get ()->num_rows () == 1;
	}

	public function get_extra_info ($id) {
		$this->db->select ('*') 
						->from ('extra_info')
						->where ('extra_info.id_work', $id);
						
		return $this->db->get ()
				        ->result ();
	}
	
}
