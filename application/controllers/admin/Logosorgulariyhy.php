<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logosorgulariyhy extends CI_Controller {

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
    
    public function Logosorgulariyhy()
	{
        
        
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhy');
        $this->load->view('admin/_footer');
        
	}
    
    public function Logosorgulariyhy2()
	{
        $masrafturu=$this->input->post('masrafturu');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        if($masrafturu!="gug"){
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE (MM_KODU IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004')) AND ACCOUNTCODE ='$masrafturu' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["yhy"]=$sorgu->result();
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhy2');
        $this->load->view('admin/_footer');
            }else{

        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE (MM_KODU IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004'))  AND ACCOUNTCODE <> '730.3.033' AND ACCOUNTCODE <> '720.1.100' AND ACCOUNTCODE <> '191.01.001' AND ACCOUNTCODE <> '191.01.004' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["yhy"]=$sorgu->result();
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhy2');
        $this->load->view('admin/_footer');
            
        };
        
	}
    public function yhy_guncelle()
	{
        $borc=$this->input->post('borc');
        $Id=$this->input->post('Id');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        $masrafturu=$this->input->post('masrafturu');
                $data=array(
                    'BORC'=>$borc,
                );
        $this->Database_Model->update_data("logo_gug",$data,$Id);
         redirect(base_url()."admin/Logosorgulariyhy/Logosorgulariyhy3/$masrafturu/$baslangic/$bitis");
    }
    public function Logosorgulariyhy3($mtur,$bas,$bit)
	{
        $masrafturu=$mtur;
        $baslangic=$bas;
        $bitis=$bit;
        
        if($masrafturu!="gug"){
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE (MM_KODU IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004')) AND ACCOUNTCODE ='$masrafturu' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["yhy"]=$sorgu->result();
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhy2');
        $this->load->view('admin/_footer');
            }else{

        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE (MM_KODU IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004'))  AND ACCOUNTCODE <> '730.3.033' AND ACCOUNTCODE <> '720.1.100' AND ACCOUNTCODE <> '191.01.001' AND ACCOUNTCODE <> '191.01.004' AND TARIH BETWEEN '$baslangic' AND '$bitis'");
        $data["yhy"]=$sorgu->result();
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
            $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhy2');
        $this->load->view('admin/_footer');
            
        };
        
	}
    
    //BURADA SONRAKİ KISIM LOGO SERVERLA ALAKALI 
    
    public function Logosorgulariyhyserver()
	{
        
        
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhyserver');
        $this->load->view('admin/_footer');
        
	}
    
    public function Logosorgulariyhy2server()
	{
        $masrafturu=$this->input->post('masrafturu');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        if($masrafturu!="gug"){
        $sorgu =$this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORÇ, ACCDISTDET.TSIGN, 
                      ACCDISTDET.PREVLINEREF, PROJECT.CODE AS PROJE_KODU, PROJECT.NAME AS PROJE_ADI, PROJECT.LOGICALREF AS PRJ_LOGREF, 
                      PROJECT.ACTIVE AS PROJE_DURUM, GLTRN.ACCOUNTCODE, GLTRN.DATE_, GLTRN.LINEEXP, GLTRN.SPECODE AS GL_OZELKODU, 
                      GLTRN.LOGICALREF AS GL_LOGREF, GLTRN.SIGN, GLTRN.TRCURR AS GL_TRCURR, GLTRN.TRCODE, GLTRN.TRNET AS GL_TRNET, GLTRN.AMNT, 
                      GLTRN.ACCOUNTREF, GLFIC.FICHENO, GLFIC.TRCODE AS FIS_TRCODE, GLFIC.SPECODE AS FIS_OZELKODU, GLFIC.STATUS, GLFIC.CYPHCODE AS FIS_YETKIKODU,
                       GLFIC.BRANCH, GLFIC.DEPARTMENT, GLFIC.LOGICALREF AS FIS_LOGREF
FROM         dbo.LG_219_EMCENTER AS COSTC WITH (NOLOCK) LEFT OUTER JOIN
                      dbo.LG_219_01_ACCDISTDETLN AS ACCDISTDET WITH (NOLOCK) ON COSTC.LOGICALREF = ACCDISTDET.CENTERREF LEFT OUTER JOIN
                      dbo.LG_219_PROJECT AS PROJECT WITH (NOLOCK) ON ACCDISTDET.PROJECTREF = PROJECT.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFLINE AS GLTRN WITH (NOLOCK) ON ACCDISTDET.ACCFICHEREF = GLTRN.ACCFICHEREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFICHE AS GLFIC WITH (NOLOCK) ON GLTRN.ACCFICHEREF = GLFIC.LOGICALREF
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (COSTC.CODE IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004')) AND (ACCOUNTCODE LIKE '$masrafturu') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))


");
        $data["yhy"]=$sorgu->result();
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhy2server');
        $this->load->view('admin/_footer');
            }else{

        $sorgu=$this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORÇ, ACCDISTDET.TSIGN, 
                      ACCDISTDET.PREVLINEREF, PROJECT.CODE AS PROJE_KODU, PROJECT.NAME AS PROJE_ADI, PROJECT.LOGICALREF AS PRJ_LOGREF, 
                      PROJECT.ACTIVE AS PROJE_DURUM, GLTRN.ACCOUNTCODE, GLTRN.DATE_, GLTRN.LINEEXP, GLTRN.SPECODE AS GL_OZELKODU, 
                      GLTRN.LOGICALREF AS GL_LOGREF, GLTRN.SIGN, GLTRN.TRCURR AS GL_TRCURR, GLTRN.TRCODE, GLTRN.TRNET AS GL_TRNET, GLTRN.AMNT, 
                      GLTRN.ACCOUNTREF, GLFIC.FICHENO, GLFIC.TRCODE AS FIS_TRCODE, GLFIC.SPECODE AS FIS_OZELKODU, GLFIC.STATUS, GLFIC.CYPHCODE AS FIS_YETKIKODU,
                       GLFIC.BRANCH, GLFIC.DEPARTMENT, GLFIC.LOGICALREF AS FIS_LOGREF
FROM         dbo.LG_219_EMCENTER AS COSTC WITH (NOLOCK) LEFT OUTER JOIN
                      dbo.LG_219_01_ACCDISTDETLN AS ACCDISTDET WITH (NOLOCK) ON COSTC.LOGICALREF = ACCDISTDET.CENTERREF LEFT OUTER JOIN
                      dbo.LG_219_PROJECT AS PROJECT WITH (NOLOCK) ON ACCDISTDET.PROJECTREF = PROJECT.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFLINE AS GLTRN WITH (NOLOCK) ON ACCDISTDET.ACCFICHEREF = GLTRN.ACCFICHEREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFICHE AS GLFIC WITH (NOLOCK) ON GLTRN.ACCFICHEREF = GLFIC.LOGICALREF
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (COSTC.CODE IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004')) AND (ACCOUNTCODE <> '720.1.100')AND (ACCOUNTCODE <> '730.3.033') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))
ORDER BY MM_KODU, GLFIC.DATE_, GL_LOGREF
");
        $data["yhy"]=$sorgu->result();
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logosorgulariyhy2server');
        $this->load->view('admin/_footer');
            
        };
        
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

          $employee_data = $this->db->query("SELECT * FROM logo_gug WHERE MM_OZELKOD ='$masrafturu' AND TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

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
