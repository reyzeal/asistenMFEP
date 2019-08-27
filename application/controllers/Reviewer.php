<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewer extends CI_Controller {

	public function __construct()
		 {
			parent::__construct();
            $this->username = $this->session->userdata('username');
            $this->level = $this->session->userdata('level');
            $this->id_rev = $this->session->userdata('id_reviewer');
        
            if(!$this->username){
                redirect("loginReviewer/logout");
            }

                $this->load->helper(array('form', 'url')); 
                $this->load->library('form_validation');
                $this->load->library('session');
                $this->load->model('mreviewer');
		  }
	 
	 
    
    public function index()
	{
        $data['title']  = 'Dashboard';
        $data['aspek']  = $this->mreviewer->aspek()->result();
        $data['menu']   = $this->mreviewer->aspek()->result();
		$this->load->view('reviewer/index', $data);
	}
    
    public function pendaftaran()
	{
        $data['title']      = 'Pendaftar';
		$data['pendaftar']  = $this->mreviewer->pendaftar()->result();
		$this->load->view('Reviewer/dataPeserta', $data);
		
	}
    
    public function detail_profil($id)
	{
        $data['title']        = 'Pendaftar';
		$data['pendaftar']    = $this->mreviewer->idpendaftar($id)->row();
		$data['nilai']        = $this->mreviewer->idnilaikuliah($id)->result();
		$this->load->view('Reviewer/detail_profil', $data);
		
    }
	public function peserta($id)
	{    
        $data['menu']       = $this->mreviewer->aspek()->result();
        $data['title']      = 'Dashboard';
        $data['aspek']      = $this->mreviewer->idaspek($id)->row();
        $data['pendaftar']  = $this->mreviewer->dataPeserta_rev($this->id_rev)->result();
  
        $this->load->view('Reviewer/peserta', $data);
	}
	
	public function penilaian($id_pendaftaran, $id_aspek)
	{
        $data['menu']           = $this->mreviewer->aspek()->result();
        $data['title']          = 'Dashboard';
        $data['pendaftaran']    = $this->mreviewer->idPeserta($id_pendaftaran)->row();
        $data['aspek']          = $this->mreviewer->kriterianilai($id_aspek)->result();
        $data['as']             = $this->mreviewer->idaspek($id_aspek)->row();
        $this->load->view('Reviewer/penilaian', $data);
	}    
    
    
    public function insertPenilaian()
	{	
            $data1 = array(
                            'id_reviewer'       => $this->input->post('id_reviewer'),
                            'id_pendaftaran'    => $this->input->post('id_pendaftaran') 
                            );
            $idReviewer     =$this->input->post('id_reviewer');
            $idPeserta      =$this->input->post('id_pendaftaran');
            $query          =   $this->db->query("SELECT * FROM review_pendaftar where id_reviewer=$idReviewer AND id_pendaftaran=$idPeserta");
        
            $r          =   $query->row();
            $count_row  = $query->num_rows();

            if ($count_row < 1) {
                $this->mreviewer->insertreviewpendaftar($data1);
                $lastid         = $this->db->insert_id();
                
                $aspek          = $this->input->post('id_aspek');
                $nilai          = $this->input->post('nilai');
                $pendaftar      = $this->input->post('id_pendaftaran'); 
                $id_reviewer    = $this->input->post('id_reviewer');

                $data = array();
                foreach($nilai as $id_kriteria => $id_nilai)
                { 
                  array_push($data, array(

                                            'id_reviewpendaftar'    =>$lastid,
                                            'id_kriteria'           =>$id_kriteria,
                                            'nilai'                 =>$id_nilai

                                          ));
                }
              
                $this->mreviewer->insertnilaireviewer($data);
                
             }else{
                
            $aspek          = $this->input->post('id_aspek');
            $nilai          = $this->input->post('nilai');
            $pendaftar      = $this->input->post('id_pendaftaran'); 
            $id_reviewer    = $this->input->post('id_reviewer');
      
            $data = array();
            foreach($nilai as $id_kriteria => $id_nilai)
            { 
              array_push($data, array(
                                        
                                        'id_reviewpendaftar'    =>$r->id_reviewpendaftar,
                                        'id_kriteria'           =>$id_kriteria,
                                        'nilai'                 =>$id_nilai

                                      ));
            }
        
        
                $this->mreviewer->insertnilaireviewer($data);
        
            }
          
         redirect('reviewer/peserta/'.$aspek);
	}
    
    
     public function editPenilaian($id, $id_aspek)
	{	
        $data['title']      = 'Dashboard';
        $data['menu']       = $this->mreviewer->aspek()->result();
        $data['penilaian']  = $this->mreviewer->idpenilaian($id)->row();
		$data['nilai']      = $this->mreviewer->idpenilaian($id, $id_aspek)->result();

		$this->load->view('reviewer/editPenilaian', $data);
	}
    
    public function updatePenilaian()
    {
        	$data['id_pendaftaran'] 		= $this->input->post('id_pendaftaran');
			$data['id_aspek'] 		        = $this->input->post('id_aspek');
			$data['id_reviewpendaftar'] 	= $this->input->post('id_reviewpendaftar');
            $nilai                          = $this->input->post('nilai');
        
            $id_aspek           = $this->input->post('id_aspek');
            $id_reviewpendaftar = $this->input->post('id_reviewpendaftar');

			//hapusdulu	
			$this->mreviewer->deletepenilaian($id_reviewpendaftar, $id_aspek);
        
            //insertkan lagi
            $aspek          = $this->input->post('id_aspek');
            $nilai          = $this->input->post('nilai');
            $pendaftar      = $this->input->post('id_pendaftaran'); 
            $id_reviewer    = $this->input->post('id_reviewpendaftar');
      
            $data = array();
            foreach($nilai as $id_kriteria => $id_nilai)
            { 
              array_push($data, array(
                                        
                                        'id_reviewpendaftar'    =>$id_reviewpendaftar,
                                        'id_kriteria'           =>$id_kriteria,
                                        'nilai'                 =>$id_nilai

                                      ));
            }
        
        $this->mreviewer->insertnilaireviewer($data);
        redirect('reviewer/peserta/'.$aspek);

    }

    public function profilematching()
	{     
        $data['title']        = 'Penilaian';
		$data['pendaftar']    = $this->mreviewer->profilematching()->Result();
		$this->load->view('reviewer/profilematching', $data);
		
	}

	public function mfep(){
        $data['title']        = 'Penilaian';
        $data['pendaftar']    = $this->mreviewer->profilematching()->Result();
        $this->load->view('reviewer/multifactor', $data);
    }
    public function detail_mfep(){
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
        $this->load->view('reviewer/MFEP', $data);
    }
          
     public function detail_perhitungan($id_pendaftaran=7)
        {   
            $data['kriteria']['query']         = $this->mreviewer->kriteria()->result();
            $data['kriteria'][6]               = $this->mreviewer->aspekkriteria(6)->result();
            $data['kriteria'][7]               =$this->mreviewer->aspekkriteria(7)->result();
         
         foreach($data['kriteria']['query'] as $row){
             $data['kriteria']['new'][$row->id_kriteria] = $row->nilai_target; 
             $data['kriteria']['pengelompokan'][$row->id_aspek][$row->tipe][$row->id_kriteria] = $row->nama_kriteria; 
             
             
         }
           
            $data['gap']['query']               = $this->mreviewer->gap()->result();
         
          foreach($data['gap']['query'] as $row){
             $data['gap']['new'][$row->selisih] = $row->bobot; 
             
         }
             $data['pendaftar']        = $this->mreviewer->idpendaftar($id_pendaftaran)->row();
             $data['nilai']            = $this->mreviewer->nilai($id_pendaftaran)->result();
             $data['kompetensi']       = $this->mreviewer->nilaikompetensi($id_pendaftaran)->row();
             $data['reviewer']         = $this->mreviewer->jmlreviewer($id_pendaftaran)->row();
             $data['microwawancara']   = $this->mreviewer->microwawancara($id_pendaftaran)->result();
             
            

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
             
             $data['hasil'][$key]['N'] =  ($cf+$sf)/count($data['hasil'][$key]);
             $data['hasil']['jumlah'] += $data['hasil'][$key]['N'];
         }
        
            $data['title'] = 'Penilaian';
            $this->load->view('reviewer/tampilhasil', $data);
        }
    
    
    public function generate_bobot($nilai = 0, $max = 0, $target){
        
        $bobot = ($nilai/$max)*$target;
        
        return round($bobot) == 0 ? 1 : round($bobot);    }
   
	
}
