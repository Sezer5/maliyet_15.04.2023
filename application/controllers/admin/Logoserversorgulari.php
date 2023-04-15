<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logoserversorgulari extends CI_Controller {

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
    
    public function Logoserversorgulari()
	{
        
        
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/logoserversorgulari');
        $this->load->view('admin/_footer');
        
	}
    public function masrafserversorgula()
	{
        $istasyonadi=$this->input->post('istasyonadi');
        $masrafturu=$this->input->post('masrafturu');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
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
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (COSTC.CODE LIKE '$istasyonadi') AND (ACCOUNTCODE LIKE '$masrafturu') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))

"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
        $data["masraf"]=$sorgu->result();
        $data["istasyonadi"]=$istasyonadi;
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        $data["masrafturu"]=$masrafturu;
       
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/masrafserversorgula');
        $this->load->view('admin/_footer');
        
	}
    public function gugserversorgula()
	{
        $istasyonadi=$this->input->post('istasyonadi');
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
                
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
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (COSTC.CODE LIKE '$istasyonadi') AND (ACCOUNTCODE <> '730.3.033') AND (ACCOUNTCODE <> '720.1.100') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))

"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
        
        $data["gug"]=$sorgu->result();
       
        $data["istasyonadi"]=$istasyonadi;
        $data["baslangic"]=$baslangic;
        $data["bitis"]=$bitis;
        
        
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gugserversorgula');
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

          $employee_data = $this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORC, ACCDISTDET.TSIGN, 
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
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (COSTC.CODE LIKE '$istasyonadi') AND (ACCOUNTCODE LIKE '$masrafturu') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))

")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->LINEEXP"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->DATE_"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="MASRAFKALEMLERISERVER.xls"');
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

          $employee_data = $this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORC, ACCDISTDET.TSIGN, 
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
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (ACCOUNTCODE LIKE '$masrafturu') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))

")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->LINEEXP"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->DATE_"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="MASRAFKALEMLERISERVERTUM.xls"');
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

          $employee_data = $this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORC, ACCDISTDET.TSIGN, 
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
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (COSTC.CODE LIKE '$istasyonadi') AND (ACCOUNTCODE <> '730.3.033') AND (ACCOUNTCODE <> '720.1.100') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))

")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->LINEEXP"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->DATE_"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="GUGSERVERKALEMLERI.xls"');
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

          $employee_data = $this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORC, ACCDISTDET.TSIGN, 
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
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (ACCOUNTCODE <> '730.3.033') AND (ACCOUNTCODE <> '720.1.100') AND (GLTRN.DATE_ >= CONVERT(dateTime, 
                      '$baslangic', 101)) AND (GLTRN.DATE_ <= CONVERT(dateTime, '$bitis', 101)) AND (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801))

")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_OZELKOD5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->LINEEXP"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->DATE_"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="GUGSERVERKALEMLERITUM.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/home');
            }
   
    
    
    
}
