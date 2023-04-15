<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masrafmerkezlerkirikkale extends CI_Controller {

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
    
    public function Masrafmerkezlerkirikkale()
	{
        
        
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
        $this->load->view('admin/masrafmerkezlerkirikkale');
        $this->load->view('admin/_footer');
        
	}
    public function action_masrafmerkezler()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Masraf Merkezleri", "İşçilik","Enerji", "Genel Üretim Giderleri","Toplam","Oranlar");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_masrafmerkezleri();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->masrafmerkezi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->gug"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->toplam"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->oranlar"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="MasrafMerkezleri.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/masrafmerkezler/masrafmerkezler');
            }
    public function action_yhy()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Masraf Merkezleri", "İşçilik","Enerji", "Genel Üretim Giderleri","Toplam","Oranlar");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_yardimcihizmetler();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->masrafmerkezi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->iscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->gug"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->toplam"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->oranlar"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="YardimciHizmetler.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/masrafmerkezler/masrafmerkezler');
            }
   
    
    
    
}
