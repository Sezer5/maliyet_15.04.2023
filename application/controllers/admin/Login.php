<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
                $this->load->library("session");
				$this->load->helper('url');
                $this->load->library('form_validation');
                $this->load->model("Admin_Model");
                $this->load->model("Database_Model");
                $this->load->database();
               
                
         
				
        }
	public function index()
	{
		$this->load->view('admin/login_formu');
        
	}
    public function login_ol()
	{
		
            $user_id=$this->input->post('user_id',TRUE);
            $password=$this->input->post('password',TRUE);
            $result=$this->Admin_Model->login($user_id,$password);
            if($result){
                $oturum_dizi=array(
                'id' =>$result[0]->Id,
                'user_id' =>$result[0]->user_id,
                'yetki' =>$result[0]->yetki,
                'email' =>$result[0]->email,
                'adsoy' =>$result[0]->adsoy,
                'dep_id' =>$result[0]->dep_id,
                'sysgeor' =>$result[0]->sysgeor,
                );
                $this->session->set_userdata('oturum_data',$oturum_dizi);
        
  
                redirect(base_url().'admin/home');
                
            }
            else{
                $this->session->set_flashdata("login_hata","Geçersiz E-mail ya da şifre");
                $this->load->view('admin/login_formu');
            }
            
        }
    public function logout(){
        
        $this->session->unset_userdata('oturum_data');
        $this->session->sess_destroy();
        redirect(base_url().'admin/login');
        
        
    }
        
	}
    
