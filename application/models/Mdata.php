<?php
	class Mdata extends CI_Model {
	function __construct(){
	parent::__construct();
	$this->load->database();

	}
	
        
        function sesiwaktu()
		{
			$this->db->select('*');
			$this->db->from('sesi');
			$this->db->where('buka', 'Y');
			return $this->db->get();
		}
        
        function jmlall()
        {
           $query = $this->db->get('pendaftaran'); 
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }
        
        function jmllolos()
        {
            $this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('status', 'Lolos');
            
           $query = $this->db->get(); 
            if($query->num_rows()>0)
            {
              return $query->num_rows();
            }
            else
            {
              return 0;
            }
        }
        
		//Aspek
        function aspek()
		{
			$this->db->select('*');
			$this->db->from('aspek');
			$this->db->order_by('id_aspek','asc');
			return $this->db->get();
		}

        
        function insertaspek($data)
		{
			$this->db->insert('aspek', $data);
		}
		
		function idaspek($id)
		{
			$this->db->select('*');
			$this->db->from('aspek');
			$this->db->where('id_aspek', $id);
			return $this->db->get();
		}
		
        function updateAspek($id, $data)
		{
			$this->db->where('id_aspek', $id);
			$this->db->update('aspek', $data);
		}
        
        function hapusAspek($id)
		{
			$row = $this->db->where('id_aspek',$id);
			$this->db->delete('aspek');
		}
        
        //Kriteria
        function kriteria()
		{
			$this->db->select('*');
			$this->db->from('kriteria');
            $this->db->join('aspek','aspek.id_aspek=kriteria.id_aspek');
			$this->db->order_by('id_kriteria','asc');
			return $this->db->get();
		}

        
        function insertKriteria($data)
		{
			$this->db->insert('kriteria', $data);
		}
		
		function idKriteria($id)
		{
			$this->db->select('*');
			$this->db->from('kriteria');
            $this->db->join('aspek','aspek.id_aspek=kriteria.id_aspek');
			$this->db->where('id_kriteria', $id);
			return $this->db->get();
		}
		
        function updateKriteria($id, $data)
		{
			$this->db->where('id_kriteria', $id);
			$this->db->update('kriteria', $data);
		}
        
        function hapusKriteria($id)
		{
			$row = $this->db->where('id_kriteria',$id);
			$this->db->delete('kriteria');
		}
        
        
        //Makul
        function makul()
		{
			$this->db->select('*');
			$this->db->from('makul');
            $this->db->join('kriteria','kriteria.id_kriteria=makul.id_kriteria');
			$this->db->order_by('id_makul','asc');
			return $this->db->get();
		}

        
        function insertMakul($data)
		{
			$this->db->insert('makul', $data);
		}
		
		function idMakul($id)
		{
			$this->db->select('*');
			$this->db->from('makul');
            $this->db->join('kriteria','kriteria.id_kriteria=makul.id_kriteria');
			$this->db->where('id_makul', $id);
			return $this->db->get();
		}
		
           function updateMakul($id, $data)
		{
			$this->db->where('id_makul', $id);
			$this->db->update('makul', $data);
		}
        
        function hapusMakul($id)
		{
			$row = $this->db->where('id_makul',$id);
			$this->db->delete('makul');
		}
        
        
        //GAP
        function gap()
		{
			$this->db->select('*');
			$this->db->from('gap');
            $this->db->order_by('id_gap','asc');
			return $this->db->get();
		}

        
        function insertGap($data)
		{
			$this->db->insert('gap', $data);
		}
		
		function idGap($id)
		{
			$this->db->select('*');
			$this->db->from('gap');
            $this->db->where('id_gap', $id);
			return $this->db->get();
		}
		
        function updateGap($id, $data)
		{
			$this->db->where('id_gap', $id);
			$this->db->update('gap', $data);
		}
        
        function hapusGap($id)
		{
			$row = $this->db->where('id_gap',$id);
			$this->db->delete('gap');
		}
        
        
        //MASTER NILAI
        function masternilai()
		{
			$this->db->select('*');
			$this->db->from('master_nilai');
            $this->db->order_by('id_masternilai','asc');
			return $this->db->get();
		}

        
        function insertMasternilai($data)
		{
			$this->db->insert('master_nilai', $data);
		}
		
		function idMasternilai($id)
		{
			$this->db->select('*');
			$this->db->from('master_nilai');
            $this->db->where('id_masternilai', $id);
			return $this->db->get();
		}
		
        function updateMasternilai($id, $data)
		{
			$this->db->where('id_masternilai', $id);
			$this->db->update('master_nilai', $data);
		}
        
        function hapusMasternilai($id)
		{
			$row = $this->db->where('id_masternilai',$id);
			$this->db->delete('master_nilai');
		}
        
        
        //REVIEWER
        function reviewer()
		{
			$this->db->select('*');
			$this->db->from('reviewer');
            $this->db->order_by('id_reviewer','asc');
			return $this->db->get();
		}

        
        function insertReviewer($data)
		{
			$this->db->insert('reviewer', $data);
		}
		
		function idReviewer($id)
		{
			$this->db->select('*');
			$this->db->from('reviewer');
            $this->db->where('id_reviewer', $id);
			return $this->db->get();
		}
		
        function updateReviewer($id, $data)
		{
			$this->db->where('id_reviewer', $id);
			$this->db->update('reviewer', $data);
		}
        
        function hapusReviewer($id)
		{
			$row = $this->db->where('id_reviewer',$id);
			$this->db->delete('reviewer');
		}
        
		//SESI
        function sesi()
		{
			$this->db->select('*');
			$this->db->from('sesi');
            $this->db->order_by('id_sesi','asc');
			return $this->db->get();
		}

        
        function insertSesi($data)
		{
			$this->db->insert('sesi', $data);
		}
		
		function idSesi($id)
		{
			$this->db->select('*');
			$this->db->from('sesi');
            $this->db->where('id_sesi', $id);
			return $this->db->get();
		}
		
        function updateSesi($id, $data)
		{
			$this->db->where('id_sesi', $id);
			$this->db->update('sesi', $data);
		}
        
        function hapusSesi($id)
		{
			$row = $this->db->where('id_sesi',$id);
			$this->db->delete('sesi');
		}
        
       

		//ADMIN
		
		function profadmin()
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->order_by('id_admin','desc');
			return $this->db->get();
		}

		function idadmin($id)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('id_admin', $id);
			return $this->db->get();
		}
		
		function updateadmin($id, $data)
		{
			$this->db->where('id_admin', $id);
			$this->db->update('admin', $data);
		}
		 
		 
	//user
	
		//DAFTAR
		        
        function insertdaftar($data)
		{
			$this->db->insert('pendaftaran', $data);
		}
	
        function idpendaftar($id)
		{
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('id_pendaftaran', $id);
			return $this->db->get();
		}
        
		function updatedaftar($id, $data)
		{
			$this->db->where('id_pendaftaran', $id);
			$this->db->update('pendaftaran', $data);
		}
        
              
         function editnilai($id)
		{
			$query=$this->db->query("SELECT * FROM `nilai_kuliah` join master_nilai on nilai_kuliah.id_masternilai=master_nilai.id_masternilai join makul on nilai_kuliah.id_makul = makul.id_makul where id_pendaftaran='".$id."'");
             return $query;
		}
        
        function hapusnilai($id)
		{
			$row = $this->db->where('id_pendaftaran',$id);
			$this->db->delete('nilai_kuliah');
		}
        
        //NILAI KOMPETENSI
        function kompetensi()
        {
            $this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->join('kompetensi', 'kompetensi.id_pendaftaran=pendaftaran.id_pendaftaran');
            $this->db->join('sesi','pendaftaran.id_sesi=sesi.id_sesi');
            $this->db->where('sesi.buka','Y');
			return $this->db->get();
        }
        function insertkompetensi($data)
		{
			$this->db->insert_batch('kompetensi', $data);
		}
        
		 //NILAI KULIAH
		function idnilaikuliah($id)
		{
			$this->db->select('*');
			$this->db->from('nilai_kuliah');
			 $this->db->join('makul','makul.id_makul=nilai_kuliah.id_makul');
			 $this->db->join('master_nilai','master_nilai.id_masternilai=nilai_kuliah.id_masternilai');
			$this->db->where('id_pendaftaran', $id);
			$this->db->order_by('makul.id_makul','asc');
			return $this->db->get();
		}
		
       
        
        
        function insertmasternilaikuliah($data)
        {
            $this->db->insert_batch('nilai_kuliah',$data);
        }
		
       
		//DAFTAR
		function pendaftar()
		{
			$this->db->select('pendaftaran.*');
			$this->db->from('pendaftaran');
			$this->db->join('sesi','pendaftaran.id_sesi=sesi.id_sesi');
			$this->db->where('sesi.buka','Y');
			$this->db->order_by('id_pendaftaran','desc');
			return $this->db->get();
		}
        
        function pendaftarlolos()
		{
			$this->db->select('*');
			$this->db->from('pendaftaran');
            $this->db->join('sesi','pendaftaran.id_sesi=sesi.id_sesi');
            $this->db->where('sesi.buka','Y');
			$this->db->where('status', 'Lolos');
			$this->db->order_by('id_pendaftaran','desc');
			return $this->db->get();
		}
        
        function nilai($id){
            $query=$this->db->query("SELECT makul.id_kriteria, SUM(master_nilai.bobot_nilai) as nilai, COUNT(makul.id_kriteria) jml FROM nilai_kuliah JOIN master_nilai ON nilai_kuliah.id_masternilai=master_nilai.id_masternilai JOIN makul on nilai_kuliah.id_makul=makul.id_makul where nilai_kuliah.id_pendaftaran=$id GROUP BY makul.id_kriteria");
            return $query;
        }
        
        function nilaikompetensi($id)
        {
            $query=$this->db->query("Select * from kompetensi where id_pendaftaran=$id");
            return $query;
        }
        
        function jmlreviewer($id)
        {
            $query=$this->db->query("SELECT COUNT(id_reviewpendaftar) as jml FROM review_pendaftar WHERE id_pendaftaran=$id");
            return $query;
        }
        
        function microwawancara($id)
        {
            $query=$this->db->query("SELECT nilai_reviewer.id_kriteria, kriteria.id_aspek, SUM(nilai_reviewer.nilai) nilai FROM review_pendaftar JOIN nilai_reviewer on nilai_reviewer.id_reviewpendaftar = review_pendaftar.id_reviewpendaftar
            JOIN kriteria ON kriteria.id_kriteria = nilai_reviewer.id_kriteria where review_pendaftar.id_pendaftaran=$id GROUP BY nilai_reviewer.id_kriteria");
            return $query;
            }
        
        function aspekkriteria($id)
        {
            $this->db->where('id_aspek', $id);
			return $this->db->get('kriteria');
        }
        
        function updatehasil($data, $id)
        {
            $this->db->where('id_pendaftaran', $id);
			$this->db->update('pendaftaran', $data);
        }
        
        function profilematching()
        {
             $query=$this->db->query("SELECT * FROM pendaftaran JOIN sesi ON pendaftaran.id_sesi = sesi.id_sesi WHERE sesi.buka='Y' AND status='Lolos' AND status_generate='Sudah' order by total_pf desc");
            
			return $query;
        }
        function mfep(){
	        $sql = "SELECT * FROM pendaftaran JOIN sesi ON pendaftaran.id_sesi = sesi.id_sesi WHERE sesi.buka='Y' AND status='Lolos' AND status_generate='Sudah' order by total_pf desc";
	        return $this->db->query($sql);
        }
        
        function aktifsesi()
        {
             $query=$this->db->query("SELECT * FROM sesi WHERE buka='Y'");
            return $query;
        }
}
