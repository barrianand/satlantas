<?php  
   class LaporanModel extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select_data()  
      {  
        $query = $this->db->query('SELECT * FROM penilaian');

         //data is retrive from this query  
        return $query->result_array();
      }  

      public function select_bulan()  
      {  
        $query = $this->db->query('SELECT month(tanggal) as bulan,count(nama) as jumlah FROM penilaian group by month(tanggal) order by month(tanggal)');

         //data is retrive from this query  
        return $query->result_array();
      }  

      public function select_data_filtering()  
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
            $query = $this->db->get();  
            
        } else 
        {
         $this->db->select('*');
         $this->db->from('penilaian');
         $query = $this->db->get();  
        }
        return $query->result_array();
      }  

      public function select_bulan_filtering()  
      {  
         $post = $this->input->post();
        if(!empty($post))
        {
            $fdate = @$post['fdate'];
            $tdate = @$post['tdate'];
            $this->db->select('month(tanggal) as bulan,count(nama) as jumlah');
            $this->db->from('penilaian');
            $this->db->where('tanggal >=', $fdate);
            $this->db->where('tanggal <=', $tdate);
            $query = $this->db->get();  
        } else 
        {
         $this->db->select('*');
         $this->db->from('penilaian');
         $query = $this->db->get();  
        }
        return $query->result_array();
      }  
   }  
?>  