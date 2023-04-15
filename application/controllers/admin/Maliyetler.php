<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maliyetler extends CI_Controller {

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
    
    public function Maliyetler()
	{
        
        
        $sql = "CALL maliyethesaplamamikronizekapli()";
        $this->db->query($sql);
        
        $sql = "CALL maliyethesaplamagranul()";
        $this->db->query($sql);
        
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id < 21 OR Id=67 OR Id=68");
        $data["mikronize"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 20 AND Id < 39");
        $data["kapli"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 38 AND Id < 56");
        $data["granulextra"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 55  AND Id<67");
        $data["granul"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM raporlamalar ORDER BY Id DESC LIMIT 1");
        $data["son_rapor"]=$sorgu->result();
        

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/maliyetler');
        $this->load->view('admin/_footer');
        
	}
    public function action_maliyetler()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("ADI", "NET MALİYET TL","MALİYET %10 TL", "%10 TL","NET MALİYET USD","MALİYET %10 USD", "%10 USD");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_maliyetler();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->netmaliyet"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->maliyetyuzde10"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->artiyuzde10"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->netmaliyet_usd"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->maliyetyuzde10_usd"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->artiyuzde10_usd"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Maliyetler.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/maliyetler/maliyetler');
        }
        
        
        public function satis_maliyetleri()
	{
        
        
        $sql = "CALL maliyethesaplamamikronizekapli()";
        $this->db->query($sql);
        
        $sql = "CALL maliyethesaplamagranul()";
        $this->db->query($sql);
        
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id < 21");
        $data["mikronize"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 20 AND Id < 39");
        $data["kapli"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 38 AND Id < 56");
        $data["granulextra"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 55  AND Id<67");
        $data["granul"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM raporlamalar ORDER BY Id DESC LIMIT 1");
        $data["son_rapor"]=$sorgu->result();
        

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/satis_maliyetleri');
        $this->load->view('admin/_footer');
        
	}
    
    public function action_maliyetler_satis()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("ADI", "NET MALİYET TL","MALİYET %10 TL", "%10 TL","NET MALİYET USD","MALİYET %10 USD", "%10 USD");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_maliyetler();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->netmaliyet" * "$row->ha_kodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->maliyetyuzde10" * "$row->ha_kodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->artiyuzde10" * "$row->ha_kodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->netmaliyet_usd" * "$row->ha_kodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->maliyetyuzde10_usd" * "$row->ha_kodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->artiyuzde10_usd" * "$row->ha_kodu"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Maliyetler.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/maliyetler/maliyetler');
        }
    
    
   
    
    
    
}
