<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enerji extends CI_Controller {

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
    
    public function Enerji()
	{
        
        $sql = "CALL enerjizamanguncelle()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM enerji  WHERE Id<43");
        $data["enerji"]=$sorgu->result();
       
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/enerji');
        $this->load->view('admin/_footer');
        
	}
    public function enerji_guncelle($id)
	{
        if($id < 31){
        $saatlik=$this->input->post('saatlik');
                $data=array(
                    'saatliktuketim'=>$saatlik,
                );
        $this->Database_Model->update_data("enerji",$data,$id);
            $data=array(
                    'tuketim'=>$saatlik,
                );
        $this->Database_Model->update_data("enerji1",$data,$id);
        }elseif($id == 33){
        $saatlik=$this->input->post('saatlik');
                $data=array(
                    'saatliktuketim'=>$saatlik,
                );
        $this->Database_Model->update_data("enerji",$data,$id);
            $data=array(
                    'tuketim'=>$saatlik,
                );
        $this->Database_Model->update_data("enerji1",$data,$id);
        }elseif($id == 34){
        $saatlik=$this->input->post('saatlik');
                $data=array(
                    'saatliktuketim'=>$saatlik,
                );
        $this->Database_Model->update_data("enerji",$data,$id);
            $data=array(
                    'tuketim'=>$saatlik,
                );
        $this->Database_Model->update_data("enerji1",$data,$id);
        }else{
            $saatlik=$this->input->post('saatlik');
                $data=array(
                    'saatliktuketim'=>$saatlik,
                );
        $this->Database_Model->update_data("enerji",$data,$id);
        }
         redirect(base_url()."admin/enerji/enerji");
    }
    public function enerji_excel()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Adı", "Saatlik Tüketim (Sa/Kw)","Günlük Tüketim","Aylık Tüketim","Günlük Çalışma Saati","Aylık Çalışılan Gün");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_enerji();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->saatliktuketim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->gunluktuketim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->ayliktuketim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->gunsaati"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->aydakigun"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Enerji.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/enerji/enerji');
    }
    
   
    
    
    
}
