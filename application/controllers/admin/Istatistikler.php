<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Istatistikler extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
     public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                $this->load->library("session");
				$this->load->helper('url');
                $this->load->helper('text');
                $this->load->helper('number');
                $this->load->database(); //Sayfada database'ye erişimi sağlar
				$this->load->model('Database_Model');
                
                $this->load->library('form_validation');
                if (!$this->session->userdata("oturum_data")){
				redirect(base_url().'admin/Login');}
				
        }
	public function index()
	{
       
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/_main_content');
        $this->load->view('admin/_footer');
        
	}
   
    public function istatistiksecimi()
	{   
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/istatistiksecimi');
        $this->load->view('admin/_footer');
        
	}
    public function istasyon_sec()
	{   
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/istatistikler_istasyon_sec');
        $this->load->view('admin/_footer');
        
	}
    
    public function Raporal()
	{   
        
        
        $isim=$this->session->oturum_data["adsoy"];
        
		$data=array(
                      "adsoy"=>$isim,
                      
		);
        $this->db->insert("raporlamalar",$data);
		$raporid = $this->db->insert_id();
		
        
        $sql = "CALL amortismanrapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL gygbrfiyatsarfrapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL zamansaiscilikleristrapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL enerjirapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL kapasitelerrapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL mikronizemikronizeortrapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL kaplikapliortrapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL granul_genelrapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL maliyetlerrapor($raporid)";
        $this->db->query($sql);
        
        
        redirect(base_url().'admin/home');
        
	}
    
    public function Raporalgerceklesen()
	{   
        $isim=$this->session->oturum_data["adsoy"];
		$data=array(
                      "adsoy"=>$isim,
		);
        $this->db->insert("raporlamalargercek",$data);
		$raporid = $this->db->insert_id();
        $sql = "CALL gerceklesenraporkopyalama($raporid)";
        $this->db->query($sql);
        redirect(base_url().'admin/home');
	}
    public function Degirmenistatistik($tur)
	{   
        $istasyon=0;
        if($tur=='d1'){
        $istasyon='Değirmen 1';
        $sorgu=$this->db->query("SELECT d1_iscilik AS iscilik,d1_enerji as enerji,d1_gug AS gug,d1_ok AS ok,rapor_tarih AS rapor_tarih FROM yd_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["degirmen"]=$sorgu->result();
        $sorgu=$this->db->query("SELECT fiyat as fiyat,rapor_tarih as tarih FROM birimfiyatparametreler WHERE adi = 'DEĞİRMEN HM' AND rapor_id IS NOT NULL");
        $data["hm"]=$sorgu->result();
        }elseif($tur=='d2'){
        $istasyon='Değirmen 2';
        $sorgu=$this->db->query("SELECT d2_iscilik AS iscilik,d2_enerji as enerji,d2_gug AS gug,d2_ok AS ok,rapor_tarih AS rapor_tarih FROM yd_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["degirmen"]=$sorgu->result();
        $sorgu=$this->db->query("SELECT fiyat as fiyat,rapor_tarih as tarih FROM birimfiyatparametreler WHERE adi = 'DEĞİRMEN HM' AND rapor_id IS NOT NULL");
        $data["hm"]=$sorgu->result();
        }elseif($tur=='d3'){
        $istasyon='Değirmen 3';
        $sorgu=$this->db->query("SELECT d3_iscilik AS iscilik,d3_enerji as enerji,d3_gug AS gug,d3_ok AS ok,rapor_tarih AS rapor_tarih FROM yd_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["degirmen"]=$sorgu->result();
        $sorgu=$this->db->query("SELECT fiyat as fiyat,rapor_tarih as tarih FROM birimfiyatparametreler WHERE adi = 'DEĞİRMEN HM' AND rapor_id IS NOT NULL");
        $data["hm"]=$sorgu->result();
        }elseif($tur=='d5'){
        $istasyon='Değirmen 5';
        $sorgu=$this->db->query("SELECT d5_iscilik AS iscilik,d5_enerji as enerji,d5_gug AS gug,d5_ok AS ok,rapor_tarih AS rapor_tarih FROM yd_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["degirmen"]=$sorgu->result();
        $sorgu=$this->db->query("SELECT fiyat as fiyat,rapor_tarih as tarih FROM birimfiyatparametreler WHERE adi = 'DEĞİRMEN HM' AND rapor_id IS NOT NULL");
        $data["hm"]=$sorgu->result();
        }elseif($tur=='dik'){
        $istasyon='Dik Değirmen';
        $sorgu=$this->db->query("SELECT dik_iscilik AS iscilik,dik_enerji as enerji,dik_gug AS gug,dik_ok AS ok,rapor_tarih AS rapor_tarih FROM dd_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["degirmen"]=$sorgu->result();
        $sorgu=$this->db->query("SELECT fiyat as fiyat,rapor_tarih as tarih FROM birimfiyatparametreler WHERE adi = 'DİK DEĞİRMEN HM' AND rapor_id IS NOT NULL");
        $data["hm"]=$sorgu->result();
        };
        $data["istasyon"]=$istasyon;
        
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/degirmenistatistikler');
        $this->load->view('admin/_footer');
        
	}
    
    public function Kaplamaistatistik($tur)
	{   
        $istasyon=0;
        if($tur=='k3'){
        $istasyon='Kaplama 3';
        $sorgu=$this->db->query("SELECT k03_iscilik AS iscilik,k03_enerji as enerji,k03_bakim AS bakim,k03_sa AS sa,rapor_tarih AS rapor_tarih FROM kapli_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["kaplama"]=$sorgu->result();
        
        }elseif($tur=='k4'){
        $istasyon='Kaplama 4';
        $sorgu=$this->db->query("SELECT k04_iscilik AS iscilik,k04_enerji as enerji,k04_bakim AS bakim,k04_sa AS sa,rapor_tarih AS rapor_tarih FROM kapli_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["kaplama"]=$sorgu->result();
        
        }elseif($tur=='k6'){
        $istasyon='Kaplama 6';
        $sorgu=$this->db->query("SELECT k06_iscilik AS iscilik,k06_enerji as enerji,k06_bakim AS bakim,k06_sa AS sa,rapor_tarih AS rapor_tarih FROM kapli_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["kaplama"]=$sorgu->result();
        
        };
        
        $data["istasyon"]=$istasyon;
        
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kaplamaistatistikler');
        $this->load->view('admin/_footer');
        
	}
    public function Sarkacistatistik($tur)
	{   
        $istasyon=0;
        if($tur=='tpl5'){
        $istasyon='TPL 5';
        $sorgu=$this->db->query("SELECT tpl5_iscilik AS iscilik,tpl5_enerji as enerji,tpl5_bakim AS bakim,tpl5_ok AS ok,rapor_tarih AS rapor_tarih FROM sarkac_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["sarkac"]=$sorgu->result();
        
        }elseif($tur=='tpl6'){
        $istasyon='TPL 6';
        $sorgu=$this->db->query("SELECT tpl6_iscilik AS iscilik,tpl6_enerji as enerji,tpl6_bakim AS bakim,tpl6_ok AS ok,rapor_tarih AS rapor_tarih FROM sarkac_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["sarkac"]=$sorgu->result();
        
        };
        $sorgu=$this->db->query("SELECT fiyat as fiyat,rapor_tarih as tarih FROM birimfiyatparametreler WHERE adi = 'SARKAÇ HM' AND rapor_id IS NOT NULL");
        $data["hm"]=$sorgu->result();
        $data["istasyon"]=$istasyon;
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/sarkacistatistikler');
        $this->load->view('admin/_footer');
        
	}
    public function Granulistatistik($tur)
	{   
        $istasyon=0;
        if($tur=='bey'){
        $istasyon='Beyaz Taş';
        $sorgu=$this->db->query("SELECT granulekstra_iscilik AS iscilik,granulekstra_enerji as enerji,granulekstra_gug AS gug,granulekstra_hm AS hm,rapor_tarih AS rapor_tarih FROM granulekstra_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["granul"]=$sorgu->result();
        
        }elseif($tur=='moz'){
        $istasyon='Mozaik';
        $sorgu=$this->db->query("SELECT granul_iscilik AS iscilik,granul_enerji as enerji,granul_gug AS gug,granul_hm AS hm,rapor_tarih AS rapor_tarih FROM granul_dagitim WHERE adi LIKE '%Toplam%' AND rapor_id IS NOT NULL");
        $data["granul"]=$sorgu->result();
        
        };
        $data["istasyon"]=$istasyon;
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/granulistatistikler');
        $this->load->view('admin/_footer');
        
	}
    
    public function urun()
	{   
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/urun_sec');
        $this->load->view('admin/_footer');
        
	}
    public function urun_detay()
	{   
        $urun=$this->input->post('urun');
        $uruntipi=$this->input->post('uruntipi');
        $this->db->query("UPDATE mikronizeort set usd=1 WHERE mamul LIKE 'USD%'");
        $this->db->query("UPDATE kapliort set usd=1 WHERE mamul LIKE 'USD%'");
        if($uruntipi==1){
            $sorgu=$this->db->query("SELECT * FROM kapliort WHERE urunkodu = '$urun' AND rapor_id IS NOT NULL AND usd != 1");
            $data["guncel"]=$sorgu->result();
            
            $sorgu=$this->db->query("SELECT * FROM gerceklesendegerlerort WHERE urunkodu = '$urun' AND Id>60");
            $data["gercek"]=$sorgu->result();

            $this->load->view('admin/_header',$data);
            $this->load->view('admin/_sidebar');
            $this->load->view('admin/urun_sec_detay_k');
            $this->load->view('admin/_footer');
        }elseif($uruntipi==2){
            $sorgu=$this->db->query("SELECT * FROM mikronizeort WHERE urunkodu = '$urun' AND rapor_id IS NOT NULL AND usd != 1");
            $data["guncel"]=$sorgu->result();
            
            $sorgu=$this->db->query("SELECT * FROM gerceklesendegerlerort WHERE urunkodu = '$urun' AND Id>60");
            $data["gercek"]=$sorgu->result();

            $this->load->view('admin/_header',$data);
            $this->load->view('admin/_sidebar');
            $this->load->view('admin/urun_sec_detay_m');
            $this->load->view('admin/_footer');
        }
        
        
        
	}
    public function nakliye()
	{   
        $sorgu=$this->db->query("SELECT * FROM birimfiyatnakliye WHERE rapor_id IS NOT NULL");
        $data["degismeyenler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlarrapor GROUP BY sehir,ilce");
        $data["lokasyonlar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliye_araclar WHERE rapor_id IS NOT NULL");
        $data["gerceklesen_nakliye"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliye_gerceklesenrapor");
        $data["gerceklesen_nakliye_raporlar"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/nakliye_istatistik');
        $this->load->view('admin/_footer');
        
	}
    public function lokasyon_detay($sehir,$ilce)
	{   
        
        $sorgu=$this->db->query("SELECT sehir as sehirad FROM nakliyelokasyonlar WHERE sehir_Id='$sehir'");
        $data["sehir"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT ilce as ilcead FROM nakliyelokasyonlar WHERE ilce_Id='$ilce'");
        $data["ilce"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlarrapor WHERE sehir_Id='$sehir' AND ilce_Id='$ilce' AND rapor_id IS NOT NULL");
        $data["lokasyonlar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelastikhesabi WHERE  rapor_id IS NOT NULL");
        $data["lastik"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/lokasyon_istatistik_detay');
        $this->load->view('admin/_footer');
        
	}
    
    public function gerceklesen_nakliye_detay()
	{   
            $plaka=$this->input->post('plaka');
        
            $sorgu=$this->db->query("SELECT * FROM nakliye_araclar WHERE plaka = '$plaka' AND rapor_id > 0");
            $data["gerceklesen_nakliye"]=$sorgu->result();
            
            $data["plaka"]=$plaka;

            $this->load->view('admin/_header',$data);
            $this->load->view('admin/_sidebar');
            $this->load->view('admin/gerceklesen_nakliye_detay');
            $this->load->view('admin/_footer');
        
        
        
        
	}
    
    public function gerceklesen_nakliye_rapor_detay($id)
	{   
        
            $sorgu=$this->db->query("SELECT * FROM nakliye_araclar WHERE rapor_id=$id");
            $data["gerceklesen_nakliye"]=$sorgu->result();
        
            $sorgu=$this->db->query("SELECT * FROM nakliye_gerceklesenrapor WHERE Id=$id");
            $data["rapor"]=$sorgu->result();
            

            $this->load->view('admin/_header',$data);
            $this->load->view('admin/_sidebar');
            $this->load->view('admin/gerceklesen_nakliye_rapor_detay');
            $this->load->view('admin/_footer');
        
        
        
        
	}
    
    public function kimyasal()
	{   
        
            $sorgu=$this->db->query("SELECT * FROM birimfiyatsarflar WHERE rapor_id IS NOT NULL AND adi=' SUSUZ ÖK'");
            $data["ok"]=$sorgu->result();
                
            $sorgu=$this->db->query("SELECT * FROM birimfiyatsarflar WHERE rapor_id IS NOT NULL AND adi='TRİETANOMALİN'");
            $data["trietanomalin"]=$sorgu->result();
        
            $sorgu=$this->db->query("SELECT * FROM birimfiyatsarflar WHERE rapor_id IS NOT NULL AND adi='SARI ASİT'");
            $data["sariasit"]=$sorgu->result();
        
            $sorgu=$this->db->query("SELECT * FROM birimfiyatsarflar WHERE rapor_id IS NOT NULL AND adi='STEARİK ASİT' AND aciklama IS NULL");
            $data["stearikasit"]=$sorgu->result();
        
            $sorgu=$this->db->query("SELECT * FROM birimfiyatparametreler WHERE rapor_id IS NOT NULL AND adi='DOLAR'");
            $data["dolar"]=$sorgu->result();
        
            $sorgu=$this->db->query("SELECT * FROM birimfiyatparametreler WHERE rapor_id IS NOT NULL AND adi='EURO'");
            $data["euro"]=$sorgu->result();
            

            $this->load->view('admin/_header',$data);
            $this->load->view('admin/_sidebar');
            $this->load->view('admin/yapi_kimyasallari');
            $this->load->view('admin/_footer');
        
        
        
        
	}
    
    
    
}
