<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('AuthModel');
        if(!$this->AuthModel->is_login()){
            redirect('auth/login');
        }
    }
	
	public function index()
	{
        //load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('HomeModel');  
        //load the method of model  
        $data['h']=$this->HomeModel->select_data();
        $data['i']=$this->HomeModel->select_bulan();
        //return the data in view  
		$this->load->view('homepage',$data);
	}
}
