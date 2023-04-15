<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amortisman extends CI_Controller {

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
                if (!$this->session->userdata("oturum_uye")){
				redirect(base_url().'uye/Login');}
				
        }
	public function index()
	{
       
        
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/_main_content');
        $this->load->view('uye/_footer');
        
	}
    
    public function amortisman()
	{
        $sql = "CALL aylikcalismasaatikopyalama()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM amortisman WHERE rapor_id IS NULL");
        $data["amortisman"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliye_araclar WHERE rapor_id = 0 ORDER BY plaka ASC");
        $data["araclar"]=$sorgu->result();

        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/amortisman');
        $this->load->view('uye/_footer');
        
	}
    public function amortisman_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $carideger=$this->input->post('carideger');
        $faydaliomur=$this->input->post('faydaliomur');
		
	$data=array(
        'adi'=>$adi,
		'carideger'=>$carideger,
        'faydaliomur'=>$faydaliomur,
    );
        $this->Database_Model->update_data("amortisman",$data,$id);
         redirect(base_url()."uye/amortisman/amortisman");
    }
    
    public function amortisman_guncelle_arac($id)
	{
        $carideger=$this->input->post('carideger');
        $faydaliomur=$this->input->post('faydaliomur');
		
	$data=array(
		'cari_deger'=>$carideger,
        'faydali_omur'=>$faydaliomur,
    );
        $this->Database_Model->update_data("nakliye_araclar",$data,$id);
         redirect(base_url()."uye/amortisman/amortisman");
    }
    
    public function action_amortisman()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Adı", "Cari Değer","Faydalı Ömür", "Yıl/Tl", "Ay/Tl", "Saat/Tl");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_amortisman();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->carideger"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->faydaliomur"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->yiltl"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->aytl"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->saattl"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Amortisman.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'uye/amortisman/amortisman');
            }
    
    public function action_amortisman_arac()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Adı", "Cari Değer","Faydalı Ömür", "Yıl/Tl", "Ay/Tl", "Saat/Tl");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_amortisman_arac();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->plaka"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->cari_deger"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->faydali_omur"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->yiltl"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->aytl"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->saattl"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="arac_amortismanlari.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'uye/amortisman/amortisman');
            }
   
    
    
    
}
