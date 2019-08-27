<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laboratorium extends CI_Controller {

	
	public function __construct()
		{
			parent::__construct();

			$this->load->helper(array('form', 'url')); 
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('mdata');
		}
		 
		 
		 
    public function index()
	{
        $data['sesi'] = $this->mdata->aktifsesi()->row();
		$this->load->view('index', $data);
	}
    
    public function pengumuman()
	{
		$this->load->view('pengumuman');
	}
    
    public function kontak()
	{
		$this->load->view('kontak');
	}
    
    public function notif()
	{
		$this->load->view('notif');
	}
    
    //PENDAFTARAN
    public function formdaftar()
	{
        $data['master']     = $this->mdata->masternilai()->result();
		$data['sesi']       = $this->mdata->sesiwaktu()->result();
        $data['makul']      = $this->mdata->makul()->result();
		$this->load->view('form-pendaftaran', $data);
		
	}
    
    public function insertdaftar()
		{

			$data = array(
					'id_sesi'		 	    => $this->input->post('id_sesi'),
					'nim'		 	        => $this->input->post('nim'),
					'nama_lengkap'		 	=> $this->input->post('nama_lengkap'),
					'nama_panggilan'		=> $this->input->post('nama_panggilan'),
					'temp_lahir'		 	=> $this->input->post('temp_lahir'),
					'tgl_lahir'		 	    => $this->input->post('tgl_lahir'),
					'agama'		 	        => $this->input->post('agama'),
					'alamat_rumah'		 	=> $this->input->post('alamat_rumah'),
					'alamat_kos'		 	=> $this->input->post('alamat_kos'),
					'no_hp'		 	        => $this->input->post('no_hp'),
					'email'		 	        => $this->input->post('email'),
					'ipk'		 	        => $this->input->post('ipk'),
					'bahasa_asing'		 	=> $this->input->post('bahasa_asing'),
					'bahasa_program'		=> $this->input->post('bahasa_program'),
					'sertifikasi'		 	=> $this->input->post('sertifikasi'),
					'organisasi'		 	=> $this->input->post('organisasi'),
					'pekerjaan'		 	    => $this->input->post('pekerjaan'),
					
					);
				
				$config['upload_path']          = 'assets/images/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
                $this->upload->do_upload('foto');
                $upload_data= $this->upload->data();
                $name = $upload_data['file_name'];

                $this->upload->do_upload('transkrip');
                $upload_data= $this->upload->data();
                $namee = $upload_data['file_name'];
				
				
                if($data){
                    $data['foto'] = 'images/'.$name;
                    $data['transkrip'] = 'images/'.$namee;
                    $this->mdata->insertdaftar($data);
                    $this->session->set_flashdata('notif', 'Berhasil disimpan');
                }
		
		          $lastid = $this->db->insert_id();
                
                    $this->db->select('*');
                    $this->db->from('pendaftaran');
                    $this->db->where('id_pendaftaran', $lastid);
                    $this->db->get();
			
			
			//echo $lastid;
			$data['pendaftaran']    = $this->mdata->idpendaftar($lastid)->row();
            $nilai                  = $this->input->post('id_masternilai');
			
			if($data['pendaftaran']->ipk >= 3.00 && !(in_array(4, $nilai) || in_array(5, $nilai) || in_array(6, $nilai) || in_array(7, $nilai)))
				{
					$this->db->query("update pendaftaran set status='Lolos' where id_pendaftaran='$lastid'");
                    $this->db->query("insert into kompetensi values('', '$lastid', '0', '0')");

				} else { $this->db->query("update pendaftaran set status='Tidak Lolos' where id_pendaftaran='$lastid'"); }
				
			$nilai = $this->input->post('id_masternilai');
            $data3 = array();
		
            foreach($nilai as $key => $value){
                   $data2 = array(
					'id_pendaftaran'		 => $lastid,
					'id_makul'		 	     => $key,
					'id_masternilai'		 => $value
					);
                
                if(!empty($value))
                {
                array_push($data3,$data2);
                }
			}
        
       
            $this->mdata->insertmasternilaikuliah($data3);
			$this->load->view('notif');

			
		}
   
}
