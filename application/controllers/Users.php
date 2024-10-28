<?php  
   class Users extends CI_Controller  
   {  
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
         $this->load->model('UserModel');  
         //load the method of model  
         $data['h']=$this->UserModel->select();  
         //return the data in view  
         $this->load->view('user_management', $data);  
      }  
      public function tambah_data()  
      {   
         //load the model  
         $this->load->model('UserModel');  
         //load the method of model  
         $this->UserModel->proses_tambah_data();  
         //return the data in view  
         redirect(base_url('index.php/users'));  
      }  

      public function delete_data($id = 0)  
      {   
         $id = $this->uri->segment(3);
         //load the model  
         $this->load->model('UserModel');  
         //load the method of model  
         $this->UserModel->proses_delete_data($id);  
         //return the data in view  
         redirect(base_url('index.php/users'));  
      }

      public function form_edit_data($id = 0)  
      {   
          //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('UserModel');  
         //load the method of model  
         $id = $this->uri->segment(3);
         $data['h']=$this->UserModel->form_edit_data($id);  
         //return the data in view  
         $this->load->view('edit_page', $data);  
      }

      public function edit_data($id = 0)  
      {   
          //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('UserModel');  
         //load the method of model  
         $id = $this->uri->segment(3);
         $this->UserModel->proses_edit_data($id);  
         redirect(base_url('index.php/users'));  
      }
   }  
?>  
