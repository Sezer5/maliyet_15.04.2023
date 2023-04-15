<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raporlamalar extends CI_Controller {

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
   
    public function Raporlamalar()
	{   
        
        
		
        
        $sorgu=$this->db->query("SELECT * FROM raporlamalar GROUP BY tarih");
        $data["rapor"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/raporlamalar');
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
		
        $this->db->query("UPDATE mikronizeort set usd=1 WHERE mamul LIKE 'USD%'");
        $this->db->query("UPDATE kapliort set usd=1 WHERE mamul LIKE 'USD%'");
        
        $sql = "CALL amortismanrapor($raporid)"; // EKLENDİ
        $this->db->query($sql);
        
        $sql = "CALL gygbrfiyatsarfrapor($raporid)"; // EKLENDİ
        $this->db->query($sql);
        
        $sql = "CALL zamansaiscilikleristrapor($raporid)"; // EKLENDİ
        $this->db->query($sql);
        
        $sql = "CALL enerjirapor($raporid)"; // EKLENDİ
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
        
        $sql = "CALL nakliyemaliyetirapor($raporid)";
        $this->db->query($sql);
        
        $sql = "CALL kirikkaleguncelrapor($raporid)";
        $this->db->query($sql);
        
        
        redirect(base_url().'admin/home');
        
	}
    
    public function Raporalgerceklesen()
	{   
        
        $ay=0;
        $ilk=0;
        $son=0;
        $sorgu=$this->db->query("SELECT * FROM aydegerigerceklesen WHERE Id < 2");
        $data["aydegeri"]=$sorgu->result();
        
        foreach($data['aydegeri'] as $rs){
            $ay=$rs->aydegeri;
        };
        
        date_default_timezone_set('Europe/Istanbul');
        $date2 = date('Y-m-d'); 
        $son = date( "Y-m", strtotime( $date2 . "-$ay month"));
        
        $isim=$this->session->oturum_data["adsoy"];
        
		$data=array(
                      "adsoy"=>$isim,
                      "hesaplanan_tarih"=>$son,
                      
		);
        $this->db->insert("raporlamalargercek",$data);
		$raporid = $this->db->insert_id();
		
        
        $sql = "CALL gerceklesenraporkopyalama($raporid)";
        $this->db->query($sql);
        
        
        
        
        redirect(base_url().'admin/home');
        
	}
    
    public function Raporalgerceklesen_nakliye()
	{   
        
        $ay=0;
        $ilk=0;
        $son=0;
        $sorgu=$this->db->query("SELECT * FROM aydegerigerceklesen WHERE Id < 2");
        $data["aydegeri"]=$sorgu->result();
        
        foreach($data['aydegeri'] as $rs){
            $ay=$rs->aydegeri;
        };
        
        date_default_timezone_set('Europe/Istanbul');
        $date2 = date('Y-m-d'); 
        $son = date( "Y-m", strtotime( $date2 . "-$ay month"));
        
        $isim=$this->session->oturum_data["adsoy"];
        
		$data=array(
                      "adsoy"=>$isim,
                      "hesaplanan_tarih"=>$son,
                      
		);
        $this->db->insert("nakliye_gerceklesenrapor",$data);
		$raporid = $this->db->insert_id();
		
        
        $sql = "CALL gerceklesennakliyerapor($raporid)";
        $this->db->query($sql);
        
        
        
        
        redirect(base_url().'admin/home');
        
	}
    
    public function Raporlamalargerceklesen()
	{   

        $sorgu=$this->db->query("SELECT * FROM raporlamalargercek");
        $data["rapor"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/raporlamalargercek');
        $this->load->view('admin/_footer');
        
	}
    
    public function Rapor_detay_gerceklesen($id)
	{   

        $sorgu=$this->db->query("SELECT * FROM gerceklesenmaliyetler WHERE rapor_id=$id");
        $data["rapor"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM raporlamalargercek WHERE Id=$id");
        $data["rapor_tarih"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/raporlamalargercek_detay');
        $this->load->view('admin/_footer');
        
	}
    
    public function Rapor_guncel_detay($id)
	{   

        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE rapor_id=$id");
        $data["rapor"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/raporlamalarguncel_detay');
        $this->load->view('admin/_footer');
        
	}
    
    public function guncel_nakliye_rapor_detay($id)
	{   

        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlarrapor WHERE rapor_id=$id");
        $data["rapor"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/guncel_nakliye_rapor_detay');
        $this->load->view('admin/_footer');
        
	}
    
    
    
}
