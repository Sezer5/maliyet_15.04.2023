<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kapliort extends CI_Controller {

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
    
    public function Kapliort()
	{
        
      
        $sql = "CALL kapliortari()";
        $this->db->query($sql);
                
        $sorgu=$this->db->query("SELECT * FROM kapliort  WHERE Id<30");
        $data["kapliort"]=$sorgu->result();

		$sorgu=$this->db->query("SELECT fiyat FROM birimfiyatparametreler  WHERE Id=66");
		$data["elektrik"]=$sorgu->result();
		$data["brfiyat"]=0;
		foreach ($data['elektrik'] as $rs){
			$data["brfiyat"]=$rs->fiyat;
		}

		$this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/kapliort');
        $this->load->view('admin/_footer');
        
	}
    public function action_kapliort()
	{
       
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array("Mamul","HM","HM %","İşçilik","İşçilik %","Enerji","Enerji %","S.A.","S.A. %","Amortisman","Amortisman %","Bakım","Bakım %","Kaplama Maliyeti","Kaplama Maliyeti %","Net Maliyet","Maliyet","Katsayı");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_kapliort();

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
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->sa"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->sayuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->amortismanyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->bakimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->kaplamamaliyeti"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->kaplamamaliyetiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->netmaliyet"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->maliyet"));
              $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->katsayi"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Kapliort.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/kapliort/kapliort');
            }
}
