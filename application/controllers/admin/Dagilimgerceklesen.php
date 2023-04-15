<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dagilimgerceklesen extends CI_Controller {

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
    
    public function Dagilimgerceklesen()
	{
        
        
        
        $sql = "CALL yd_dagitimkapasiteler()";//** DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK 
        $this->db->query($sql);
        
        $sql = "CALL yd_dagitimuretimler()";//** DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR // İŞLENDİ
        $this->db->query($sql);
        
        $sql = "CALL yd_dagitimikincidagilimlar()";//DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK  
        $this->db->query($sql);
        
        $sql = "CALL degirmendegerleritoplamlar()";//DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR //İŞLENDİ
        $this->db->query($sql);
        
        $sql = "CALL degirmendegerleri()"; //DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK 
        $this->db->query($sql);
        
        $sql = "CALL kapli_dagitimuretimler()"; //DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR // İŞLENDİ
        $this->db->query($sql);
        
        $sql = "CALL kapli_dagitimsahesaplama()"; // DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK 
        $this->db->query($sql);
        
        $sql = "CALL kapli_dagitimdegerler()"; //* DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK DATE YOK 
        $this->db->query($sql);
        
        $sql = "CALL dikdegirmenlerdagitim()"; //*DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR //İŞLENDİ
        $this->db->query($sql);
        
        $sql = "CALL sarkac_dagitimdegerler()"; // DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR DATE VAR //İŞLENDİ
        $this->db->query($sql);
        
        $sql = "CALL granul_dagitimdegerler()"; //*
        $this->db->query($sql);
        
        // date_default_timezone_set('Europe/Istanbul');
       // $date = date( "Y-m-d", strtotime( $date . "-120 day"));
       // $date_bas = date( "Y-m-d");
        
        $sorgu=$this->db->query("SELECT * FROM yd_dagitim  WHERE Id<18");
        $data["yddagitim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM yd_dagitim  WHERE Id=17");
        $data["yddagitimilk"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM dd_dagitim  WHERE Id<16");
        $data["dddagitim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM dd_dagitim  WHERE Id=15");
        $data["dddagitimilk"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM kapli_dagitim  WHERE Id<18");
        $data["kaplidagitim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM kapli_dagitim  WHERE Id=15");
        $data["kaplidagitimilk"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM sarkac_dagitim  WHERE Id<6");
        $data["sarkacdagitim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM sarkac_dagitim  WHERE Id=5");
        $data["sarkacdagitimilk"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granul_dagitim  WHERE Id>20 AND Id<33");
        $data["granuldagitim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granul_dagitim  WHERE Id=32");
        $data["granuldagitimilk"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granulekstra_dagitim  WHERE Id<22");
        $data["granulekstradagitim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granulekstra_dagitim  WHERE Id=18");
        $data["granulekstradagitimilk"]=$sorgu->result();
        

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/dagilimgerceklesen');
        $this->load->view('admin/_footer');
        
	}
    public function action_degirmenlergerceklesen()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "Mamul","Kapasite_d1", "D1_1Dağılım", "D1_Üretim","D1_2Dağılım","Kapasite_d2","D2_1Dağılım", "D2_Üretim","D2_2Dağılım","Kapasite_d3","D3_1Dağılım", "D3_Üretim","D3_2Dağılım","Kapasite_d5","D5_1Dağılım", "D5_Üretim","D5_2Dağılım","D1_İŞÇİLİK","D1_ENERJİ","D1_Ö.K.","D1_AMORTİSMAN","D1_GÜG","D2_İŞÇİLİK","D2_ENERJİ","D2_Ö.K.","D2_AMORTİSMAN","D2_GÜG","D3_İŞÇİLİK","D3_ENERJİ","D3_Ö.K.","D3_AMORTİSMAN","D3_GÜG","D5_İŞÇİLİK","D5_ENERJİ","D5_Ö.K.","D5_AMORTİSMAN","D5_GÜG");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_dagilimlardegirmen();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->d1_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->d1_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->d1_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->d1_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->d2_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->d2_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->d2_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->d2_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->d3_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->d3_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->d3_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->d3_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->d5_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->d5_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->d5_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->d5_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->d1_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(19,$excel_row,str_replace(".",",","$row->d1_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(20,$excel_row,str_replace(".",",","$row->d1_ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(21,$excel_row,str_replace(".",",","$row->d1_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(22,$excel_row,str_replace(".",",","$row->d1_gug"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(23,$excel_row,str_replace(".",",","$row->d2_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(24,$excel_row,str_replace(".",",","$row->d2_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(25,$excel_row,str_replace(".",",","$row->d2_ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(26,$excel_row,str_replace(".",",","$row->d2_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(27,$excel_row,str_replace(".",",","$row->d2_gug"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(28,$excel_row,str_replace(".",",","$row->d3_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(29,$excel_row,str_replace(".",",","$row->d3_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(30,$excel_row,str_replace(".",",","$row->d3_ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(31,$excel_row,str_replace(".",",","$row->d3_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(32,$excel_row,str_replace(".",",","$row->d3_gug"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(33,$excel_row,str_replace(".",",","$row->d5_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(34,$excel_row,str_replace(".",",","$row->d5_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(35,$excel_row,str_replace(".",",","$row->d5_ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(36,$excel_row,str_replace(".",",","$row->d5_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(37,$excel_row,str_replace(".",",","$row->d5_gug"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Yatay Değirmen Dağılımlar.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/dagilimgerceklesen/dagilimgerceklesen');
            }
    public function action_dikdegirmenlergerceklesen()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "Mamul","Kapasite_dik", "dik_1Dağılım", "dik_Üretim","dik_2Dağılım","dik_İŞÇİLİK","dik_ENERJİ","dik_Ö.K.","dik_AMORTİSMAN","dik_GÜG");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_dagilimlardikdegirmen();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->dik_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->dik_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->dik_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->dik_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->dik_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->dik_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->dik_ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->dik_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->dik_gug"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Dik Değirmen Dağılımlar.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/dagilimgerceklesen/dagilimgerceklesen');
            }
    public function action_kapligerceklesen()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "Mamul","Kapasite_k03", "k03_1Dağılım", "k03_Üretim","k03_2Dağılım","Kapasite_k04","k04_1Dağılım", "k04_Üretim","k04_2Dağılım","Kapasite_k06","k06_1Dağılım", "k06_Üretim","k06_2Dağılım","k03_İŞÇİLİK","k03_ENERJİ","k03_S.A.","k03_AMORTİSMAN","k03_GÜG","k04_İŞÇİLİK","k04_ENERJİ","k04_S.A.","k04_AMORTİSMAN","k04_GÜG","k06_İŞÇİLİK","k06_ENERJİ","k06_S.A.","k06_AMORTİSMAN","k06_GÜG");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_kaplidagilim();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->k03_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->k03_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->k03_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->k03_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->k04_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->k04_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->k04_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->k04_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->k06_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->k06_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->k06_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->k06_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->k03_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->k03_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->k03_sa"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->k03_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->k03_bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(19,$excel_row,str_replace(".",",","$row->k04_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(20,$excel_row,str_replace(".",",","$row->k04_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(21,$excel_row,str_replace(".",",","$row->k04_sa"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(22,$excel_row,str_replace(".",",","$row->k04_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(23,$excel_row,str_replace(".",",","$row->k04_bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(24,$excel_row,str_replace(".",",","$row->k06_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(25,$excel_row,str_replace(".",",","$row->k06_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(26,$excel_row,str_replace(".",",","$row->k06_sa"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(27,$excel_row,str_replace(".",",","$row->k06_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(28,$excel_row,str_replace(".",",","$row->k06_bakim"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Kaplı Dağılımlar.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/dagilimgerceklesen/dagilimgerceklesen');
            }
    public function action_tplgerceklesen()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "Mamul","Kapasite_tpl5", "tpl5_1Dağılım", "tpl5_Üretim","tpl5_2Dağılım","Kapasite_tpl6","tpl6_1Dağılım", "tpl6_Üretim","tpl6_2Dağılım","tpl5_İŞÇİLİK","tpl5_ENERJİ","tpl5_Ö.K.","tpl5_AMORTİSMAN","tpl5_Bakım","tpl6_İŞÇİLİK","tpl6_ENERJİ","tpl6_Ö.K.","tpl6_AMORTİSMAN","tpl6_Bakım");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_dagilimlarsarkac();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->tpl5_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->tpl5_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->tpl5_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->tpl5_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->tpl6_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->tpl6_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->tpl6_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->tpl6_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->tpl5_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->tpl5_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->tpl5_ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->tpl5_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->tpl5_bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->tpl6_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->tpl6_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->tpl6_ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->tpl6_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(19,$excel_row,str_replace(".",",","$row->tpl6_bakim"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Sarkaç Dağılımlar.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/dagilimgerceklesen/dagilimgerceklesen');
            }
    public function action_granulgerceklesen()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "Mamul","Kapasite_granul", "granul_1Dağılım", "granul_Üretim","granul_2Dağılım","granul_hm","granul_İŞÇİLİK","granul_ENERJİ","granul_AMORTİSMAN","granul_GÜG","Üretim Maliyeti");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_dagilimlargranul();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->granul_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->granul_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->granul_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->granul_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->granul_hm"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->granul_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->granul_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->granul_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->granul_gug"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->uretimmaliyeti"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="granul Dağılımlar.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/dagilimgerceklesen/dagilimgerceklesen');
            }
    public function action_granulekstragerceklesen()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "Mamul","Kapasite_granulekstra", "granulekstra_1Dağılım", "granulekstra_Üretim","granulekstra_2Dağılım","granulekstra_hm","granulekstra_İŞÇİLİK","granulekstra_ENERJİ","granulekstra_AMORTİSMAN","granulekstra_GÜG","Üretim Maliyeti");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_dagilimlargranulekstra();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->granulekstra_kpst"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->granulekstra_1dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->granulekstra_uretim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->granulekstra_2dag"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->granulekstra_hm"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->granulekstra_iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->granulekstra_enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->granulekstra_amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->granulekstra_gug"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->uretimmaliyeti"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="granulekstra Dağılımlar.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/dagilimgerceklesen/dagilimgerceklesen');
            }
   
    
    
    
}
