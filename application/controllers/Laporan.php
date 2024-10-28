<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
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
        $this->load->model('LaporanModel');  
        //load the method of model  
        $data['h']=$this->LaporanModel->select_data();
        $data['i']=$this->LaporanModel->select_bulan();
		$this->load->view('laporan',$data);
	}

    public function pdf()
    {
        // $this->load->library('pdf');

        $this->load->database();
        $this->load->model('LaporanModel');  
        $data['h']=$this->LaporanModel->select_data();
        $data['i']=$this->LaporanModel->select_bulan();

        // $html = $this->output->get_output();

        // $this->pdf->setPaper('A4', 'potrait');
		// $this->pdf->filename = "laporan-satlantas-duri.pdf";
		// $this->pdf->load_view('pdf_export',$data);
        $this->load->view('pdf_export',$data);
    }

    public function filtering()  
     {          
        $this->load->database();  
        //load the model  
        $this->load->model('LaporanModel');  
        //load the method of model  
        $data['h']=$this->LaporanModel->select_data_filtering();
        $data['i']=$this->LaporanModel->select_bulan_filtering();
        if(!empty($data['h']))
        {
            $this->load->view('laporan',$data);    
        } else {
            $this->load->view('laporan_kosong');
        }
     }
}
