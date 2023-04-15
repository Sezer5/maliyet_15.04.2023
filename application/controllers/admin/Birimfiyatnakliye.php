<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birimfiyatnakliye extends CI_Controller {

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
                $this->load->model('Main_model');
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
    
    public function Birimfiyatnakliye()
	{
        
        
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyatnakliye WHERE rapor_id IS NULL");
        $data["sbt"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelastikhesabi WHERE rapor_id IS NULL");
        $data["lastik"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/birimfiyatnakliye');
        $this->load->view('admin/_footer');
        
	}
    
    public function getCityDepartment(){ 
    // POST data 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('Main_model');
    
    // get data 
    $data = $this->Main_model->getCityDepartment($postData);
    echo json_encode($data); 
  }
    public function parametre_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $fiyat=$this->input->post('fiyat');
        
		
	$data=array(
        'adi'=>$adi,
		'fiyat'=>$fiyat,
        
    );
        $this->Database_Model->update_data("birimfiyatnakliye",$data,$id);
         redirect(base_url()."admin/birimfiyatnakliye/birimfiyatnakliye");
    }
    
    public function parametre_guncelle_lastik($id)
	{
        $cekicionmiktar=$this->input->post('cekicionmiktar');
        $cekicionomur=$this->input->post('cekicionomur');
        $cekicionbrfiyat=$this->input->post('cekicionbrfiyat');
        $cekicicekermiktar=$this->input->post('cekicicekermiktar');
        $cekicicekeromur=$this->input->post('cekicicekeromur');
        $cekicicekerbrfiyat=$this->input->post('cekicicekerbrfiyat');
        $dorsepilotmiktar=$this->input->post('dorsepilotmiktar');
        $dorsepilotomur=$this->input->post('dorsepilotomur');
        $dorsepilotbrfiyat=$this->input->post('dorsepilotbrfiyat');
        
		
	$data=array(
        'cekicionmiktar'=>$cekicionmiktar,
		'cekicionomur'=>$cekicionomur,
        'cekicionbrfiyat'=>$cekicionbrfiyat,
		'cekicicekermiktar'=>$cekicicekermiktar,
        'cekicicekeromur'=>$cekicicekeromur,
		'cekicicekerbrfiyat'=>$cekicicekerbrfiyat,
        'dorsepilotmiktar'=>$dorsepilotmiktar,
		'dorsepilotomur'=>$dorsepilotomur,
        'dorsepilotbrfiyat'=>$dorsepilotbrfiyat,
        
    );
        $this->Database_Model->update_data("nakliyelastikhesabi",$data,$id);
         redirect(base_url()."admin/birimfiyatnakliye/birimfiyatnakliye");
    }
}
