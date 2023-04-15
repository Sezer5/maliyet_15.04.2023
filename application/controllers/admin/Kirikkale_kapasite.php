<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirikkale_kapasite extends CI_Controller {

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
    
    public function Kirikkale_kapasite()
	{
        
        $sql = "CALL kirikkalekapasiteler()";//**
        $this->db->query($sql);
                
        $sorgu=$this->db->query("SELECT * FROM kirikkale_kapasite WHERE Id < 4");
        $data["gm10"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM kirikkale_kapasite WHERE Id > 3 AND Id < 7");
        $data["sarkac"]=$sorgu->result();
       
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kirikkale_kapasite');
        $this->load->view('admin/_footer');
        
	}
    public function kapasite_guncelle($id)
	{
        $kgm10=$this->input->post('kgm10');
        $kgm49=$this->input->post('kgm49');
        $kgm022=$this->input->post('kgm022');  
        $kgm922=$this->input->post('kgm922');  
        $kgm2=$this->input->post('kgm2');  
        $kgm1520=$this->input->post('kgm1520');
        $kgm4090=$this->input->post('kgm4090');
        $ka40a=$this->input->post('ka40a');  
                $data=array(
                    'kgm10'=>$kgm10,
                    'kgm49'=>$kgm49,
                    'kgm022'=>$kgm022,
                    'kgm922'=>$kgm922,
                    'kgm2'=>$kgm2,
                    'kgm1520'=>$kgm1520,
                    'kgm4090'=>$kgm4090,
                    'ka40a'=>$ka40a,
                );
         $this->Database_Model->update_data("kirikkale_kapasite",$data,$id);
         redirect(base_url()."admin/Kirikkale_kapasite/Kirikkale_kapasite");
    }
    
}
