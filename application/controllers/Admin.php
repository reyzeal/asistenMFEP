<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
		 {
			parent::__construct();
            $username = $this->session->userdata('username');
            if(!$username){
                redirect("loginAdmin/logout");
            }

                //$this->session->set_userdata('buka','Y');
				$this->load->helper(array('form', 'url')); 
				$this->load->library('form_validation');
				$this->load->library('session');
				$this->load->model('mdata');
			
			 
		  }
	 
	 
	public function index()
	{
         $data['title'] = 'Dashboard';
         $data['jmlall'] = $this->mdata->jmlall();
         $data['jmllolos'] = $this->mdata->jmllolos();
         $data['sesiwaktu'] = $this->mdata->sesiwaktu()->row();
         $this->load->view('admin/index', $data);
	}
	
	    
    
   
    
    //Score Micro
	public function scoremicro()
	{
		//$data['struk'] = $this->mdata->profil()->result();
		$this->load->view('admin/score-micro');
		
	}
    
     //Score wawancara
	public function scorewawancara()
	{
		//$data['struk'] = $this->mdata->profil()->result();
		$this->load->view('admin/score-wawancara');
		
	}
    
     //Aspek
	public function aspek()
	{
        $data['title'] = 'Aturan Seleksi';
	    $data['aspek'] = $this->mdata->aspek()->result();
        $this->load->view('admin/aspek',$data);
		
	}
    
     public function addAspek()
	{	
        $data['title'] = 'Aturan Seleksi';
        $data['sesi'] = $this->mdata->sesiwaktu()->result();
		$this->load->view('admin/addAspek', $data);
	}
    
    public function insertAspek()
		{
				
			$data = array(
					
                'id_sesi' 		    => $this->input->post('id_sesi'),
				'nama_aspek' 		=> $this->input->post('nama_aspek')
					
					);
				
		
			
			$this->mdata->insertaspek($data);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/aspek'));
		}
    
    public function editAspek($id)
	{	
        $data['title'] = 'Aturan Seleksi';
		$data['aspek'] = $this->mdata->idaspek($id)->row();
		$this->load->view('admin/editAspek', $data);
	}
    
    public function updateAspek()
		{
				
			$data['id_aspek'] 		    = $this->input->post('id_aspek');
			$data['id_sesi'] 		    = $this->input->post('id_sesi');
			$data['nama_aspek'] 		= $this->input->post('nama_aspek');
				
			$id=$this->input->post('id_aspek');
			
			$this->mdata->updateAspek($id, $data);
			redirect(site_url('admin/aspek'));
		}
    
    public function hapusaspek($id)
		 {
			$data['aspek'] = $this->mdata->idaspek($id)->row();
			
			$this->mdata->hapusaspek($id);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/aspek'));
		}
    
    
    //Kriteria
	public function kriteria()
	{
        $data['title'] = 'Aturan Seleksi';
		$data['kriteria'] = $this->mdata->kriteria()->result();
		$data['aspek'] = $this->mdata->aspek()->result();

		// by reyzeal:
        $total_bobot_eval = 0;
        foreach ($data['kriteria'] as $k){
            $total_bobot_eval += $k->bobot_evaluasi;
        }
        if($total_bobot_eval != 1){
            $data['selisih'] = $total_bobot_eval - 1;
            $data['selisih'] = $data['selisih']>0?"+$data[selisih]":$data['selisih'];
            $this->session->set_flashdata('err', "Bobot evaluasi tidak sama dengan 1 (selisih $data[selisih])");
        }else{
            $this->session->set_flashdata('true', "Bobot evaluasi sama dengan 1");
        }

		$this->load->view('admin/kriteria', $data);
	}
    
    public function addKriteria()
	{	
        $data['title'] = 'Aturan Seleksi';
        $data['aspek'] = $this->mdata->aspek()->result();
        $this->load->view('admin/addKriteria', $data);
	}
    
     public function insertKriteria()
		{
				
			$data = array(
					
					'id_aspek' 		   => $this->input->post('id_aspek'),
					'nama_kriteria'    => $this->input->post('nama_kriteria'),
					'tipe' 		       => $this->input->post('tipe'),
					'nilai_target' 	   => $this->input->post('nilai_target'),
					'bobot_evaluasi' 	   => $this->input->post('bobot_evaluasi')
					);
				
		
			
			$this->mdata->insertKriteria($data);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/kriteria'));
		}
    
     public function editKriteria($id)
	{	
        $data['title'] = 'Aturan Seleksi';
		$data['aspek'] = $this->mdata->aspek()->result();
		$data['kriteria'] = $this->mdata->idkriteria($id)->row();
		$this->load->view('admin/editKriteria', $data);
	}
    
    public function updateKriteria()
		{
				
			$data['id_kriteria'] 		= $this->input->post('id_kriteria');
			$data['id_aspek'] 		    = $this->input->post('id_aspek');
			$data['nama_kriteria'] 		= $this->input->post('nama_kriteria');
			$data['tipe'] 		        = $this->input->post('tipe');
			$data['nilai_target'] 		= $this->input->post('nilai_target');
			$data['bobot_evaluasi'] 		= $this->input->post('bobot_evaluasi');
				
			$id=$this->input->post('id_kriteria');
			
			$this->mdata->updateKriteria($id, $data);
			redirect(site_url('admin/kriteria'));
		}
    
    public function hapusKriteria($id)
		 {
			$data['kriteria'] = $this->mdata->idKriteria($id)->row();
			
			$this->mdata->hapusKriteria($id);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/Kriteria'));
		}
    
    
    //MAKUL
	public function makul()
	{
        $data['title'] = 'Aturan Seleksi';
		$data['kriteria'] = $this->mdata->kriteria()->result();
		$data['makul'] = $this->mdata->makul()->result();
		$this->load->view('admin/makul', $data);
	}
    
    public function addMakul()
	{	
        $data['title'] = 'Aturan Seleksi';
        $data['kriteria'] = $this->mdata->kriteria()->result();
        $data['makul'] = $this->mdata->makul()->result();
        $this->load->view('admin/addMakul', $data);
	}
    
     public function insertMakul()
		{
				
			$data = array(
					
					'id_kriteria' 		  => $this->input->post('id_kriteria'),
					'nama_makul'       => $this->input->post('nama_makul')
					);
				
		
			
			$this->mdata->insertMakul($data);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/makul'));
		}
    
    public function editMakul($id)
	{	
        $data['title'] = 'Aturan Seleksi';
		$data['makul'] = $this->mdata->idmakul($id)->row();
		$data['kriteria'] = $this->mdata->kriteria()->result();
		$this->load->view('admin/editMakul', $data);
	}
    
    public function updateMakul()
		{
				
			$data['id_makul'] 		= $this->input->post('id_makul');
			$data['id_kriteria'] 	= $this->input->post('id_kriteria');
			$data['nama_makul'] 	= $this->input->post('nama_makul');
				
			$id=$this->input->post('id_makul');
			
			$this->mdata->updateMakul($id, $data);
			redirect(site_url('admin/makul'));
		}
    
    public function hapusMakul($id)
		 {
			$data['makul'] = $this->mdata->idMakul($id)->row();
			
			$this->mdata->hapusMakul($id);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/makul'));
		}
    
    
    //Bobot GAP
	public function gap()
	{
        $data['title'] = 'Aturan Seleksi';
		$data['gap'] = $this->mdata->gap()->result();
		$this->load->view('admin/gap', $data);
		
	}
    
    public function addGap()
	{	
        $data['title'] = 'Aturan Seleksi';
        $this->load->view('admin/addGap', $data);
	}
    
     public function insertGap()
		{
			$data = array(
					
					'selisih'          => $this->input->post('selisih'),
					'bobot' 		   => $this->input->post('bobot'),
					'keterangan' 	   => $this->input->post('keterangan')
					);
				
		
			
			$this->mdata->insertGap($data);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/gap'));
		}
    
     public function editGap($id)
	{	
        $data['title'] = 'Aturan Seleksi';
		$data['gap'] = $this->mdata->idgap($id)->row();
		$this->load->view('admin/editGap', $data);
	}
    
    public function updateGap()
		{
				
			$data['id_gap'] 		    = $this->input->post('id_gap');
			$data['selisih'] 		    = $this->input->post('selisih');
			$data['bobot'] 		        = $this->input->post('bobot');
			$data['keterangan'] 		= $this->input->post('keterangan');
				
			$id=$this->input->post('id_gap');
			
			$this->mdata->updateGap($id, $data);
			redirect(site_url('admin/gap'));
		}
    
    public function hapusGap($id)
		 {
			$data['gap'] = $this->mdata->idGap($id)->row();
			
			$this->mdata->hapusGap($id);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/Gap'));
		}
    
    
    //MASTER NILAI
	public function masternilai()
	{
        $data['title'] = 'Aturan Seleksi';
		$data['master'] = $this->mdata->masternilai()->result();
		$this->load->view('admin/masternilai', $data);
		
	}
    
    public function addMasternilai()
	{	
        $data['title'] = 'Aturan Seleksi';
        $this->load->view('admin/addMasternilai', $data);
	}
    
     public function insertMasternilai()
		{
				
			$data = array(
					
					'nama_nilai'       => $this->input->post('nama_nilai'),
					'bobot_nilai'      => $this->input->post('bobot_nilai')
					);
				
		
			
			$this->mdata->insertMasternilai($data);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/masternilai'));
		}
    
     public function editMasternilai($id)
	{	
        $data['title'] = 'Aturan Seleksi';
		$data['master'] = $this->mdata->idmasternilai($id)->row();
		$this->load->view('admin/editMasternilai', $data);
	}
    
    public function updateMasternilai()
		{
				
			$data['id_masternilai'] 		= $this->input->post('id_masternilai');
			$data['nama_nilai'] 		    = $this->input->post('nama_nilai');
			$data['bobot_nilai'] 		    = $this->input->post('bobot_nilai');
				
			$id=$this->input->post('id_masternilai');
			
			$this->mdata->updateMasternilai($id, $data);
			redirect(site_url('admin/masternilai'));
		}
    
    public function hapusMasternilai($id)
		 {
			$data['master'] = $this->mdata->idmasternilai($id)->row();
			
			$this->mdata->hapusMasternilai($id);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/masternilai'));
		}
    
    
    //Reviewwer
	public function reviewer()
	{
        $data['title'] = 'Reviewer';
		$data['reviewer'] = $this->mdata->reviewer()->result();
		$this->load->view('admin/reviewer', $data);
		
	}
    
     public function addReviewer()
	{	
        $data['title'] = 'Reviewer';
        $this->load->view('admin/addReviewer', $data);
	}
    
     public function insertReviewer()
		{
				
			$data = array(
					
					'nama'         => $this->input->post('nama'),
					'jabatan' 	   => $this->input->post('jabatan'),
					'username' 	   => $this->input->post('username'),
					'password' 	   => md5($this->input->post('password'))
					);
				
		
			
			$this->mdata->insertReviewer($data);
            if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/Reviewer'));
		}
    
     public function editReviewer($id)
	{	
        $data['title'] = 'Reviewer';
		$data['reviewer'] = $this->mdata->idreviewer($id)->row();
		$this->load->view('admin/editReviewer', $data);
	}
    
    public function updateReviewer()
		{
				
			$data['id_reviewer'] 	= $this->input->post('id_reviewer');
			$data['nama'] 		    = $this->input->post('nama');
			$data['jabatan'] 		= $this->input->post('jabatan');
			$data['username'] 		= $this->input->post('username');
			$data['password'] 		= md5($this->input->post('password'));
				
			$id=$this->input->post('id_reviewer');
			
			$this->mdata->updateReviewer($id, $data);
            if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/reviewer'));
		}
    
    public function hapusReviewer($id)
		 {
			$data['reviewer'] = $this->mdata->idreviewer($id)->row();
			
			$this->mdata->hapusReviewer($id);
			if($data==true)
            {
              $this->session->set_flashdata('true', '<font-color:white>Yay! Berhasil.</font>');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/Reviewer'));
		}
    
    //Sesi
    public function tes()
	{
		//$data['sesi'] = $this->mdata->sesi()->result();
		$this->load->view('admin/tes');
		
	}
	public function sesi()
	{
        $data['title'] = 'Sesi';
		$data['sesi'] = $this->mdata->sesi()->result();
		$this->load->view('admin/sesi', $data);
		
	}
    
    public function addSesi()
	{	
        $data['title'] = 'Sesi';
        $this->load->view('admin/addSesi', $data);
	}
    
     public function insertSesi()
		{
				
			$data = array(
					
					'nama_sesi' => $this->input->post('nama_sesi'),
					'buka' 	   => $this->input->post('buka')
					);
				
		
			
			$this->mdata->insertSesi($data);
			if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/Sesi'));
		}
    
     public function editSesi($id)
	{	
        $data['title'] = 'Sesi';
		$data['sesi'] = $this->mdata->idsesi($id)->row();
		$this->load->view('admin/editSesi', $data);
	}
    
    public function updateSesi()
		{
				
			$data['id_sesi'] 	 = $this->input->post('id_sesi');
			$data['nama_sesi']   = $this->input->post('nama_sesi');
			$data['buka'] 		 = $this->input->post('buka');
				
			$id=$this->input->post('id_sesi');
			
			$this->mdata->updateSesi($id, $data);
			redirect(site_url('admin/sesi'));
		}
    
    public function hapusSesi($id)
		 {
			$data['sesi'] = $this->mdata->idSesi($id)->row();
			
			$this->mdata->hapusSesi($id);
			if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/sesi'));
		}
    
    
    
    
    //PENDAFTARAN
	public function pendaftaran()
	{
        $data['title'] = 'Pendaftar';
		$data['pendaftar'] = $this->mdata->pendaftar()->result();
		$this->load->view('admin/pendaftar', $data);
		
	}
    
    public function detailpendaftaran($id)
	{
        $data['title'] = 'Pendaftar';
		$data['pendaftar'] = $this->mdata->idpendaftar($id)->row();
		$data['nilai'] = $this->mdata->idnilaikuliah($id)->result();
		$this->load->view('admin/pendaftar-detail', $data);
		
	}
    
     public function addPendaftar()
	{	
        $data['title'] = 'Pendaftar';
        $data['sesi'] = $this->mdata->sesiwaktu()->result();
        $data['makul'] = $this->mdata->makul()->result();
        $data['master'] = $this->mdata->masternilai()->result();
        $this->load->view('admin/addPendaftar', $data);
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
					'pekerjaan'		 	    => $this->input->post('pekerjaan')
					//'file'		 	        => $this->input->post('file'),
				    //'transkrip' 		    => $this->input->post('transkrip')
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
                    //print_r($data);
                    //die();
                    $this->mdata->insertdaftar($data);
                    $this->session->set_flashdata('notif', 'Berhasil disimpan');
                }
		
		
        	
            $lastid = $this->db->insert_id();
		
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('id_pendaftaran', $lastid);
			$this->db->get();
			
			
			//echo $lastid;
			$data['pendaftaran'] = $this->mdata->idpendaftar($lastid)->row();
			
			$nilai = $this->input->post('id_masternilai');
			
			if($data['pendaftaran']->ipk >= 3.00 && !(in_array(4, $nilai) || in_array(5, $nilai) || in_array(6, $nilai) || in_array(7, $nilai)))
				{
					$this->db->query("update pendaftaran set status='Lolos' where id_pendaftaran='$lastid'");
                    $this->db->query("insert into kompetensi values('', '$lastid', '0', '0')");

				} else { $this->db->query("update pendaftaran set status='Tidak Lolos' where id_pendaftaran='$lastid'");}
				
			 $nilai = $this->input->post('id_masternilai');
        
            $data3 = array();
		
            foreach($nilai as $key => $value){
           //    echo 'id_makul :'.$key.', id_masternilai :'.$value. '<br>';
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

			redirect(site_url('admin/pendaftar'));

			
		}
    
    
     public function editPendaftar($id)
	{	
        $data['title'] = 'Pendaftar';
        $data['makul'] = $this->mdata->makul()->result();
        $data['master'] = $this->mdata->masternilai($id)->result();
        
		$data['pendaftar'] = $this->mdata->idpendaftar($id)->row();
		$data['nilai'] = $this->mdata->idnilaikuliah($id)->row();
		$this->load->view('admin/editpendaftar', $data);
	}
    
    public function updatependaftar()
		{
				
			$data = array(
				    'id_sesi'		 	    => $this->input->post('id_sesi'),
				    'id_pendaftaran'		 	    => $this->input->post('id_pendaftaran'),
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
					'pekerjaan'		 	    => $this->input->post('pekerjaan')
				);
        
        //CEK FILE
        if($_FILES['foto']['tmp_name'] != '' && $_FILES['transkrip']['tmp_name'] != '') {			
			
			$config['upload_path']          = './assets/images';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|pdf';
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			$id=$this->input->post('id_pendaftaran');
			
			$data4['x'] = $this->mdata->idpendaftar($id)->row();
			$a=$data4['x']->foto;
			$b=$data4['x']->transkrip;
			
			//print_r($a);
            
			if(file_exists('./assets/'.$a)) 
				{
					unlink('./assets/'.$a);
				}
            if(file_exists('./assets/'.$b)) 
				{
					unlink('./assets/'.$b);
				}
				
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
                    //print_r($data);
                    //die();
                    //$this->mdata->insertdaftar($data);
                    //$this->session->set_flashdata('notif', 'Berhasil disimpan');
                }

		}
         
                $id=$this->input->post('id_pendaftaran');
                  $this->mdata->updatedaftar($id, $data);
        
     //CEK NILAI
        	$id=$this->input->post('id_pendaftaran');
        $data['pendaftaran'] = $this->mdata->idpendaftar($id)->row();
        
        $this->mdata->hapusnilai($id);
        
        $nilai = $this->input->post('id_masternilai');
			
			if($data['pendaftaran']->ipk >= 3.00 && !(in_array(4, $nilai) || in_array(5, $nilai) || in_array(6, $nilai) || in_array(7, $nilai)))
				{
					$this->db->query("update pendaftaran set status='Lolos' where id_pendaftaran='$id'");
                    $this->db->query("insert into kompetensi values('', '$id', '0', '0')");

				} else { $this->db->query("update pendaftaran set status='Tidak Lolos' where id_pendaftaran='$id'");}
				
			 $nilai = $this->input->post('id_masternilai');
        
            $data3 = array();
		
            foreach($nilai as $key => $value){
           //    echo 'id_makul :'.$key.', id_masternilai :'.$value. '<br>';
                 $data2 = array(
					'id_pendaftaran'		 => $id,
					'id_makul'		 	     => $key,
					'id_masternilai'		 => $value
					);
                
                if(!empty($value))
                {
                array_push($data3,$data2);
                }
			}
        
       
            $this->mdata->insertmasternilaikuliah($data3);
  
       

			redirect(site_url('admin/pendaftaran'));

                
        
                
		}
    
    public function hapusPendaftar($id)
		 {
			$data['pendaftar'] = $this->mdata->idpendaftar($id)->row();
			
			$this->mdata->hapuspendaftar($id);
			 if($data==true)
            {
              $this->session->set_flashdata('true', 'Yay! Berhasil.');
            }
            else
            {
              $this->session->set_flashdata('err', "Oops! Gagal, coba lagi.");
            }
			redirect(site_url('admin/pendaftar'));
		}
    
    
    
     //Score Kompetensi
	public function kompetensi()
	{     
        $data['title'] = 'Pendaftar';
		$data['kompetensi'] = $this->mdata->kompetensi()->result();
//		echo json_encode($data['kompetensi']);
		$this->load->view('admin/kompetensi', $data);
		
	}
    
    public function insertkompetensi()
		{
            $this->db->empty_table('kompetensi');
        
            $id_pendaftaran = $_POST['id_pendaftaran'];  
            $pemrograman = $_POST['pemrograman']; 
            $jaringan = $_POST['jaringan']; 

            $data = array();

            $index = 0; // Set index array awal dengan 0
            foreach($id_pendaftaran as $datanilai){ // Kita buat perulangan berdasarkan nis sampai data terakhir
              array_push($data, array(
                'id_pendaftaran'    =>$datanilai,
                'pemrograman'       =>$pemrograman[$index],  // Ambil dan set data nama sesuai index array dari $index
                'jaringan'          =>$jaringan[$index],  // Ambil dan set data telepon sesuai index array dari $index

              ));

              $index++;
            }
            print "<pre>";
            print_r($data);
            $this->mdata->insertkompetensi($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan, <a href="slide">Kembali.</a>');
			redirect(site_url('admin/kompetensi'));
		}
    
	
    //SLIDE
    
    public function slide()
	{
		$data['slide'] = $this->mdata->all_slide()->result();
		$this->load->view('admin/slide', $data);
	}
	
	public function addslide()
	{
		$this->load->view('admin/addslide');
	}
	
	public function insertslide()
		{
			$data = array(
					'file'		 	=> $this->input->post('file'),
				'link' 		=> $this->input->post('link')
					);
			
				$config['upload_path']          = './assets/images/slide';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				$status = $this->upload->do_upload('file');
				
			if($data){
				$upload_data= $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = 'slide/'.$name;
				$this->mdata->insertslide($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan, <a href="slide">Kembali.</a>');
			}
			

			redirect(site_url('admin/slide'));
		}
		
	public function ubahslide($id)
		{	
			$data['slide'] = $this->mdata->idslide($id)->row();
			$this->load->view('admin/editslide', $data);
		}
		
	public function updateslide()
		{
				
			$data = array(
				'id'       => $this->input->post('id'),
				'link'     => $this->input->post('link')
				);
				
			if($_FILES['file']['tmp_name'] != '') {			
			
			$config['upload_path']          = './assets/images/slide/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg';
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			$id=$this->input->post('id');
			
			$data['file'] = $this->mdata->idslide($id)->row();
			$a=$data['file']->file;
			
						
			if(file_exists('./assets/images/'.$a)) 
				{
					unlink('./assets/images/'.$a);
				}
			
			$status = $this->upload->do_upload('file');
			
			if($status) 
				{
					$upload_data = $this->upload->data();
					$data['file'] ='slide/'.$upload_data['file_name']; 
				}
		}
			
			$id=$this->input->post('id');
			$this->mdata->update_slide($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('admin/slide'));
		}
		
    	
	public function hapusslide($id)
		 {
			$data['file'] = $this->mdata->idslide($id)->row();
			$a=$data['file']->file;
			
			unlink('assets/images/'.$a);			
			$this->mdata->delete_slide($id);
			$this->session->set_flashdata('notif', 'Berhasil dihapus, <a href="slide">Kembali.</a>');
			redirect(site_url('admin/slide'));
		}
	
    
    
    
	//PROF Admin
	public function profadmin()
	{
        $data['title'] = 'Admin';
		$data['admin'] = $this->mdata->profadmin()->result();
		$this->load->view('admin/akunadmin', $data);
		
	}
	
	public function editAdmin($id)
	{	
        $data['title'] = 'Admin';
		$data['admin'] = $this->mdata->idadmin($id)->row();
		$this->load->view('admin/editakun', $data);
	}
		
	public function updateadmin()
		{
				
			$data['id_admin'] 		= $this->input->post('id_admin');
			$data['nama'] 		    = $this->input->post('nama');
			$data['username'] 		= $this->input->post('username');
			$data['password'] 		= md5($this->input->post('password'));
				
			$id=$this->input->post('id_admin');
			
			$this->mdata->updateadmin($id, $data);
			redirect(site_url('admin/profadmin'));
		}

    //Detail Perhitungan MFEP
    //by reyzeal
    public function detail_mfep($id_pendaftaran){
        $data['title'] = 'Pendaftar';
        $data['pendaftar']        = $this->mdata->idpendaftar($id_pendaftaran)->row();
        $data['nilai']            = $this->mdata->nilai($id_pendaftaran)->result();
        $data['kompetensi']       = $this->mdata->nilaikompetensi($id_pendaftaran)->row();
        $data['reviewer']         = $this->mdata->jmlreviewer($id_pendaftaran)->row();
        $data['microwawancara']   = $this->mdata->microwawancara($id_pendaftaran)->result();
        $data['aspek']  = $this->mdata->aspek()->result();
        $data['hasil'] = 0;
        foreach ($data['aspek'] as &$aspek){
            $bobot = $this->mdata->aspekkriteria($aspek->id_aspek)->result();
            foreach ($bobot as $row){
                $aspek->kriteria[] = [
                    "nama_kriteria" => $row->nama_kriteria,
                    "konversi"  => $row->nilai_target,
                    "eval"      => $row->bobot_evaluasi,
                    "bobot"     => $row->nilai_target*$row->bobot_evaluasi
                ];
                $data['hasil'] += $row->nilai_target*$row->bobot_evaluasi;
            }
        }
//        echo json_encode($data);
        $this->load->view('admin/tampilhasilMFEP', $data);
    }
    
    //Detail Perhitungan
     public function detail_perhitungan($id_pendaftaran=7)
        {   
             $data['kriteria']['query']         = $this->mdata->kriteria()->result();
             $data['kriteria'][6]               = $this->mdata->aspekkriteria(6)->result();
             $data['kriteria'][7]               =$this->mdata->aspekkriteria(7)->result();
         
         foreach($data['kriteria']['query'] as $row){
             $data['kriteria']['new'][$row->id_kriteria] = $row->nilai_target; 
             $data['kriteria']['pengelompokan'][$row->id_aspek][$row->tipe][$row->id_kriteria] = $row->nama_kriteria; 
             
             
         }
           
            $data['gap']['query']             = $this->mdata->gap()->result();
         
            foreach($data['gap']['query'] as $row){
                $data['gap']['new'][$row->selisih] = $row->bobot; 
             }
         
             $data['pendaftar']        = $this->mdata->idpendaftar($id_pendaftaran)->row();
             $data['nilai']            = $this->mdata->nilai($id_pendaftaran)->result();
             $data['kompetensi']       = $this->mdata->nilaikompetensi($id_pendaftaran)->row();
             $data['reviewer']         = $this->mdata->jmlreviewer($id_pendaftaran)->row();
             $data['microwawancara']   = $this->mdata->microwawancara($id_pendaftaran)->result();
             
            

         //administrasi
         $data['bobot'][2]= $this->generate_bobot($data['pendaftar']->ipk, 4, $data['kriteria']['new'][2]);
         $data['bobot'][4]= $data['pendaftar']->sertifikasi == 'Y'?3:1;
         
         foreach($data['nilai'] as $row){
               
            $data['bobot'][$row->id_kriteria]= $this->generate_bobot($row->nilai, ($row->jml*4), $data['kriteria']['new'][$row->id_kriteria]);

         }

         //kompetensi
          $rata=($data['kompetensi']->pemrograman + $data['kompetensi']->jaringan)/2;
          $data['bobot'][5]= $this->generate_bobot($rata , 100, $data['kriteria']['new'][5]);
         
         
         //micro & wawancara
         $max=$data['reviewer']->jml*5;
         
         foreach($data['microwawancara'] as $row){
             $data['bobot'][$row->id_kriteria]= $this->generate_bobot($row->nilai,$max, 5);
         }
         
         //gap
         foreach($data['bobot'] as $key=>$value)
         {
             $data['selisih'][$key]    =$value-$data['kriteria']['new'][$key];
             $data['gap'][$key]        =$data['gap']['new'][$data['selisih'][$key]];
         }
         

        $data['hasil']['jumlah']=0;
        foreach( $data['kriteria']['pengelompokan'] as $key => $value){
         
             foreach($value as $key1 => $value1){
                  $data['hasil'][$key][$key1]['sum']= 0;
         
                  foreach($value1 as $key2 => $value2){
                       $data['hasil'][$key][$key1]['sum'] +=  empty($data['gap'][$key2])?0:$data['gap'][$key2];
                 }
                   $data['hasil'][$key][$key1]['avg']= $data['hasil'][$key][$key1]['sum']/count($value1);
               }
             
             $cf = empty($data['hasil'][$key]['CF']['avg'])?0:$data['hasil'][$key]['CF']['avg'];   
             $sf = empty($data['hasil'][$key]['SF']['avg'])?0:$data['hasil'][$key]['SF']['avg'];            
             //$data['hasil'][$key]['N']=  ($cf+$sf)/count($data['hasil'][$key]);
             $data['hasil'][$key]['N']=  (($cf*60/100)+($sf*40/100));
             
             $data['hasil']['jumlah'] += $data['hasil'][$key]['N'];
         }
        
     
           $data['title'] = 'Pendaftar';
           $this->load->view('admin/tampilhasil', $data);
        }
    
    //Generate Nilai
    public function generate()
        {  

            echo '<pre>';
            print_r($this->input->post());

            $data['title'] = 'Pendaftar';
            echo "<pre>";
            $data['kriteria']['query']        = $this->mdata->kriteria()->result();
         
            foreach($data['kriteria']['query'] as $row){
                $data['kriteria']['new'][$row->id_kriteria] = $row->nilai_target; 
                $data['kriteria']['pengelompokan'][$row->id_aspek][$row->tipe][$row->id_kriteria] = $row->nama_kriteria; 
            }
           
            $data['gap']['query']             = $this->mdata->gap()->result();

          foreach($data['gap']['query'] as $row){
            $data['gap']['new'][$row->selisih] = $row->bobot; 
             
         }
         
            foreach($this->input->post('id_pendaftar') as $key => $id_pendaftaran){
             $data[$id_pendaftaran]['pendaftar']        = $this->mdata->idpendaftar($id_pendaftaran)->row();
             $data[$id_pendaftaran]['nilai']            = $this->mdata->nilai($id_pendaftaran)->result();
             $data[$id_pendaftaran]['kompetensi']       = $this->mdata->nilaikompetensi($id_pendaftaran)->row();
             $data[$id_pendaftaran]['reviewer']         = $this->mdata->jmlreviewer($id_pendaftaran)->row();
             $data[$id_pendaftaran]['microwawancara']   = $this->mdata->microwawancara($id_pendaftaran)->result();
             
            

         //administrasi
         $data[$id_pendaftaran]['bobot'][2]= $this->generate_bobot($data[$id_pendaftaran]['pendaftar']->ipk, 4, $data['kriteria']['new'][2]);
         $data[$id_pendaftaran]['bobot'][4]= $data[$id_pendaftaran]['pendaftar']->sertifikasi == 'Y'?3:1;
         
         foreach($data[$id_pendaftaran]['nilai'] as $row){
            $data[$id_pendaftaran]['bobot'][$row->id_kriteria]= $this->generate_bobot($row->nilai, ($row->jml*4), $data['kriteria']['new'][$row->id_kriteria]);
        }

         //kompetensi
         if($data[$id_pendaftaran]['kompetensi']){
                $rata=($data[$id_pendaftaran]['kompetensi']->pemrograman + $data[$id_pendaftaran]['kompetensi']->jaringan)/2;
            }else{
                    $rata=0;
         }
          
        $data[$id_pendaftaran]['bobot'][5]= $this->generate_bobot($rata , 100, $data['kriteria']['new'][5]);
         
        
         //micro & wawancara
         $max=$data[$id_pendaftaran]['reviewer']->jml*5;
         
         foreach($data[$id_pendaftaran]['microwawancara'] as $row){
             $data[$id_pendaftaran]['bobot'][$row->id_kriteria]= $this->generate_bobot($row->nilai,$max, 5);
         }
         
         //gap
         foreach($data[$id_pendaftaran]['bobot'] as $key=>$value)
         {
             $data[$id_pendaftaran]['selisih'][$key]    =$value-$data['kriteria']['new'][$key];
             $data[$id_pendaftaran]['gap'][$key]        =$data['gap']['new'][$data[$id_pendaftaran]['selisih'][$key]];
         }
         
         
        $data[$id_pendaftaran]['hasil']['jumlah']=0;
         foreach( $data['kriteria']['pengelompokan'] as $key => $value){
           
            foreach($value as $key1 => $value1){
                  $data[$id_pendaftaran]['hasil'][$key][$key1]['sum']= 0;
        
                  foreach($value1 as $key2 => $value2){
                       $data[$id_pendaftaran]['hasil'][$key][$key1]['sum'] +=  empty($data[$id_pendaftaran]['gap'][$key2])?0:$data[$id_pendaftaran]['gap'][$key2];
                  }
                   
                $data[$id_pendaftaran]['hasil'][$key][$key1]['avg']= $data[$id_pendaftaran]['hasil'][$key][$key1]['sum']/count($value1);
                 
             }
             
             $cf = $data[$id_pendaftaran]['hasil'][$key]['CF']['avg'];
             $sf = empty($data[$id_pendaftaran]['hasil'][$key]['SF']['avg'])?0:$data[$id_pendaftaran]['hasil'][$key]['SF']['avg'];            
             //$data[$id_pendaftaran]['hasil'][$key]['N']=  ($cf+$sf)/count($data[$id_pendaftaran]['hasil'][$key]);
                $data[$id_pendaftaran]['hasil'][$key]['N']=  (($cf*60/100)+($sf*40/100));
                //$data['hasil'][$key]['N']=  (($cf*60/100)+($sf*40/100));
             
             $data[$id_pendaftaran]['hasil']['jumlah'] += $data[$id_pendaftaran]['hasil'][$key]['N'];
         }
                echo "</br>Jumlah Total ID Pendaftaran ".$id_pendaftaran.' = '.$data[$id_pendaftaran]['hasil']['jumlah'];


                // by reyzeal::
                // mfep
                $aspek  = $this->mdata->aspek()->result();
                $total_mf = 0;
                foreach ($aspek as &$a){
                    $bobot = $this->mdata->aspekkriteria($a->id_aspek)->result();
                    foreach ($bobot as $row){
                        $total_mf += $row->nilai_target*$row->bobot_evaluasi;
                    }
                }
                $this->mdata->updatehasil(array('total_pf'=>$data[$id_pendaftaran]['hasil']['jumlah'],'total_mf'=>$total_mf, 'status_generate'=>'Sudah'), $id_pendaftaran);
            }



//        echo json_encode($data);
        $this->load->view('admin/tampilhasilMFEP', $data);
        redirect('admin/formgenerate');
        }
    
    public function formgenerate()
    {
        $data['title']      = 'Pendaftar';
        $data['pendaftar']  = $this->mdata->pendaftarlolos()->result();
        $this->load->view('admin/generate', $data);
    }
    
    public function tampilhasil()
    {
        $data['title']      = 'Pendaftar';
        $data['pendaftar']  = $this->mdata->pendaftarlolos()->result();
        $this->load->view('admin/tampilhasil', $data);
    }
    
   
    public function generate_bobot($nilai = 0, $max = 0, $target){
        $bobot = ($nilai/$max)*$target;
        return round($bobot) == 0 ? 1 : round($bobot);    }

	public function profilematching()
	{     
        $data['title']        = 'Metode';
		$data['pendaftar']    = $this->mdata->profilematching()->result();
		$this->load->view('admin/profilematching', $data);
		
	}
    
    public function mfep()
	{     
        $data['title'] = 'Metode';
		$data['pendaftar'] = $this->mdata->mfep()->result();
		$this->load->view('admin/multifactor', $data);
		
	}
    
    public function perbandingan()
	{     
        $data['title'] = 'Metode';
		$data['pendaftar'] = $this->mdata->profilematching()->result();
		$this->load->view('admin/perbandingan', $data);
		
	}
}
