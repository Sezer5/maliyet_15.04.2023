<?php
class Database_Model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
	
	public function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
        return true;
    }
    public function login($email,$password)
	{
        $this->load->database('db2',TRUE);
		$this->db->select('seg.[MUSTERI ADI] AS musteri,seg.[MUSTERI KODU] AS musteriid,seg.SEKTÖR AS sektor,seg.[TANIMLI SATISCI] AS satisci,seg.[YURTICI/YURTDISI] AS piyasa, mam.UST_SINIF_ADI AS anasinif,seg.MIKTAR AS tonaj ');
        $this->db->from('Z_SEGMENTASYON');
       $this->db->where('[MUSTERI ADI]',$email);
        $this->db->where('MIKTAR',$password);
        
       $this->db->get();
        if($query->num_rows() == 1){
            return $query->result();
        } else {
            return false;
        }
		
		
	}
    function get_urun($id){
		$query = $this->db->query('SELECT urunler.*, kategoriler.adi as katadi
		FROM urunler
		INNER JOIN kategoriler ON urunler.kategori=kategoriler.Id
		WHERE urunler.Id='.$id);
		
		return $query->result();
	}
    function sepet_urunler($id)
		{
			$query = $this->db->query('SELECT sepet.*,urunler.resim as urunresim, urunler.adi as urunadi, urunler.sfiyat as satfiyat
			FROM sepet
			LEFT JOIN urunler ON urunler.Id=sepet.urun_id
			WHERE sepet.musteri_id='.$id);
			return $query->result();
		}
    
		public function update_data($tablo,$data,$id)
	{
		$this->db->where('Id',$id);
		$this->db->update($tablo,$data);
		return true;
		
	}
    
    public function update_data_all($tablo,$data)
	{
		$this->db->update($tablo,$data);
		return true;
		
	}
    public function update_data_all_beyaz($tablo,$data)
	{
        $this->db->where('Id<','20');
		$this->db->update($tablo,$data);
		return true;
		
	}
    public function update_data_seperatorzamanlari($tablo,$data)
	{
        $this->db->where('Id>','120');
		$this->db->update($tablo,$data);
		return true;
		
	}
    
    public function update_data_all_mozaik($tablo,$data)
	{
        $this->db->where('Id>','20');
		$this->db->update($tablo,$data);
		return true;
		
	}
    
    public function update_data_degirmen($tablo,$data,$id)
	{
		$this->db->where('adi',$id);
		$this->db->update($tablo,$data);
		return true;
		
	}
    
    public function insert_sikayet($data)
    {
         $this->db->insert('sikayettr',$data);
    }
	
    function display_records()
	{
		$query=$this->db->query("select * from chat");
		return $query->result();
	}
    public function update_sysggeor($tablo,$data,$id)
	{
		$this->db->where("mamul",$id);
		$this->db->update($tablo,$data);
		return true;
		
	}
    public function update_sysggeor2($tablo,$data,$id)
	{
		$this->db->where("adi",$id);
		$this->db->update($tablo,$data);
		return true;
		
	}
    public function update_data_all_otomatik_paketleme($tablo,$data)
	{
        $this->db->where('Id<','9');
		$this->db->update($tablo,$data);
		return true;
		
	}
    public function update_data_all_bigbag_paketleme($tablo,$data)
	{
        $this->db->where('Id<','10');
		$this->db->update($tablo,$data);
		return true;
		
	}
    
    public function update_data_all_granulmanuelpaketleme_paketleme($tablo,$data)
	{
        $this->db->where('Id<','10');
		$this->db->update($tablo,$data);
		return true;
		
	}
    
    public function update_data_all_granulbigbagpaketleme_paketleme($tablo,$data)
	{
        $this->db->where('Id<','10');
		$this->db->update($tablo,$data);
		return true;
		
	}
    public function update_data_all_stoklamamaliyeti($tablo,$data)
	{
        $this->db->where('Id<','10');
		$this->db->update($tablo,$data);
		return true;
		
	}
    
    public function update_data_all_sevkiyatmaliyeti($tablo,$data)
	{
        $this->db->where('Id<','10');
		$this->db->update($tablo,$data);
		return true;
		
	}
    
	
	
}
