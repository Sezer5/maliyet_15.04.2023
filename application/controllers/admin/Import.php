<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Import extends CI_Controller {
    public function __construct() {
        parent::__construct();
       $this->load->library('session');
        $this->load->model('Import_model', 'import');
        $this->load->helper(array('url','html','form'));
    }    
 
    public function index() {
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/import');
        $this->load->view('admin/_footer');
    }
 
    public function importFile(){
  
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
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['sehir_Id'] = $value['A'];
                      $inserdata[$i]['sehir'] = $value['B'];
                      $inserdata[$i]['adi'] = $value['C'];
                      $i++;
                    }               
                    $result = $this->import->importData($inserdata);
                    
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
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/import');
        $this->load->view('admin/_footer');
    }
    
    public function masrafmerkezleri_verileri_import(){
        
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
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true, true);
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
                      $i++;
                    }               
                    $result = $this->import->importmasrafmerkezleri($inserdata);
                    
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
       // $this->db->where('MALZEME_KODU', NULL);
    //    $this->db->delete('uretim_miktarlari');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
     
}
?>
