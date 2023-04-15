<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Butunguncellemeler extends CI_Controller {

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
                if (!$this->session->userdata("oturum_uye")){
				redirect(base_url().'uye/Login');}
				
        }
	public function index()
	{
       
        
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/_main_content');
        $this->load->view('uye/_footer');
        
	}
    
    public function Butunguncellemeler()
	{
        
        $sql = "CALL aylikcalismasaatikopyalama()";
        $this->db->query($sql);
        
        $sql = "CALL birimfiyatsarflarhesapla()";
        $this->db->query($sql);
        
        $sql = "CALL iscilikmaliyethesabi()";
        $this->db->query($sql);
        
        $sql = "CALL iscilikistasyonhesaplamalari()";
        $this->db->query($sql);
        
        $sql = "CALL degirmenlerkapasiteler()";
        $this->db->query($sql);
        
        $sql = "CALL dikdegirmenvesarkackapasiteler()";
        $this->db->query($sql);
        
        $sql = "CALL kaplamakapasiteler()";
        $this->db->query($sql);
        
        $sql = "CALL granulkapasiteler()";
        $this->db->query($sql);
        
        $sql = "CALL enerjizamanguncelle()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizesaatkapasitesihesaplama()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizehm()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizeiscilikhesabi()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizeenerjihesabi()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizeokveamortismanhesabi()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizebakimhesaplama()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizegygriskdigerhesaplama()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizeyuzdelerilk15()";
        $this->db->query($sql);
        
        $sql = "CALL mikronizeyuzdelerson15()";
        $this->db->query($sql);
        
        // MİKRONİZE ORT YERİ BURASI 
       
        $sql = "CALL mikronizeort()";
        $this->db->query($sql);
        
    //   MİKRONİZE ORT YERİ BURASI 
        
    //    $sql = "CALL mikronizeortson16()";
    //    $this->db->query($sql);
        
        $sql = "CALL granulkapasitehmiscilik()";
        $this->db->query($sql);
        
       // $sql = "CALL granul_genelenerji()";
    //    $this->db->query($sql);
        
        $sql = "CALL granul_genelamortisman()";
        $this->db->query($sql);
        
        $sql = "CALL granul_genelenerjikatsayi()";
        $this->db->query($sql);
        
        $sql = "CALL granul_geneliscilik()";
        $this->db->query($sql);
        
        $sql = "CALL granul_genelbakim()";
        $this->db->query($sql);
        
        $sql = "CALL granul_genelgygrisk()";
        $this->db->query($sql);
        
        $sql = "CALL granul_genelyuzdelerilk17()";
        $this->db->query($sql);
        
        $sql = "CALL granul_genelyuzdelerson11()";
        $this->db->query($sql);
        
        $sql = "CALL kaplikapasite()";//**
        $this->db->query($sql);
        
        $sql = "CALL kapli()";//**
        $this->db->query($sql);
        
        $sql = "CALL kapliortari()";
        $this->db->query($sql);
        
        $sql = "CALL maliyethesaplamamikronizekapli()";
        $this->db->query($sql);
        
        $sql = "CALL maliyethesaplamagranul()";
        $this->db->query($sql);
        
        $sql = "CALL mmdegerleri()";
        $this->db->query($sql);
        
        $sql = "CALL yardimci_hizmetlerdegerler()";
        $this->db->query($sql);
        
        $sql = "CALL yd_dagitimkapasiteler()";
        $this->db->query($sql);
        
        $sql = "CALL yd_dagitimuretimler()";
        $this->db->query($sql);
        
        $sql = "CALL yd_dagitimikincidagilimlar()";
        $this->db->query($sql);
        
        $sql = "CALL degirmendegerleritoplamlar()";
        $this->db->query($sql);
        
        $sql = "CALL degirmendegerleri()";
        $this->db->query($sql);
        
        $sql = "CALL kapli_dagitimuretimler()";
        $this->db->query($sql);
        
        $sql = "CALL kapli_dagitimsahesaplama()";
        $this->db->query($sql);
        
        $sql = "CALL kapli_dagitimdegerler()";
        $this->db->query($sql);
        
        $sql = "CALL dikdegirmenlerdagitim()";
        $this->db->query($sql);
        
        $sql = "CALL sarkac_dagitimdegerler()";
        $this->db->query($sql);
        
        $sql = "CALL granul_dagitimdegerler()";
        $this->db->query($sql);
        
        $sql = "CALL gerceklesendegerlerhmuretim()";
        $this->db->query($sql);
        
        $sql = "CALL gerceklesendegerleriscilikenerjiamor()";
        $this->db->query($sql);
        
        $sql = "CALL gerceklesenmaliyetler1()";
        $this->db->query($sql);
        
        $sql = "CALL gerceklesendegerlerhmuretimkapli()";
        $this->db->query($sql);
        
        $sql = "CALL gerceklesenmaliyetler1()";
        $this->db->query($sql);
        
        $sql = "CALL kplmaliyetyuzdelervedolar()";
        $this->db->query($sql);
        
        $sql = "CALL gerceklesendegerlerortkop()";
        $this->db->query($sql);
       
        redirect(base_url()."uye/home");
        
	}
    
   
         
    
}
