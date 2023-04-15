<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uretimsorgulari extends CI_Controller {

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
    
    public function Uretimsorgulari()
	{
        
        
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/uretimsorgulari');
        $this->load->view('admin/_footer');
        
	}
    public function Uretimsorgulari2()
	{
        $istasyonadi=$this->input->post('istasyon');
        $urun=$this->input->post('urun');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $sorgu=$this->db->query("SELECT * FROM uretim_miktarlari WHERE MALZEME_KODU = '$urun' AND ISTASYON_KODU LIKE '$istasyonadi%' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["uretim"]=$sorgu->result();
        $data["istasyonadi"]=$istasyonadi;
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["urun"]=$urun;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/uretimsorgulari2');
        $this->load->view('admin/_footer');
        
	}
    public function Uretimsorgulariserver()
	{
        
        
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/uretimsorgulariserver');
        $this->load->view('admin/_footer');
        
	}
    public function Uretimsorgulariserver2()
	{
        $istasyonadi=$this->input->post('istasyon');
        $urun=$this->input->post('urun');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $sorgu=$this->load->database('db2',TRUE)->query("SELECT PROD.DATE_ AS TARIH, PROD.FICHENO AS FIS_NO, ITEMS.CODE AS MALZEME_KODU, ITEMS.NAME AS MALZEME_ADI, 
                      PROD.PLNAMOUNT AS PLANLANAN, PROD.ACTAMOUNT AS GERCEKLESEN, OPR.CODE AS OPERASYON_KODU, OPR.NAME AS OPERASYON_ADI, 
                      WRKS.CODE AS ISTASYON_KODU, WRKS.NAME AS ISTASYON_ADI, PROD.CAPIBLOCK_CREADEDDATE AS ISLEM_TARIHI
FROM         dbo.LG_219_PRODORD AS PROD LEFT OUTER JOIN
                      dbo.LG_219_OPERTION AS OPR INNER JOIN
                      dbo.LG_219_DISPLINE AS DISP ON OPR.LOGICALREF = DISP.OPERATIONREF INNER JOIN
                      dbo.LG_219_WORKSTAT AS WRKS ON DISP.WSREF = WRKS.LOGICALREF ON PROD.LOGICALREF = DISP.PRODORDREF LEFT OUTER JOIN
                      dbo.LG_219_ITEMS AS ITEMS ON PROD.ITEMREF = ITEMS.LOGICALREF
WHERE OPR.CODE<>'10.PAKETLEME' AND OPR.CODE<>'02.KABA KIRMA ELEME' AND ITEMS.Name <> 'TUVENAN' AND OPR.CODE<>'90.GERİ DÖNÜŞÜM' AND ITEMS.CODE = '$urun' AND WRKS.NAME LIKE '$istasyonadi%' AND PROD.DATE_ BETWEEN '$baslangic' AND '$bitis'
ORDER BY PROD.FICHENO DESC");
        $data["uretim"]=$sorgu->result();
        $data["istasyonadi"]=$istasyonadi;
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["urun"]=$urun;
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/uretimsorgulariserver2');
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
