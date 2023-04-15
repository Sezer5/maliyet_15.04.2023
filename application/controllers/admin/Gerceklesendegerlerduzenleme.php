<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerceklesendegerlerduzenleme extends CI_Controller {

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
				$this->load->model('Import_model', 'import');
                $this->load->helper(array('url','html','form'));
        }
	public function index()
	{
       
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/_main_content');
        $this->load->view('admin/_footer');
        
	}
    
    public function Gerceklesendegerlerduzenleme()
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
        $date = date('Y-m-d');
        $date2 = date('Y-m-d'); 
        $ilk = date( "Y-m-01", strtotime( $date . "-$ay month"));
        $son = date( "Y-m-t", strtotime( $date2 . "-$ay month"));
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE TARIH BETWEEN '$ilk' AND '$son'");
        $data["yhy"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE (MM_KODU IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004'))  AND ACCOUNTCODE <> '730.3.033' AND ACCOUNTCODE <> '720.1.100' AND ACCOUNTCODE <> '191.01.001' AND ACCOUNTCODE <> '191.01.004' AND TARIH BETWEEN '$ilk' AND '$son' AND EKLENTI=1");
        $data["eklenti"]=$sorgu->result();
                
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gerceklesendegerlerduzenleme');
        $this->load->view('admin/_footer');
	}
    
    public function Gerceklesendegerlerduzenleme2()
	{
        $aydeger=$this->input->post('aydeger');
        $Id=$this->input->post('id');
        
        $data=array(
        'aydegeri'=>$aydeger,
        );
        $this->Database_Model->update_data("aydegerigerceklesen",$data,$Id);

        $sorgu=$this->db->query("SELECT * FROM aydegerigerceklesen WHERE Id < 2");
        $data["aydegeri"]=$sorgu->result();
        
        $sql = "CALL mmdegerleri()";//DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR 
        $this->db->query($sql);
        
        $sql = "CALL yardimci_hizmetlerdegerler()"; //DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR 
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM yardimci_hizmetler WHERE  rapor_id IS NULL");
        $data["yardimcihizmetler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM masraf_merkezleri WHERE  rapor_id IS NULL");
        $data["masrafmerkezleri"]=$sorgu->result();
                
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gerceklesendegerlerduzenleme2');
        $this->load->view('admin/_footer');
	}
    public function Gerceklesendegerlerduzenleme_guncelle($id)
	{
        $borc=$this->input->post('borc');
        $demirbas=$this->input->post('demirbas');
        $Id=$id;
        
	$data=array(
        'BORC'=>$borc,
        'DEMIRBAS'=>$demirbas,
    );
        $this->Database_Model->update_data("logo_gug",$data,$Id);
         redirect(base_url()."admin/gerceklesendegerlerduzenleme/gerceklesendegerlerduzenleme");
    }
    public function Gerceklesendegerlerduzenleme_sil($id)
	{
        
        $Id=$id;
        $this->db->query("DELETE FROM logo_gug WHERE Id=$Id");	
         redirect(base_url()."admin/gerceklesendegerlerduzenleme/gerceklesendegerlerduzenleme");
    }
    
    
    public function masraf_import(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['ACCOUNTCODE'] = $value['B'];
                      $inserdata[$i]['MM_KODU'] = $value['C'];
                      $inserdata[$i]['MM_ADI'] = $value['D'];
                      $inserdata[$i]['MM_OZELKOD'] = $value['E'];
                      $inserdata[$i]['BORC'] = $value['F'];
                      $inserdata[$i]['RAPORDOVIZ_NET'] = $value['G'];
                      $inserdata[$i]['ACIKLAMA'] = $value['H'];
                      $inserdata[$i]['TARIH'] = $value['I'];
                      $inserdata[$i]['DEMIRBAS'] = $value['J'];
                      $inserdata[$i]['EKLENTI'] = $value['K'];
                      $i++;
                    }               
                    $result = $this->import->importMasraf($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('ACCOUNTCODE', NULL);
        $this->db->delete('logo_gug');
        redirect(base_url()."admin/gerceklesendegerlerduzenleme/gerceklesendegerlerduzenleme");
    }
    
}
