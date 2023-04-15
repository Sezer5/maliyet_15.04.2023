<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kapasite extends CI_Controller {

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
    
    public function Kapasite()
	{
        
        $sql = "CALL degirmenlerkapasiteler()";//**
        $this->db->query($sql);
        
        $sql = "CALL dikdegirmenvesarkackapasiteler()";//**
        $this->db->query($sql);
        
        $sql = "CALL kaplamakapasiteler()";//**
        $this->db->query($sql);
        
        $sql = "CALL granulkapasiteler()";//**
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM degirmenler WHERE Id<31");
        $data["degirmenler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM degirmen_alti WHERE Id<5");
        $data["degirmen_alti"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM dikdegirmenler WHERE Id<4");
        $data["dikdegirmenler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM sarkac WHERE Id<15");
        $data["sarkac"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM kaplama WHERE Id<18");
        $data["kaplama"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granul WHERE istasyon_id=1 AND Id<32");
        $data["granulkapasitebeyaz"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM granul WHERE istasyon_id=2 AND Id<32");
        $data["granulkapasitemozaik"]=$sorgu->result();
       
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kapasite');
        $this->load->view('admin/_footer');
        
	}
    public function degirmen_guncelle($id)
	{
        $m0120=$this->input->post('m0120');
        $m095=$this->input->post('m095');
        $m085=$this->input->post('m085');  
        $m75=$this->input->post('m75');  
        $m65=$this->input->post('m65');  
        $m650=$this->input->post('m650');  
        $m1=$this->input->post('m1');
        $m2=$this->input->post('m2');  
        $m3=$this->input->post('m3');  
        $m5=$this->input->post('m5');  
        $m10=$this->input->post('m10');  
        $m20=$this->input->post('m20');  
        $m40=$this->input->post('m40');  
        $m60=$this->input->post('m60');
        $m70=$this->input->post('m70');
        $m80=$this->input->post('m80');  
        $m100=$this->input->post('m100');
                $data=array(
                    'm0120'=>$m0120,
                    'm095'=>$m095,
                    'm085'=>$m085,
                    'm75'=>$m75,
                    'm65'=>$m65,
                    'm650'=>$m650,
                    'm1'=>$m1,
                    'm2'=>$m2,
                    'm3'=>$m3,
                    'm5'=>$m5,
                    'm10'=>$m10,
                    'm20'=>$m20,
                    'm40'=>$m40,
                    'm60'=>$m60,
                    'm70'=>$m70,
                    'm80'=>$m80,
                    'm100'=>$m100,
                );
         $this->Database_Model->update_data("degirmenler",$data,$id);
         redirect(base_url()."admin/kapasite/kapasite");
    }
    public function degirmenalti_guncelle($id)
	{
        $talk2x=$this->input->post('talk2x');
        $talk5x=$this->input->post('talk5x');
        $talk10x=$this->input->post('talk10x');  
                $data=array(
                    'talk2x'=>$talk2x,
                    'talk5x'=>$talk5x,
                    'talk10x'=>$talk10x,
                );
         $this->Database_Model->update_data("degirmen_alti",$data,$id);
         redirect(base_url()."admin/kapasite/kapasite");
    }
    public function dikdegirmen_guncelle($id)
	{
        $m0120=$this->input->post('m0120');
        $m095=$this->input->post('m095');
        $m085=$this->input->post('m085');  
        $m075=$this->input->post('m075');  
        $m065=$this->input->post('m065');
        $hidrofil=$this->input->post('hidrofil');
        $talk2x=$this->input->post('talk2x');
        $talk5x=$this->input->post('talk5x');
        $hidrofilk=$this->input->post('hidrofilk');
                $data=array(
                    'm0120'=>$m0120,
                    'm095'=>$m095,
                    'm085'=>$m085,
                    'm075'=>$m075,
                    'hidrofil'=>$hidrofil,
                    'talk2x'=>$talk2x,
                    'talk5x'=>$talk5x,
                    'hidrofilk'=>$hidrofilk,
                );
         $this->Database_Model->update_data("dikdegirmenler",$data,$id);
         redirect(base_url()."admin/kapasite/kapasite");
    }
    public function sarkac_guncelle($id)
	{
        $i100=$this->input->post('i100');
        $a100=$this->input->post('a100');
        $ka100=$this->input->post('ka100');
                $data=array(
                    'i100'=>$i100,
                    'a100'=>$a100,
                    'ka100'=>$ka100,
                );
         $this->Database_Model->update_data("sarkac",$data,$id);
         redirect(base_url()."admin/kapasite/kapasite");
    }
    public function kaplama_guncelle($id)
	{
        $k95=$this->input->post('k95');
        $k85=$this->input->post('k85');
        $k75=$this->input->post('k75');
        $gls926=$this->input->post('gls926');
        $k65=$this->input->post('k65');
        $fk1=$this->input->post('fk1');
        $k650=$this->input->post('k650');  
        $k1=$this->input->post('k1');
        $gls912=$this->input->post('gls912');
        $k2=$this->input->post('k2');  
        $k3=$this->input->post('k3');  
        $k5=$this->input->post('k5');  
        $k10=$this->input->post('k10'); 
        $ecopro=$this->input->post('ecopro');
                $data=array(
                    'k95'=>$k95,
                    'k85'=>$k85,
                    'k75'=>$k75,
                    'gls926'=>$gls926,
                    'k65'=>$k65,
                    'fk1'=>$fk1,
                    'k650'=>$k650,
                    'k1'=>$k1,
                    'gls912'=>$gls912,
                    'k2'=>$k2,
                    'k3'=>$k3,
                    'k5'=>$k5,
                    'k10'=>$k10,
                    'ecopro'=>$ecopro,
                );
         $this->Database_Model->update_data("kaplama",$data,$id);
         redirect(base_url()."admin/kapasite/kapasite");
    }
    public function granul_guncelle($id)
	{
        $saatlik=$this->input->post('saatlik');
                $data=array(
                    'saatlik'=>$saatlik,
                );
         $this->Database_Model->update_data("granul",$data,$id);
         redirect(base_url()."admin/kapasite/kapasite");
    }
    public function kapasite_excel()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Degirmen No","Seperatör No","0,120µ", "0,95µ", "0,85µ", "75µ", "65µ","650µ", "1µ", "2µ", "3µ", "5µ", "10µ", "20µ", "40µ", "60µ","70µ", "80µ","100µ");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $kapasite_degirmenler_data = $this->Excel_export_model->fetch_data_kapasite_degirmenler();

          $excel_row = 2;

          foreach($kapasite_degirmenler_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->degirmen_no"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->m0120"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->m095"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->m085"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->m75"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->m65"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->m650"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->m1"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->m2"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->m3"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->m5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->m10"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->m20"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->m40"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->m60"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->m70"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->m80"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->m100"));
           $excel_row++;
          }
        $excel_row++;
        
        $table_columns4 = array("KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER",);

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 32, $field);
           $column++;
          }
        $excel_row++;
        $table_columns3 = array("Adı","0,120µ","0,95µ","0,85µ","0,75µ","0,65µ");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 34, $field);
           $column++;
          }
        $kapasite_dikdegirmenler_data = $this->Excel_export_model->fetch_data_kapasite_dikdegirmenler();

          $excel_row = 35;

          foreach($kapasite_dikdegirmenler_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->m0120"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->m095"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->m085"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->m075"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->m065"));
           $excel_row++;
          }
         $excel_row++;
        
        $table_columns4 = array("SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ",);

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 40, $field);
           $column++;
          }
        $excel_row++;
        $table_columns3 = array("Zaman","Adı","100","A100","KA100");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 42, $field);
           $column++;
          }
        $kapasite_sarkac_data = $this->Excel_export_model->fetch_data_kapasite_sarkac();

          $excel_row = 43;

          foreach($kapasite_sarkac_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->srk_ust"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->i100"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->a100"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->ka100"));
           $excel_row++;
          }
         $excel_row++;
            $table_columns4 = array("KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA");

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 49, $field);
           $column++;
          }
         $excel_row++;
        $table_columns3 = array("*","Adı","0,95K","0,85K","0,75K","GLS 926","0,65K","0,650K","1FK","1K","GLS 912","2K","3K","5K","10K");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column,51, $field);
           $column++;
          }
        $kapasite_kaplama_data = $this->Excel_export_model->fetch_data_kapasite_kpl_alt();

          $excel_row = 52;

          foreach($kapasite_kaplama_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->kplust"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->ist"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->k95"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->k85"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->k75"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->gls926"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->k65"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->k650"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->fk1"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->k1"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->gls912"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->k2"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->k3"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->k5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->k10"));
           $excel_row++;
          }
        $excel_row++;
            $table_columns4 = array("GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL");

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 63, $field);
           $column++;
          }
         $excel_row++;
        $table_columns3 = array("Adı","Saatlik","Günlük","Aylık");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column,165, $field);
           $column++;
          }
        $kapasite_granul_data = $this->Excel_export_model->fetch_data_kapasite_granul();

          $excel_row = 166;

          foreach($kapasite_granul_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->urunadi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->saatlik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->gunluk"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->aylik"));
           $excel_row++;
          }
        
        

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Kapasiteler.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/kapasite/kapasite');
    }
    
   
    
    
    
}
