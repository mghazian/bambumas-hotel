<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

       function __construct(){
		parent::__construct();		
		$this->load->model('model_user');
        }
	public function index()
	{
		$this->load->view('view_homepage');
                $data['user']= $this->model_user->ambil_data()->result();
	}
        
         function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
                
                $where = array(
			'username' => $email
			);
                
		$cek = $this->model_user->cek_login('user',$where)->num_rows();
		if($cek > 0 ){
			
			$datalogin = $this->model_user->cek_login ('user', $where)->row_array();
			if (password_verify ($password, $datalogin['pass']))
			{
				$data_session = array(
					'email' => $email,
					'status' => "login",
					'nama_user'=> $datalogin['nama']
			
					);
	
				$this->session->set_userdata($data_session);
	
				redirect('c_staff');	
			}

			else echo "Username atau password salah !";
		}
           
                          
		else{
			echo "Username atau password salah !";
		}
	}
  
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}    
        
        function reserve(){
            $this->load->view('view_reservation');
              $data['user']= $this->model_user->ambil_data()->result();
        }
        
        
}
