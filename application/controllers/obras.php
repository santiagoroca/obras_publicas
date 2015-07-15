<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obras extends CI_Controller {

	public function __construct () {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model("obras_model");
	}

	private function loadContent ($view_name, $params, $header = '') {
		$this->load->view('commons/header'.$header);
		$this->load->view($view_name, $params);
		$this->load->view('commons/footer');
	}

	private function loadContentPremium ($view_name, $params) {
		$this->load->view('commons/premium/header');
		$this->load->view($view_name, $params);
		$this->load->view('commons/premium/footer');
	}

	private function checkPassword ($pwd, &$errors) {
	    if (strlen($pwd) < 8) {
	        $errors[] = "La contraseña es demasiado corta.";
	    }

	    if (!preg_match("#[0-9]+#", $pwd)) {
	        $errors[] = "La contraseña debe incluir al menos un numero.";
	    }

	    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
	        $errors[] = "La contraseña debe incluir al menos una letra.";
	    }     

	    return $errors;
	}

	private function generateRandomString($length = 50) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	public function index () {
		$this->home ();
	}

	public function create_form () {
		$this->loadContent ('obras/crear', Array (
			'action_url' => base_url().'obras/create'
		));
	}

	public function update_form ($id) {
		if (!$this->obras_model->its_mine (
			$this->session->all_userdata()['data']->h_id, $id
		)) redirect (base_url().'obras/mylist');

		$this->loadContent ('obras/editar', Array (
			'action_url' => base_url().'obras/update',
			'data' => $this->obras_model->get ($id, true),
			'extra_info' => $this->obras_model->get_extra_info ($id)
		));
	}

	public function home ($id = "") {
		$this->loadContent ('obras/listar', Array (
			'data' => $this->obras_model->get ()
		));
	}

	public function create () {

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload');

	    $name_array = array();
		$count = count($_FILES['userfile']['size']);
		var_dump($count);
		foreach($_FILES as $key=>$value)
			for($s=0; $s <= $count - 1; $s++) {
				echo $s;
				$_FILES['userfile']['name'] = $value['name'][$s];
				$_FILES['userfile']['type'] = $value['type'][$s];
				$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
				$_FILES['userfile']['error'] = $value['error'][$s];
				$_FILES['userfile']['size'] = $value['size'][$s];  
				
				$name = $this->generateRandomString().".".pathinfo($value['name'][$s], PATHINFO_EXTENSION);
				$config['file_name'] = $name;

				$this->upload->initialize($config);
				if(!$this->upload->do_upload()) {
					var_dump($this->upload->display_errors());
					exit;
				}
				$name_array[] = $name;
			}

		$this->obras_model->create (
			Array (
				'title' => $this->input->post ('titulo_obra'),
				's_desc' => $this->input->post ('breve_descripcion'),
				'l_desc_a' => $this->input->post ('descripcion_detallada_a'),
				'l_desc_b' => $this->input->post ('descripcion_detallada_b'),
				'progress' => $this->input->post ('progreso'),
				'tags' => $this->input->post ('tag'),
				'owner' => $this->session->all_userdata()['data']->h_id
			),
			$name_array,
			$this->input->post ('info_extra')
		);

		redirect (base_url ().'obras/mylist');
	}

	public function update ($id) {
		if (!$this->obras_model->its_mine (
			$this->session->all_userdata()['data']->h_id, $id
		)) redirect (base_url().'obras/mylist');
		
		$this->obras_model->update (
			Array (
				'title' => $this->input->post ('titulo_obra'),
				's_desc' => $this->input->post ('breve_descripcion'),
				'l_desc_a' => $this->input->post ('descripcion_detallada_a'),
				'l_desc_b' => $this->input->post ('descripcion_detallada_b'),
				'progress' => $this->input->post ('progreso'),
				'tags' => $this->input->post ('tag'),
			),
			$this->input->post ('info_extra'),
			$id
		);	

		redirect (base_url ().'obras/mylist');
	}

	public function mylist () {
        $this->loadContent ('obras/mylist', Array (
    		'data' => $this->obras_model->get (
    			$this->session->all_userdata()['data']->h_id
    		)
    	));
	}

	public function load ($id) {
		$this->loadContentPremium ('obras/premium/home', Array (
			'data' => $this->obras_model->get ($id, true),
			'extra_info' => $this->obras_model->get_extra_info ($id),
			'extra_image' => $this->obras_model->get_extra_image ($id)
		));
	}

}
