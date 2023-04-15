<?php
class Excel_export_eski_maliyetler extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                
                
        }
	
	
    public function fetch_data_amortisman($id)
	{
		$query = $this->db->query('SELECT * FROM amortisman WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_birimfiyatparametreler($id)
	{
		$query = $this->db->query('SELECT * FROM birimfiyatparametreler WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_stearikasit($id)
	{
		$query = $this->db->query('SELECT * FROM stearikasit WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_enerji($id)
	{
		$query = $this->db->query('SELECT * FROM enerji WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_mikronize($id)
	{
		$query = $this->db->query('SELECT * FROM mikronize WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_mikronizeort($id)
	{
		$query = $this->db->query('SELECT * FROM mikronizeort WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_kapli($id)
	{
		$query = $this->db->query('SELECT * FROM kapli WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_kapliort($id)
	{
		$query = $this->db->query('SELECT * FROM kapliort WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_maliyetler($id)
	{
		$query = $this->db->query('SELECT * FROM maliyetler WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_granul($id)
	{
		$query = $this->db->query('SELECT * FROM granul_genel WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_degirmenler($id)
	{
		$query = $this->db->query('SELECT * FROM degirmenler WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_dikdegirmenler($id)
	{
		$query = $this->db->query('SELECT * FROM dikdegirmenler WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_sarkac($id)
	{
		$query = $this->db->query('SELECT * FROM sarkac WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_kpl_alt($id)
	{
		$query = $this->db->query('SELECT * FROM kaplama WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
    public function fetch_data_kapasite_granul($id)
	{
		$query = $this->db->query('SELECT * FROM granul WHERE rapor_id='.$id);
		
		return $query->result();
		
		
	}
}
