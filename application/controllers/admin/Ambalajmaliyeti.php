<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambalajmaliyeti extends CI_Controller {

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
                $this->load->model('Excel_export_model');
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
    
    public function otomatikpaketleme()
	{
        $sql = "CALL otomatikpaketleme()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM otomatikpaketleme WHERE Id<8");
        $data["otomatikpaketleme"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM otomatikpaketleme WHERE Id=8");
        $data["tonaj"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/otomatikpaketleme');
        $this->load->view('admin/_footer');
        
	}
    public function otomatik_paketleme_tonaj_guncelleme()
	{
        $tablo="otomatikpaketleme";
        $tondegeri=$this->input->post('tondegeri');
        $data=array(
            'tondegeri'=>$tondegeri,
        );
            
            $this->Database_Model->update_data_all_otomatik_paketleme($tablo,$data);
             redirect(base_url()."admin/ambalajmaliyeti/otomatikpaketleme");
    }
    
    public function otomatik_paketleme_guncelleme($Id)
	{
        $tablo="otomatikpaketleme";
        $sayi=$this->input->post('sayi');
        $maliyet=$this->input->post('maliyet');
        $data=array(
            'sayi'=>$sayi,
            'maliyet'=>$maliyet,
        );
            
            $this->Database_Model->update_data($tablo,$data,$Id);
             redirect(base_url()."admin/ambalajmaliyeti/otomatikpaketleme");
    }
    
    public function bigbagpaketleme()
	{
        $sql = "CALL bigbagpaketleme()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM bigbagpaketleme WHERE Id<9");
        $data["bigbagpaketleme"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM bigbagpaketleme WHERE Id=9");
        $data["tonaj"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/bigbagpaketleme');
        $this->load->view('admin/_footer');
        
	}
    
    public function bigbag_paketleme_tonaj_guncelleme()
	{
        $tablo="bigbagpaketleme";
        $tondegeri=$this->input->post('tondegeri');
        $data=array(
            'tondegeri'=>$tondegeri,
        );
            
            $this->Database_Model->update_data_all_bigbag_paketleme($tablo,$data);
             redirect(base_url()."admin/ambalajmaliyeti/bigbagpaketleme");
    }
    
    public function bigbag_paketleme_guncelleme($Id)
	{
        $tablo="bigbagpaketleme";
        $sayi=$this->input->post('sayi');
        $maliyet=$this->input->post('maliyet');
        $data=array(
            'sayi'=>$sayi,
            'maliyet'=>$maliyet,
        );
            
            $this->Database_Model->update_data($tablo,$data,$Id);
             redirect(base_url()."admin/ambalajmaliyeti/bigbagpaketleme");
    }
    
    public function granulmanuelpaketleme()
	{
        $sql = "CALL granulmanuelpaketleme()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM granulmanuelpaketleme WHERE Id<9");
        $data["granulmanuelpaketleme"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granulmanuelpaketleme WHERE Id=9");
        $data["tonaj"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/granulmanuelpaketleme');
        $this->load->view('admin/_footer');
        
	}
    
    public function granulmanuelpaketleme_paketleme_tonaj_guncelleme()
	{
        $tablo="granulmanuelpaketleme";
        $tondegeri=$this->input->post('tondegeri');
        $data=array(
            'tondegeri'=>$tondegeri,
        );
            
            $this->Database_Model->update_data_all_granulmanuelpaketleme_paketleme($tablo,$data);
             redirect(base_url()."admin/ambalajmaliyeti/granulmanuelpaketleme");
    }
    
    public function granulmanuelpaketleme_paketleme_guncelleme($Id)
	{
        $tablo="granulmanuelpaketleme";
        $sayi=$this->input->post('sayi');
        $maliyet=$this->input->post('maliyet');
        $data=array(
            'sayi'=>$sayi,
            'maliyet'=>$maliyet,
        );
            
            $this->Database_Model->update_data($tablo,$data,$Id);
             redirect(base_url()."admin/ambalajmaliyeti/granulmanuelpaketleme");
    }
    
    public function granulbigbagpaketleme()
	{
        $sql = "CALL granulbigbagpaketleme()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM granulbigbagpaketleme WHERE Id<9");
        $data["granulbigbagpaketleme"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granulbigbagpaketleme WHERE Id=9");
        $data["tonaj"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/granulbigbagpaketleme');
        $this->load->view('admin/_footer');
        
	}
    
    public function granulbigbagpaketleme_paketleme_tonaj_guncelleme()
	{
        $tablo="granulbigbagpaketleme";
        $tondegeri=$this->input->post('tondegeri');
        $data=array(
            'tondegeri'=>$tondegeri,
        );
            
            $this->Database_Model->update_data_all_granulbigbagpaketleme_paketleme($tablo,$data);
             redirect(base_url()."admin/ambalajmaliyeti/granulbigbagpaketleme");
    }
    
    public function granulbigbagpaketleme_paketleme_guncelleme($Id)
	{
        $tablo="granulbigbagpaketleme";
        $sayi=$this->input->post('sayi');
        $maliyet=$this->input->post('maliyet');
        $data=array(
            'sayi'=>$sayi,
            'maliyet'=>$maliyet,
        );
            
            $this->Database_Model->update_data($tablo,$data,$Id);
             redirect(base_url()."admin/ambalajmaliyeti/granulbigbagpaketleme");
    }
    
    public function stoklamamaliyeti()
	{
        $sql = "CALL stoklamamaliyeti()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM stoklamamaliyeti WHERE Id<9");
        $data["stoklamamaliyeti"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM stoklamamaliyeti WHERE Id=9");
        $data["tonaj"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/stoklamamaliyeti');
        $this->load->view('admin/_footer');
        
	}
    
    public function stoklamamaliyeti_guncelleme($Id)
	{
        $tablo="stoklamamaliyeti";
        $sayi=$this->input->post('sayi');
        $maliyet=$this->input->post('maliyet');
        $data=array(
            'sayi'=>$sayi,
            'maliyet'=>$maliyet,
        );
            
            $this->Database_Model->update_data($tablo,$data,$Id);
             redirect(base_url()."admin/ambalajmaliyeti/stoklamamaliyeti");
    }
    
    public function stoklamamaliyeti_tonaj_guncelleme()
	{
        $tablo="stoklamamaliyeti";
        $tondegeri=$this->input->post('tondegeri');
        $data=array(
            'tondegeri'=>$tondegeri,
        );
            
            $this->Database_Model->update_data_all_stoklamamaliyeti($tablo,$data);
             redirect(base_url()."admin/ambalajmaliyeti/stoklamamaliyeti");
    }
    
    public function sevkiyatmaliyeti()
	{
        $sql = "CALL sevkiyatmaliyeti()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM sevkiyatmaliyeti WHERE Id<8");
        $data["sevkiyatmaliyeti"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM sevkiyatmaliyeti WHERE Id=8");
        $data["tonaj"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM sevkiyatmaliyeti WHERE Id=9");
        $data["calismasaati"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/sevkiyatmaliyeti');
        $this->load->view('admin/_footer');
        
	}
    
    public function sevkiyat_tonaj_guncelleme()
	{
        $tablo="sevkiyatmaliyeti";
        $tondegeri=$this->input->post('tondegeri');
        $data=array(
            'tondegeri'=>$tondegeri,
        );
            $this->Database_Model->update_data_all_sevkiyatmaliyeti($tablo,$data);
            redirect(base_url()."admin/ambalajmaliyeti/sevkiyatmaliyeti");
    }
    
    public function sevkiyat_calismasaati_guncelleme()
	{
        $tablo="sevkiyatmaliyeti";
        $sayi=$this->input->post('sayi');
        $Id=$this->input->post('Id');
        $data=array(
            'sayi'=>$sayi,
        );
            $this->Database_Model->update_data($tablo,$data,$Id);
             redirect(base_url()."admin/ambalajmaliyeti/sevkiyatmaliyeti");
    }
    
    public function sevkiyatmaliyeti_guncelleme($Id)
	{
        $tablo="sevkiyatmaliyeti";
        $sayi=$this->input->post('sayi');
        $maliyet=$this->input->post('maliyet');
        $data=array(
            'sayi'=>$sayi,
            'maliyet'=>$maliyet,
        );
            $this->Database_Model->update_data($tablo,$data,$Id);
            redirect(base_url()."admin/ambalajmaliyeti/sevkiyatmaliyeti");
    }
    
    public function ambalajmaliyeti()
	{
        $sql = "CALL ambalajmaliyeti()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM ambalajmaliyeti WHERE Id<13");
        $data["ambalajmaliyeti"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyatparametreler WHERE Id=56");
        $data["dolar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyatparametreler WHERE Id=57");
        $data["euro"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/ambalajmaliyeti');
        $this->load->view('admin/_footer');
        
	}
    
    public function ambalajmaliyeti_guncelleme($Id)
	{
        $tablo="ambalajmaliyeti";
        $fiyat_tl=$this->input->post('fiyat_tl');
        $fiyat_usd=$this->input->post('fiyat_usd');
        $fiyat_euro=$this->input->post('fiyat_euro');
        $data=array(
            'fiyat_tl'=>$fiyat_tl,
            'fiyat_usd'=>$fiyat_usd,
            'fiyat_euro'=>$fiyat_euro,
        );
            $this->Database_Model->update_data($tablo,$data,$Id);
            redirect(base_url()."admin/ambalajmaliyeti/ambalajmaliyeti");
    }
   
    
    
    
}
