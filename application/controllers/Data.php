<?php  
// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
   class Data extends CI_Controller  
   {  
      
      public function __construct(){
         parent::__construct();
         $this->load->model('AuthModel');
         if(!$this->AuthModel->is_login()){
             redirect('auth/login');
         }
     }
     public function filtering($tgl = 0)  
     {          
       if(!empty($this->uri->segment(3))){
           $tgl = $this->uri->segment(3);
        }
        //load the database  
        $this->load->database();  
        //load the model  
        $this->load->model('DataModel');  
        //load the method of model  
        $data['h']=$this->DataModel->filtering_by_date($tgl);  
        //return the data in view  
        $this->load->view('data', $data);  
     }

     public function export($tgl = 0)  
      {  
         if(!empty($this->uri->segment(3))){
            $tgl = $this->uri->segment(3);
         }
         $this->load->model('DataModel');  
		   $rekap = $this->DataModel->get_export_data($tgl);
		   $spreadsheet = new Spreadsheet();
         $sheet = $spreadsheet->getActiveSheet();
       	$sheet->setCellValue('A1', 'Nama');
         $sheet->setCellValue('B1', 'No Handphone');
         $sheet->setCellValue('C1', 'Masukkan');
         $sheet->setCellValue('D1', 'Tanggal');
	      $sheet->setCellValue('E1', 'U1');
         $sheet->setCellValue('F1', 'U2'); 
         $sheet->setCellValue('G1', 'U3'); 
         $sheet->setCellValue('H1', 'U4'); 
         $sheet->setCellValue('I1', 'U5');       
         $sheet->setCellValue('J1', 'U6'); 
         $sheet->setCellValue('K1', 'U7'); 
         $sheet->setCellValue('L1', 'U8'); 
         $sheet->setCellValue('M1', 'U9'); 
         $sheet->setCellValue('N1', 'Email'); 
         $rows = 2;
         foreach ($rekap as $val){
            $sheet->setCellValue('A' . $rows, $val['nama']);
            $sheet->setCellValue('B' . $rows, $val['no_hp']);
            $sheet->setCellValue('C' . $rows, $val['masukkan']);
            $sheet->setCellValue('D' . $rows, $val['tanggal']);
            $sheet->setCellValue('E' . $rows, $val['a1']);
            $sheet->setCellValue('F' . $rows, $val['a2']);
            $sheet->setCellValue('G' . $rows, $val['a3']);
            $sheet->setCellValue('H' . $rows, $val['a4']);
            $sheet->setCellValue('I' . $rows, $val['a5']);
            $sheet->setCellValue('J' . $rows, $val['a6']);
            $sheet->setCellValue('K' . $rows, $val['a7']);
            $sheet->setCellValue('L' . $rows, $val['a8']);
            $sheet->setCellValue('M' . $rows, $val['a9']);
            $sheet->setCellValue('N' . $rows, $val['email']);
            $rows++;
         } 

         // Set width kolom
         $sheet->getColumnDimension('A')->setWidth(25); 
         $sheet->getColumnDimension('B')->setWidth(15); 
         $sheet->getColumnDimension('C')->setWidth(35); 
         $sheet->getColumnDimension('D')->setWidth(10);
         $sheet->getColumnDimension('E')->setWidth(5);
         $sheet->getColumnDimension('F')->setWidth(5);
         $sheet->getColumnDimension('G')->setWidth(5);
         $sheet->getColumnDimension('H')->setWidth(5);
         $sheet->getColumnDimension('I')->setWidth(5);
         $sheet->getColumnDimension('J')->setWidth(5);
         $sheet->getColumnDimension('K')->setWidth(5);
         $sheet->getColumnDimension('L')->setWidth(5);
         $sheet->getColumnDimension('M')->setWidth(5);
         $sheet->getColumnDimension('N')->setWidth(20); 
    
         // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
         $sheet->getDefaultRowDimension()->setRowHeight(-1);

         $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
         
         // Set judul file excel nya
         $sheet->setTitle("Data Record IKM");
         // Proses file excel
         header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
         header('Content-Disposition: attachment;filename="Rekap Data IKM.xlsx"');
         header('Cache-Control: max-age=0');

         $writer = new Xlsx($spreadsheet);
         ob_end_clean();
         $writer->save('php://output');
         die;
      }

      public function index()  
      {  
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('DataModel');  
         //load the method of model  
         $data['h']=$this->DataModel->select(0);  
         //return the data in view  
         $this->load->view('data', $data);  
      }  
   }  
?>  
