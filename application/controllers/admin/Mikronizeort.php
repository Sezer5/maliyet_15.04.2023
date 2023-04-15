<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mikronizeort extends CI_Controller {

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
    
    public function Mikronizeort()
	{
        
        $sql = "CALL mikronizeort()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM mikronizeort  WHERE Id<36");
        $data["mikronize"]=$sorgu->result();

		$sorgu=$this->db->query("SELECT fiyat FROM birimfiyatparametreler  WHERE Id=66");
		$data["elektrik"]=$sorgu->result();
		$data["brfiyat"]=0;
		foreach ($data['elektrik'] as $rs){
			$data["brfiyat"]=$rs->fiyat;
		};

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/mikronizeort');
        $this->load->view('admin/_footer');
        
	}
    
    public function action_mikronize()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Mamul", "HM", "HM %", "İşçilik","İşçilik %","Enerji","Enerji %","Ö.K.","Ö.K. %","Amortisman","Amortisman %","Bakım","Bakım %","Üretim Maliyeti","Üretim Maliyeti %","Genel Yönetim","Genel Yönetim %","Risk","Risk %","Diğer","Diğer %","Net Maliyet");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_mikronizeort();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->mamul"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->hm"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->hmyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->uretimiscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->iscilikyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->enerjiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->okyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->amortismanyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->bakimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->uretimmaliyeti"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->uretimmaliyetiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->genelyonetim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->genelyonetimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->risk"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->riskyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(19,$excel_row,str_replace(".",",","$row->diger"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(20,$excel_row,str_replace(".",",","$row->digeryuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(21,$excel_row,str_replace(".",",","$row->netmaliyet"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Mikronizeort.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/mikronizeort/mikronizeort');
            }
   
    
    
    
}
