<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormulirModel extends CI_Model {
    public function save_data()
    {
        // $this->db->insert('penilaian',$data);
        // return true;

        $post = $this->input->post();
        if(!empty($post))
        {
            $data['nama']=$this->input->post('nama');
			$data['no_hp']=$this->input->post('no_hp');
			$data['email']=$this->input->post('email');
			$data['masukkan']=$this->input->post('masukkan');
			$data['tanggal']=date("Y-m-d");

            //all the questions and answers
            $data['q1']='Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?';
            $data['a1']=$this->input->post('a1');

			$data['q2']='Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?';
            $data['a2']=$this->input->post('a2');

			$data['q3']='Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?';
            $data['a3']=$this->input->post('a3');
            
            $data['q4']='Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan?';
			$data['a4']=$this->input->post('a4');
            
            $data['q5']='Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?';
			$data['a5']=$this->input->post('a5');

            $data['q6']='Bagaimana pendapat saudara tentang kompetensi / kemampuan petugas dalam pelayanan?';
			$data['a6']=$this->input->post('a6');

            $data['q7']='Bagaimana pendapat saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?';
			$data['a7']=$this->input->post('a7');

            $data['q8']='Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?';
			$data['a8']=$this->input->post('a8');

            $data['q9']='Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?';
			$data['a9']=$this->input->post('a9');

			$response=$this->db->insert('penilaian',$data);
			if($response==true){
                true;                        
            } else{
                return 'Gagal';
            }
        }
    }
}
