<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginReviewer extends CI_Controller{

    public function __construct(){
	parent::__construct();
	
		 $this->load->helper(array('form', 'url', 'text_helper', 'date', 'file'));
		 $this->load->model('MloginReviewer', 'mod');
		 $this->load->library('form_validation');
		 $this->load->library('session');
		
	}
	public function index(){
		
		$this->load->view('loginReviewer');
		
	}
	
	public function proseslogin(){
			
			$username    = $this->input->post('username');
			$password    = $this->input->post('password');
			$cek         = $this->mod->ceklogin($username, $password);	
			
			if ($cek->num_rows() == 1) {
			
				 foreach ($cek->result() as $data) {
					$sess_data['username']     = $data->username;
					$sess_data['nama']         = $data->nama;
					$sess_data['id_reviewer']  = $data->id_reviewer;
					$sess_data['level']        = 'Reviewer';
                    
                    $a=$this->session->set_userdata($sess_data);
					redirect('reviewer/index');
				} 
				
			} else {
				$this->session->set_flashdata('notif', 'Maaf, Kombinasi Username dan Password salah.');
				redirect('loginReviewer');
			}	

		}
		
		public function logout() {
			$a=$this->session->sess_destroy();
			redirect('loginReviewer');
		}
}