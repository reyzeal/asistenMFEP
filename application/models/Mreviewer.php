<?php
	class Mreviewer extends CI_Model {
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
        
        function pendaftaran()
		{
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->order_by('id_pendaftaran','desc');
			return $this->db->get();
		}
        
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
		
        function dataPeserta()
		{
			$this->db->select('*');
			$this->db->from('pendaftaran');
            $this->db->where('status', 'Lolos');
			$this->db->order_by('nama_lengkap','asc');
			return $this->db->get();
		}
        
        function dataPeserta_rev($id_rev = 0){
            
          $query =   $this->db->query("SELECT pendaftaran.*, 0 as microteaching, 0 as wawancara
          FROM pendaftaran WHERE pendaftaran.status='Lolos' AND pendaftaran.id_pendaftaran NOT IN(
        SELECT pendaftaran.id_pendaftaran FROM pendaftaran LEFT JOIN review_pendaftar ON pendaftaran.id_pendaftaran = review_pendaftar.id_pendaftaran WHERE pendaftaran.status='Lolos' AND review_pendaftar.id_reviewer ='".$id_rev."' GROUP BY pendaftaran.id_pendaftaran) UNION SELECT pendaftaran.*,COALESCE((SELECT COUNT(r.id_reviewpendaftar) as s FROM  review_pendaftar r LEFT JOIN nilai_reviewer ON nilai_reviewer.id_reviewpendaftar = r.id_reviewpendaftar LEFT JOIN kriteria ON kriteria.id_kriteria = nilai_reviewer.id_kriteria  WHERE  kriteria.id_aspek = 6  AND review_pendaftar.id_reviewpendaftar = r.id_reviewpendaftar GROUP BY r.id_reviewpendaftar),0) as microteaching,COALESCE((SELECT COUNT(r.id_reviewpendaftar) as s FROM review_pendaftar r LEFT JOIN nilai_reviewer ON nilai_reviewer.id_reviewpendaftar = r.id_reviewpendaftar LEFT JOIN kriteria ON kriteria.id_kriteria = nilai_reviewer.id_kriteria WHERE kriteria.id_aspek = 7 AND review_pendaftar.id_reviewpendaftar = r.id_reviewpendaftar GROUP BY r.id_reviewpendaftar),0) as wawancara FROM pendaftaran LEFT JOIN review_pendaftar ON pendaftaran.id_pendaftaran = review_pendaftar.id_pendaftaran WHERE pendaftaran.status='Lolos' AND review_pendaftar.id_reviewer ='".$id_rev."' GROUP BY pendaftaran.id_pendaftaran");
            return $query;
                
        }
		 
        function idPeserta($id_pendaftaran)
		{
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('id_pendaftaran', $id_pendaftaran);
			return $this->db->get();
		}
        
         function aspek()
		{
			$this->db->select('*');
			$this->db->from('aspek');
			$this->db->order_by('id_aspek','asc');
			return $this->db->get();
		}

        function idaspek($id_aspek)
		{
			$this->db->select('*');
			$this->db->from('aspek');
			$this->db->where('id_aspek', $id_aspek);
			return $this->db->get();
		}
        
        function profilematching()
        {
             $query=$this->db->query("SELECT * FROM pendaftaran JOIN sesi ON pendaftaran.id_sesi = sesi.id_sesi WHERE sesi.buka='Y' AND status='Lolos' AND status_generate='Sudah' order by total_pf desc");
            
			return $query;
        }
        function mfep(){
            $query=$this->db->query("SELECT * FROM pendaftaran JOIN sesi ON pendaftaran.id_sesi = sesi.id_sesi WHERE sesi.buka='Y' AND status='Lolos' AND status_generate='Sudah' order by total_pf desc");

            return $query;
        }
        
        function kriterianilai($id_aspek)
        {
            $query = $this->db->query("select * from kriteria where id_aspek='".$id_aspek."'");
            return $query;
        }
        
         function kriteria()
		{
			$this->db->select('*');
			$this->db->from('kriteria');
            $this->db->join('aspek','aspek.id_aspek=kriteria.id_aspek');
			$this->db->order_by('id_kriteria','asc');
			return $this->db->get();
		}
        
        function insertreviewpendaftar($data)
		{
			$this->db->insert('review_pendaftar', $data);
		}
        
         function insertnilaireviewer($data)
		{
			$this->db->insert_batch('nilai_reviewer', $data);
		}
        
        function idpenilaian($id_pendaftaran, $id_aspek= 0)
        {
            if($id_aspek == 0){
            $query =   $this->db->query("SELECT * FROM review_pendaftar JOIN nilai_reviewer ON review_pendaftar.id_reviewpendaftar=nilai_reviewer.id_reviewpendaftar JOIN kriteria on nilai_reviewer.id_kriteria=kriteria.id_kriteria JOIN pendaftaran on review_pendaftar.id_pendaftaran=pendaftaran.id_pendaftaran  WHERE review_pendaftar.id_pendaftaran='".$id_pendaftaran."'");
                
            }else{
            $query =   $this->db->query("SELECT * FROM review_pendaftar JOIN nilai_reviewer ON review_pendaftar.id_reviewpendaftar=nilai_reviewer.id_reviewpendaftar JOIN kriteria on nilai_reviewer.id_kriteria=kriteria.id_kriteria JOIN pendaftaran on review_pendaftar.id_pendaftaran=pendaftaran.id_pendaftaran  WHERE review_pendaftar.id_pendaftaran='".$id_pendaftaran."' AND kriteria.id_aspek='".$id_aspek."'");
                
            }
           
            return $query;
                
        }
        
        function deletepenilaian($id_revpendaftaran, $id_aspek)
        {
            $query= $this->db->query("DELETE nilai_reviewer FROM nilai_reviewer INNER JOIN kriteria ON nilai_reviewer.id_kriteria=kriteria.id_kriteria WHERE nilai_reviewer.id_reviewpendaftar='".$id_revpendaftaran."' AND kriteria.id_aspek='".$id_aspek."'");
            return $query;
        }
        
        function generate()
        {
            $query=$this->db->query("SELECT pendaftaran.id_pendaftaran, pendaftaran.ipk, pendaftaran.sertifikasi, nilai_kuliah.id_makul, nilai_kuliah.id_masternilai, makul.*, master_nilai.* FROM pendaftaran INNER JOIN nilai_kuliah on pendaftaran.id_pendaftaran=nilai_kuliah.id_pendaftaran JOIN makul on nilai_kuliah.id_makul=makul.id_makul JOIN master_nilai ON nilai_kuliah.id_masternilai=master_nilai.id_masternilai WHERE pendaftaran.status='Lolos' Group by pendaftaran.id_pendaftaran ");
            return $query;
        }
        
    
       
		//DAFTAR
		function pendaftar()
		{
			$this->db->select('*');
			$this->db->from('pendaftaran');
            $this->db->join('sesi','pendaftaran.id_sesi=sesi.id_sesi');
            $this->db->where('sesi.buka','Y');
			$this->db->where('status', 'Lolos');
			$this->db->order_by('id_pendaftaran','desc');
			return $this->db->get();
		}
        
        function idpendaftar($id)
		{
			$this->db->select('*');
			$this->db->from('pendaftaran');
			$this->db->where('id_pendaftaran', $id);
			return $this->db->get();
		}
        
         function gap()
		{
			$this->db->select('*');
			$this->db->from('gap');
            $this->db->order_by('id_gap','asc');
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
        
       
        
		 
}
