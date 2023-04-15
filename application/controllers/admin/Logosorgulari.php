<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logosorgulari extends CI_Controller {

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
    
    public function Logosorgulari()
	{
        
        
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulari');
        $this->load->view('admin/_footer');
        
	}
    public function masrafsorgula()
	{
        $istasyonadi=$this->input->post('istasyonadi');
        $masrafturu=$this->input->post('masrafturu');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE MM_KODU = '$istasyonadi' AND ACCOUNTCODE ='$masrafturu' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["masraf"]=$sorgu->result();
        $data["istasyonadi"]=$istasyonadi;
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/masrafsorgula');
        $this->load->view('admin/_footer');
        
	}
     public function masraf_guncelle()
	{
        $borc=$this->input->post('borc');
        $Id=$this->input->post('Id');
        $istasyonadi=$this->input->post('istasyonadi');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        $masrafturu=$this->input->post('masrafturu');
                $data=array(
                    'BORC'=>$borc,
                );
        $this->Database_Model->update_data("logo_gug",$data,$Id);
         redirect(base_url()."admin/logosorgulari/masrafsorgula2/$istasyonadi/$masrafturu/$baslangic/$bitis");
    }
    public function masrafsorgula2($istasyon,$mtur,$bas,$bit)
	{
        $istasyonadi=$istasyon;
        $masrafturu=$mtur;
        $baslangic=$bas;
        $bitis=$bit;
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE MM_KODU = '$istasyonadi' AND ACCOUNTCODE ='$masrafturu' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["masraf"]=$sorgu->result();
        $data["istasyonadi"]=$istasyonadi;
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/masrafsorgula');
        $this->load->view('admin/_footer');
        
	}
    public function gugsorgula()
	{
        $istasyonadi=$this->input->post('istasyonadi');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE MM_KODU = '$istasyonadi' AND ACCOUNTCODE <>'730.3.033' AND ACCOUNTCODE <>'720.1.100' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["gug"]=$sorgu->result();
        $data["istasyonadi"]=$istasyonadi;
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gugsorgula');
        $this->load->view('admin/_footer');
        
	}
    public function gugsorgula_genel()
	{
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE ACCOUNTCODE <>'730.3.033' AND ACCOUNTCODE <>'720.1.100' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["gug"]=$sorgu->result();
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gugsorgula_genel');
        $this->load->view('admin/_footer');
        
	}
    public function action_masrafsorgula($istasyonadi,$baslangic,$bitis,$masrafturu)
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("ACCOUNTCODE", "MM_KODU","MM_ADI", "MM_OZELKOD","BORÇ","ACIKLAMA", "TARIH");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM logo_gug WHERE MM_KODU = '$istasyonadi' AND ACCOUNTCODE ='$masrafturu' AND TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->ACIKLAMA"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->TARIH"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="MASRAFKALEMLERI.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/home');
            }
    public function action_masrafsorgulatum($baslangic,$bitis,$masrafturu)
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("ACCOUNTCODE", "MM_KODU","MM_ADI", "MM_OZELKOD","BORÇ","ACIKLAMA", "TARIH");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM logo_gug WHERE ACCOUNTCODE ='$masrafturu' AND TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->ACIKLAMA"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->TARIH"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="MASRAFKALEMLERITUM.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/home');
            }
    public function action_gugsorgula($istasyonadi,$baslangic,$bitis)
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("ACCOUNTCODE", "MM_KODU","MM_ADI", "MM_OZELKOD","BORÇ","ACIKLAMA", "TARIH");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM logo_gug WHERE MM_KODU = '$istasyonadi' AND ACCOUNTCODE <>'730.3.033' AND ACCOUNTCODE <>'720.1.100' AND TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->ACIKLAMA"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->TARIH"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="GUGKALEMLERI.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/home');
            }
    public function action_gugsorgulatum($baslangic,$bitis)
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("ACCOUNTCODE", "MM_KODU","MM_ADI", "MM_OZELKOD","BORÇ","ACIKLAMA", "TARIH");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM logo_gug WHERE ACCOUNTCODE <>'730.3.033' AND ACCOUNTCODE <>'720.1.100' AND TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->ACIKLAMA"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->TARIH"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="GUGKALEMLERITUM.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/home');
            }
   
    
    
    
}
