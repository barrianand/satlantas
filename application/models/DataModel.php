<?php  
   class DataModel extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select($tgl)  
      {  
         //data is retrive from this query  

         $this->db->select('*');
         $this->db->from('penilaian');
         if($tgl){
            $this->db->order_by('tanggal','desc');
         } else{
            $this->db->order_by('tanggal');
         }
        //  $this->db->limit(20, 10);
         $query = $this->db->get();  
         return $query;  
      }  

      public function filtering_by_date($tgl)
      {
       $post = $this->input->post();
        if(!empty($post))
        {
            $fdate = @$post['fdate'];
            $tdate = @$post['tdate'];

            $this->db->select('*');
            $this->db->from('penilaian');
            $this->db->where('tanggal >=', $fdate);
            $this->db->where('tanggal <=', $tdate);
            if($tgl){
               $this->db->order_by('tanggal','desc');
            } else{
               $this->db->order_by('tanggal');
            }
           //  $this->db->limit(20, 10);
            $query = $this->db->get();  
            return $query;
        } else 
        {
         $this->db->select('*');
         $this->db->from('penilaian');
         if($tgl){
            $this->db->order_by('tanggal','desc');
         } else{
            $this->db->order_by('tanggal');
         }
        //  $this->db->limit(20, 10);
         $query = $this->db->get();  
         return $query;
        }
      }

      public function get_export_data($tgl)
      {
         $this->db->select('*');
         $this->db->from('penilaian');
         if($tgl){
            $this->db->order_by('tanggal','desc');
         } else{
            $this->db->order_by('tanggal');
         }
        //  $this->db->limit(20, 10);
         $query = $this->db->get();  
         return $query->result_array();
      }
   }  
?>  