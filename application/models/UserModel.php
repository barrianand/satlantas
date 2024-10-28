<?php  
   class UserModel extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $this->db->select('*');
         $this->db->from('user_management');
        //  $this->db->limit(20, 10);
         $query = $this->db->get();  
         return $query;  
      }  
      public function proses_tambah_data()  
      {  
        $post = $this->input->post();
        if(!empty($post))
        {
            $data['nama']=$this->input->post('nama');
			$data['username']=$this->input->post('username');
			$data['password']=md5($this->input->post('password'));
			$data['role']=$this->input->post('role');
		
			$response=$this->db->insert('user_management',$data);
			if($response==true){
                true;                                     
            } else{
                return 'Gagal';
            }
        }
      }  
      public function proses_delete_data($id)  
      {  
        $this->db->delete('user_management', array('id' => $id)); 
      }  

      public function form_edit_data($id)  
      {  
         //data is retrive from this query  
         $this->db->select('*');
         $this->db->from('user_management');
         $this->db->where('id', $id);
         $query = $this->db->get();  
         if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
      }  

      public function proses_edit_data($id)  
      {  
        $post = $this->input->post();
        if(!empty($post))
        {
            $data['nama']=$this->input->post('nama');
			$data['username']=$this->input->post('username');
			$data['password']=md5($this->input->post('password'));
			$data['role']=$this->input->post('role');
            
            $this->db->where('id', $id);
            $this->db->update('user_management',$data);
        }
      } 
   }  
?>  