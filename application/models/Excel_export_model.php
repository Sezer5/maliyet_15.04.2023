<?php
class Excel_export_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                
                
        }
	
	public function fetch_data()
	{
		$query = $this->db->query('SELECT yurticitablo.*, yurtdisitablo.Id as ydisiId , yurtdisitablo.netmaliyet as ynetmaliyet ,yurtdisitablo.maliyetyuzde10 as ym10 , yurtdisitablo.artiyuzde10 as a110
		FROM yurticitablo
		INNER JOIN yurtdisitablo ON yurticitablo.Id=yurtdisitablo.Id WHERE durum!=0');
		
		return $query->result();
		
		
	}
    public function fetch_data_amortisman()
	{
		$query = $this->db->query('SELECT * FROM amortisman WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    
    public function fetch_data_amortisman_arac()
	{
		$query = $this->db->query('SELECT * FROM nakliye_araclar WHERE rapor_id = 0');
		
		return $query->result();
		
		
	}
    public function fetch_data_birimfiyatparametreler()
	{
		$query = $this->db->query('SELECT * FROM birimfiyatparametreler WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_birimfiyatsarflar()
	{
		$query = $this->db->query('SELECT * FROM birimfiyatsarflar WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_stearikasit()
	{
		$query = $this->db->query('SELECT * FROM stearikasit WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_enerji()
	{
		$query = $this->db->query('SELECT * FROM enerji WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_mikronize()
	{
		$query = $this->db->query('SELECT * FROM mikronize WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_mikronizeort()
	{
		$query = $this->db->query('SELECT * FROM mikronizeort WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kapli()
	{
		$query = $this->db->query('SELECT * FROM kapli WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kapliort()
	{
		$query = $this->db->query('SELECT * FROM kapliort WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_maliyetler()
	{
		$query = $this->db->query('SELECT * FROM maliyetler WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_granul()
	{
		$query = $this->db->query('SELECT istasyon as istasyon,mamul as mamul,saatkapasite as saatkapasite,hm as hm,hmyuzde as hmyuzde,uretimiscilik*granulyuzdesi as uretimiscilik,iscilikyuzde as iscilikyuzde,enerji*granulyuzdesi as enerji,enerjiyuzde as enerjiyuzde,amortisman*granulyuzdesi as amortisman,amortismanyuzde as amortismanyuzde,bakim*granulyuzdesi as bakim,bakimyuzde as bakimyuzde,uretimmaliyeti*granulyuzdesi as uretimmaliyeti,uretimmaliyetiyuzde as uretimmaliyetiyuzde,genelyonetim*granulyuzdesi as genelyonetim,genelyonetimyuzde as genelyonetimyuzde,risk*granulyuzdesi as risk,riskyuzde as riskyuzde,netmaliyet*granulyuzdesi as netmaliyet,maliyet*granulyuzdesi as maliyet FROM granul_genel WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_degirmenler()
	{
		$query = $this->db->query('SELECT * FROM degirmenler WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_dikdegirmenler()
	{
		$query = $this->db->query('SELECT * FROM dikdegirmenler WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_sarkac()
	{
		$query = $this->db->query('SELECT * FROM sarkac WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_kpl_alt()
	{
		$query = $this->db->query('SELECT * FROM kaplama WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_granul()
	{
		$query = $this->db->query('SELECT * FROM granul WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_dagilimlardegirmen()
	{
		$query = $this->db->query('SELECT * FROM yd_dagitim WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_dagilimlardikdegirmen()
	{
		$query = $this->db->query('SELECT * FROM dd_dagitim WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kaplidagilim()
	{
		$query = $this->db->query('SELECT * FROM kapli_dagitim WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_dagilimlarsarkac()
	{
		$query = $this->db->query('SELECT * FROM sarkac_dagitim WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_dagilimlargranul()
	{
		$query = $this->db->query('SELECT * FROM granul_dagitim WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_dagilimlargranulekstra()
	{
		$query = $this->db->query('SELECT * FROM granulekstra_dagitim WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_masrafmerkezleri()
	{
		$query = $this->db->query('SELECT * FROM masraf_merkezleri WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_yardimcihizmetler()
	{
		$query = $this->db->query('SELECT * FROM yardimci_hizmetler WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_gerceklesenmaliyetler()
	{
		$query = $this->db->query('SELECT * FROM gerceklesenmaliyetler WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_nakliye()
	{
		$query = $this->db->query('SELECT * FROM nakliyelokasyonlar WHERE rapor_id IS NULL');
		
		return $query->result();
		
		
	}
    public function fetch_data_kirikkale_mamuller()
	{
		$query = $this->db->query('SELECT * FROM kirikkale_dagitim WHERE rapor_id IS NULL AND Id < 7');
		
		return $query->result();
		
		
	}
    public function fetch_data_kirikkale_kapasiteler()
	{
		$query = $this->db->query('SELECT * FROM kirikkale_kapasite WHERE rapor_id IS NULL AND Id < 7');
		
		return $query->result();
		
		
	}

	public function fetch_data_ambalaj_maliyetleri()
	{
		$query = $this->db->query('SELECT * FROM ambalajmaliyeti WHERE rapor_id IS NULL');

		return $query->result();


	}
    
}
