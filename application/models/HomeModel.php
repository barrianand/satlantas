<?php  
   class HomeModel extends CI_Model  
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
   }  
?>  