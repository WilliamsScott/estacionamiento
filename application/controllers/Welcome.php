<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('login');
	}
	public function index()
	{
                $this->load->view('templates/header');
		$this->load->view('principal');
                $this->load->view('templates/footer');
	}
        public function adminindex()
	{
                $this->load->view('templates/header');
		$this->load->view('administrador/inicio');
                $this->load->view('templates/footer');
	}

	public function login()
	{
		$rut = $this->input->post('rut');
		$clave = $this->input->post('calve');
		$arrayUser = $this->login->login($rut,md5($clave));
		if(count($arrayUser)>0){
			if ($arrayUser[0]->tipo =="administrador") {
				json_encode(array("msg"=>"administrador"));

				# code...
			} else {

				json_encode(array("msg"=>"guardia"));
			}
			

		}else{
			echo json_encode(array("msg"=>"usuario no encontrado"));

		}
	}

}
