<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Istatistikler_kirikkale extends CI_Controller {

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
   
    public function kirikkaleistatistiksecimi()
	{   
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kirikkale_istatistiksecimi');
        $this->load->view('admin/_footer');
        
	}
    public function urun_sec()
	{   
        
        $urun_adi=$this->input->post('urun_adi');
        $data["urun"]=$this->input->post('urun_adi');
        
        if($urun_adi != "KA40A"){
        
        $sorgu=$this->db->query("SELECT * FROM kirikkale_dagitim  WHERE adi='$urun_adi' AND rapor_id IS NOT NULL");
        $data["kk"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/istatistikler_gm10');
        $this->load->view('admin/_footer');
        }else{
        $sorgu=$this->db->query("SELECT * FROM kirikkale_dagitim  WHERE adi='$urun_adi' AND rapor_id IS NOT NULL");
        $data["kk"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/istatistikler_sarkac');
        $this->load->view('admin/_footer');
        }
	}
        
    
}
