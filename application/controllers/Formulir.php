<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model('FormulirModel');
    }

    public function formulir()
    {
		$output = $this->FormulirModel->save_data();
		$this->load->view('formulir',['output'=>$output]);
	}
}
