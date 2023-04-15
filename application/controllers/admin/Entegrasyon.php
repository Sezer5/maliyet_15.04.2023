<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entegrasyon extends CI_Controller {

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
                $this->load->helper(array('url','html','form'));
                $this->load->database(); //Sayfada database'ye erişimi sağlar
				$this->load->model('Database_Model');
                $this->load->model('Excel_export_model');
                $this->load->model('Import_model', 'import');
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
    
    public function Entegrasyon_export()
	{
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/entegrasyon_export');
        $this->load->view('admin/_footer');
	}
    
    public function Entegrasyon_export2()
	{
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        $data['baslangic']=$baslangic;
        $data['bitis']=$bitis;
        $id=1;
        $data=array(
                    'baslangic'=>$baslangic,
                    'bitis'=>$bitis,
                );
        $this->Database_Model->update_data("entegrasyon",$data,$id);
         
        $sorgu =$this->db->query("SELECT * FROM logo_gug WHERE TARIH BETWEEN '$baslangic' AND '$bitis' ORDER BY BORC DESC");
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/entegrasyon_export2');
       // $this->load->view('admin/_footer');
        
        
	}
    public function Entegrasyon_export3()
	{
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $id=$this->input->post('Id');
        $BORC=$this->input->post('BORC');
        $DEMIRBAS=$this->input->post('DEMIRBAS');
        $data=array(
                    'baslangic'=>$baslangic,
                    'bitis'=>$bitis,
                );
        $this->Database_Model->update_data("entegrasyon",$data,1);
        
        $data=array(
                    'BORC'=>$BORC,
                    'DEMIRBAS'=>$DEMIRBAS,
                );
        $this->Database_Model->update_data("logo_gug",$data,$id);
        
        $data['baslangic']=$this->input->post('baslangic');
        $data['bitis']=$this->input->post('bitis');
         
        $sorgu =$this->db->query("SELECT * FROM logo_gug WHERE TARIH BETWEEN '$baslangic' AND '$bitis' ORDER BY BORC DESC");
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/entegrasyon_export2');
        $this->load->view('admin/_footer');
        
        
	}
    //VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ 
    //VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ 
    //VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ 
    //VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ 
    //VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ VERİ ÇEKME CONTROLLERLERİ 
    
    public function veri_islemleri()
	{
       
        
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/veri_islemleri');
        $this->load->view('admin/_footer');
        
	}
        
    public function masrafmerkezleri_verileri(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORÇ, ACCDISTDET.TSIGN, 
                      ACCDISTDET.PREVLINEREF, PROJECT.CODE AS PROJE_KODU, PROJECT.NAME AS PROJE_ADI, PROJECT.LOGICALREF AS PRJ_LOGREF, 
                      PROJECT.ACTIVE AS PROJE_DURUM, GLTRN.ACCOUNTCODE AS FIS_KODU, GLTRN.DATE_ AS TARIH, GLTRN.LINEEXP AS ACIKLAMA, GLTRN.SPECODE AS GL_OZELKODU, 
                      GLTRN.LOGICALREF AS GL_LOGREF, GLTRN.SIGN, GLTRN.TRCURR AS GL_TRCURR, GLTRN.TRCODE, GLTRN.TRNET AS GL_TRNET, GLTRN.AMNT, 
                      GLTRN.ACCOUNTREF, GLFIC.FICHENO, GLFIC.TRCODE AS FIS_TRCODE, GLFIC.SPECODE AS FIS_OZELKODU, GLFIC.STATUS, GLFIC.CYPHCODE AS FIS_YETKIKODU,
                       GLFIC.BRANCH, GLFIC.DEPARTMENT, GLFIC.LOGICALREF AS FIS_LOGREF
FROM         dbo.LG_219_EMCENTER AS COSTC WITH (NOLOCK) LEFT OUTER JOIN
                      dbo.LG_219_01_ACCDISTDETLN AS ACCDISTDET WITH (NOLOCK) ON COSTC.LOGICALREF = ACCDISTDET.CENTERREF LEFT OUTER JOIN
                      dbo.LG_219_PROJECT AS PROJECT WITH (NOLOCK) ON ACCDISTDET.PROJECTREF = PROJECT.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFLINE AS GLTRN WITH (NOLOCK) ON ACCDISTDET.ACCFICHEREF = GLTRN.ACCFICHEREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFICHE AS GLFIC WITH (NOLOCK) ON GLTRN.ACCFICHEREF = GLFIC.LOGICALREF
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND (COSTC.SPECODE5 LIKE 'GUG')  AND  (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801)) AND GLTRN.DATE_ BETWEEN '$baslangic' AND '$bitis'
ORDER BY MM_KODU, GLFIC.DATE_, GL_LOGREF"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'ACCOUNTCODE'=>$rs->FIS_KODU,
                'MM_KODU'=>$rs->MM_KODU,
                'MM_ADI'=>$rs->MM_ADI,
                'MM_OZELKOD'=>$rs->MM_OZELKOD5,
                'BORC'=>$rs->BORÇ,
                'RAPORDOVIZ_NET'=>$rs->RAPORDOVIZ_NET,
                'ACIKLAMA'=>$rs->ACIKLAMA,
                'TARIH'=>$rs->TARIH,
                );
                $this->Database_Model->insert_data("logo_gug",$data);
             };
        
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    public function masrafmerkezleri_verileri_sil(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM logo_gug WHERE TARIH BETWEEN '$baslangic' AND '$bitis'");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    
    public function masrafmerkezleri_verileri_excel_al()
	{
       
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "ACCOUNTCODE","MM_KODU", "MM_ADI", "MM_OZELKOD","BORC","RAPORDOVIZ_NET","ACIKLAMA", "TARIH","DEMIRBAS","EKLENTI");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM logo_gug WHERE TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->MM_OZELKOD"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->RAPORDOVIZ_NET"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->ACIKLAMA"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->TARIH"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->DEMIRBAS"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->EKLENTI"));
          
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Masraf Merkezi Verilerini.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/Entegrasyon/veri_islemleri');
        }
    
    
      public function masraf_import(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['ACCOUNTCODE'] = $value['B'];
                      $inserdata[$i]['MM_KODU'] = $value['C'];
                      $inserdata[$i]['MM_ADI'] = $value['D'];
                      $inserdata[$i]['MM_OZELKOD'] = $value['E'];
                      $inserdata[$i]['BORC'] = $value['F'];
                      $inserdata[$i]['RAPORDOVIZ_NET'] = $value['G'];
                      $inserdata[$i]['ACIKLAMA'] = $value['H'];
                      $inserdata[$i]['TARIH'] = $value['I'];
                      $inserdata[$i]['DEMIRBAS'] = $value['J'];
                      $inserdata[$i]['EKLENTI'] = $value['K'];
                      $i++;
                    }               
                    $result = $this->import->importMasraf($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('ACCOUNTCODE', NULL);
        $this->db->delete('logo_gug');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    //ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ 
    //ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ 
    //ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ 
    //ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ 
    //ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ ÜRETİM CONTROLLERİLERİ 
    
    public function uretim_verileri(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT PROD.DATE_ AS TARIH, PROD.FICHENO AS FIS_NO, ITEMS.CODE AS MALZEME_KODU, ITEMS.NAME AS MALZEME_ADI,PROD.PLNAMOUNT AS PLANLANAN, PROD.ACTAMOUNT AS GERCEKLESEN, OPR.CODE AS OPERASYON_KODU, OPR.NAME AS OPERASYON_ADI,WRKS.CODE AS ISTASYON_KODU, WRKS.NAME AS ISTASYON_ADI, PROD.CAPIBLOCK_CREADEDDATE AS ISLEM_TARIHI
         
         FROM   dbo.LG_219_PRODORD AS PROD LEFT OUTER JOIN
                dbo.LG_219_OPERTION AS OPR INNER JOIN
                dbo.LG_219_DISPLINE AS DISP ON OPR.LOGICALREF = DISP.OPERATIONREF INNER JOIN
                dbo.LG_219_WORKSTAT AS WRKS ON DISP.WSREF = WRKS.LOGICALREF ON PROD.LOGICALREF = DISP.PRODORDREF LEFT OUTER JOIN
                dbo.LG_219_ITEMS AS ITEMS ON PROD.ITEMREF = ITEMS.LOGICALREF      
            
         WHERE OPR.CODE<>'10.PAKETLEME' AND OPR.CODE<>'02.KABA KIRMA ELEME' AND ITEMS.Name <> 'TUVENAN' AND OPR.CODE<>'90.GERİ DÖNÜŞÜM' AND DATE_ BETWEEN '$baslangic' AND '$bitis' ORDER BY PROD.FICHENO DESC"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'OPERASYON_ADI'=>$rs->OPERASYON_ADI,
                'OPERASYON_KODU'=>$rs->OPERASYON_KODU,
                'GERCEKLESEN'=>$rs->GERCEKLESEN,
                'PLANLANAN'=>$rs->PLANLANAN,
                'MALZEME_ADI'=>$rs->MALZEME_ADI,
                'MALZEME_KODU'=>$rs->MALZEME_KODU,
                'FIS_NO'=>$rs->FIS_NO,
                'TARIH'=>$rs->TARIH,
                'ISTASYON_KODU'=>$rs->ISTASYON_KODU,
                'ISTASYON_ADI'=>$rs->ISTASYON_ADI,
                'ISLEM_TARIHI'=>$rs->ISLEM_TARIHI,    
                );
                $this->Database_Model->insert_data("uretim_miktarlari",$data);
             };
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    public function uretim_verileri_sil(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM uretim_miktarlari WHERE TARIH BETWEEN '$baslangic' AND '$bitis'");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function uretim_verileri_excel_al()
	{
       
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "TARIH","FIS_NO", "MALZEME_KODU", "MALZEME_ADI","PLANLANAN","GERCEKLESEN","OPERASYON_KODU", "OPERASYON_ADI","ISTASYON_KODU","ISTASYON_ADI", "ISLEM_TARIHI","EKLENME_TARIHI","EKLENTI");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM uretim_miktarlari WHERE TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->TARIH"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->FIS_NO"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MALZEME_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->MALZEME_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->PLANLANAN"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->GERCEKLESEN"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->OPERASYON_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->OPERASYON_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->ISTASYON_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->ISTASYON_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->ISLEM_TARIHI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->EKLENME_TARIHI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->EKLENTI"));
          
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Üretim Verileri.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/Entegrasyon/veri_islemleri');
        }
    
    public function uretim_import(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['TARIH'] = $value['B'];
                      $inserdata[$i]['MALZEME_KODU'] = $value['C'];
                      $inserdata[$i]['MALZEME_ADI'] = $value['D'];
                      $inserdata[$i]['GERCEKLESEN'] = $value['E'];
                      $inserdata[$i]['OPERASYON_KODU'] = $value['F'];
                      $inserdata[$i]['OPERASYON_ADI'] = $value['G'];
                      $inserdata[$i]['ISTASYON_KODU'] = $value['H'];
                      $inserdata[$i]['ISTASYON_ADI'] = $value['I'];
                      $inserdata[$i]['EKLENTI'] = $value['J'];
                      $i++;
                    }               
                    $result = $this->import->importuretim($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('TARIH', NULL);
        $this->db->delete('uretim_miktarlari');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    //NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ 
    //NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ 
    //NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ 
    //NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ 
    //NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ NAKLİYE VERİLERİ 
    
    
    public function nakliye_faturalari_verileri(){ //KULANILACAK NAKLİYE GELİRLERİ KULANILACAK NAKLİYE GELİRLERİ KULANILACAK NAKLİYE GELİRLERİ KULANILACAK 
         
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
        
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT     (CASE WHEN INVOICE.TRCODE = 1 THEN 'Satýnalma Faturasý' WHEN INVOICE.TRCODE = 2 THEN 'Perakende Satýþ Ýade Faturasý' WHEN INVOICE.TRCODE = 3 THEN 'Toptan Satýþ Ýade Faturasý'
                       WHEN INVOICE.TRCODE = 4 THEN 'Alýnan Hizmet Faturasý' WHEN INVOICE.TRCODE = 5 THEN 'Alýnan Proforma Faturasý' WHEN INVOICE.TRCODE = 6 THEN 'Satýnalma Ýade Faturasý'
                       WHEN INVOICE.TRCODE = 7 THEN 'Perakende Satýþ Faturasý' WHEN INVOICE.TRCODE = 8 THEN 'Toptan Satýþ Faturasý' WHEN INVOICE.TRCODE = 9 THEN 'Verilen Hizmet Faturasý'
                       WHEN INVOICE.TRCODE = 10 THEN 'Verilen Proforma Faturasý' WHEN INVOICE.TRCODE = 12 THEN 'Alýnan Vade Farký Faturasý' WHEN INVOICE.TRCODE = 13 THEN 'Satýnalma Fiyat Farký Faturasý'
                       WHEN INVOICE.TRCODE = 14 THEN 'Satýþ Fiyat Farký Faturasý' WHEN INVOICE.TRCODE = 26 THEN 'Müstahsil Makbuzu' WHEN INVOICE.TRCODE = 1 THEN 'Satýnalma Faturasý'
                       WHEN INVOICE.TRCODE = 2 THEN 'Perakende Satýþ Ýade Faturasý' WHEN INVOICE.TRCODE = 3 THEN 'Toptan Satýþ Ýade Faturasý' WHEN INVOICE.TRCODE = 4 THEN 'Alýnan Hizmet Faturasý'
                       WHEN INVOICE.TRCODE = 5 THEN 'Alýnan Proforma Faturasý' WHEN INVOICE.TRCODE = 6 THEN 'Satýnalma Ýade Faturasý' WHEN INVOICE.TRCODE = 7 THEN 'Perakende Satýþ Faturasý'
                       WHEN INVOICE.TRCODE = 8 THEN 'Toptan Satýþ Faturasý' WHEN INVOICE.TRCODE = 9 THEN 'Verilen Hizmet Faturasý' WHEN INVOICE.TRCODE = 10 THEN 'Verilen Proforma Faturasý'
                       WHEN INVOICE.TRCODE = 12 THEN 'Alýnan Vade Farký Faturasý' WHEN INVOICE.TRCODE = 13 THEN 'Satýnalma Fiyat Farký Faturasý' WHEN INVOICE.TRCODE = 14 THEN
                       'Satýþ Fiyat Farký Faturasý' WHEN INVOICE.TRCODE = 26 THEN 'Müstahsil Makbuzu' END) AS FATURA_TURU, INVOICE.TRCODE AS TUR_KODU, 
                      INVOICE.DATE_ AS FATURA_TARIHI, INVOICE.FICHENO AS FATURA_NO, clcard.CODE AS CARI_KODU, clcard.DEFINITION_ AS CARI_ADI, 
                      INV.CODE AS MALZEME_KODU, INV.NAME AS MALZEME_ADI, SRV.CODE AS HIZMET_KODU, SRV.DEFINITION_ AS HIZMET_ADI, STLINE.LINETYPE AS SATIR_TIPI, 
                      STLINE.AMOUNT AS MIKTAR, STLINE.PRICE AS FIYAT, STLINE.TOTAL AS TOPLAM, PRJ.CODE AS PROJE_KODU, PRJ.NAME AS PROJE_ACIKLAMASI, 
                      clcard.LOGICALREF
        FROM         dbo.LG_219_CLCARD AS clcard RIGHT OUTER JOIN
                      dbo.LG_219_01_INVOICE AS INVOICE WITH (NOLOCK) ON clcard.LOGICALREF = INVOICE.CLIENTREF LEFT OUTER JOIN
                      dbo.LG_219_PROJECT AS PRJ RIGHT OUTER JOIN
                      dbo.LG_219_01_STLINE AS STLINE ON PRJ.LOGICALREF = STLINE.PROJECTREF ON INVOICE.LOGICALREF = STLINE.INVOICEREF LEFT OUTER JOIN
                      dbo.LG_219_ITEMS AS INV ON INV.LOGICALREF = STLINE.STOCKREF LEFT OUTER JOIN
                      dbo.LG_219_SRVCARD AS SRV ON SRV.LOGICALREF = STLINE.STOCKREF
					  WHERE (INVOICE.TRCODE IN(1,4,9)) AND (INVOICE.DATE_ BETWEEN '$baslangic' AND '$bitis')"); 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'FATURA_TURU'=>$rs->FATURA_TURU,
                'TUR_KODU'=>$rs->TUR_KODU,
                'FATURA_TARIHI'=>$rs->FATURA_TARIHI,
                'CARI_KODU'=>$rs->CARI_KODU,
                'CARI_ADI'=>$rs->CARI_ADI,
                'MALZEME_ADI'=>$rs->MALZEME_ADI,
                'MIKTAR'=>$rs->MIKTAR,
                'FIYAT'=>$rs->FIYAT,
                'TOPLAM'=>$rs->TOPLAM,
                'PROJE_KODU'=>$rs->PROJE_KODU,
                'PROJE_ACIKLAMASI'=>$rs->PROJE_ACIKLAMASI,
                );
                $this->Database_Model->insert_data("nakliye_tumfaturalar",$data);
             };
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function nakliye_faturalari_verileri_sil(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM nakliye_tumfaturalar WHERE FATURA_TARIHI BETWEEN '$baslangic' AND '$bitis'");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
    public function nakliye_gelirleri_excel_al()
	{
       
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "FATURA_TURU","TUR_KODU", "FATURA_TARIHI", "CARI_KODU","CARI_ADI","MALZEME_ADI","MIKTAR", "FIYAT","TOPLAM","PROJE_ACIKLAMASI");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM nakliye_tumfaturalar WHERE FATURA_TARIHI BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->FATURA_TURU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->TUR_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->FATURA_TARIHI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->CARI_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->CARI_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->MALZEME_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->MIKTAR"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->FIYAT"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->TOPLAM"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->PROJE_ACIKLAMASI"));
          
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="nakliye_gelirleri_excel_al.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/Entegrasyon/veri_islemleri');
        }
    
    
    public function nakliye_gelirleri_import(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['FATURA_TURU'] = $value['B'];
                      $inserdata[$i]['TUR_KODU'] = $value['C'];
                      $inserdata[$i]['FATURA_TARIHI'] = $value['D'];
                      $inserdata[$i]['CARI_KODU'] = $value['E'];
                      $inserdata[$i]['CARI_ADI'] = $value['F'];
                      $inserdata[$i]['MALZEME_ADI'] = $value['G'];
                      $inserdata[$i]['MIKTAR'] = $value['H'];
                      $inserdata[$i]['FIYAT'] = $value['I'];
                      $inserdata[$i]['TOPLAM'] = $value['J'];
                      $inserdata[$i]['PROJE_ACIKLAMASI'] = $value['K'];
                      $i++;
                    }               
                    $result = $this->import->importnakliyegelirlerihizmet($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('FATURA_TARIHI', NULL);
        $this->db->delete('nakliye_tumfaturalar');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    
    //NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ 
    //NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ 
    //NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ 
    //NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ 
    //NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ NAKLİYE SARFLARI VERİLERİ İŞLEMLERİ 
    public function nakliye_sarflari_verileri(){ 
         
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
        
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT PR.CODE AS PROJENODU, PR.NAME AS PROJEADI, MH.CODE AS HESAPKODU, MH.DEFINITION_ AS HESAPADI, MH.SPECODE AS OZELKODU, LN.DEBIT AS BORC, LN.CREDIT AS ALACAK,
        CASE WHEN LN.DEBIT > 0 THEN TRNET ELSE - TRNET END AS TUTAR, LN.LINEEXP AS SATIRACIKLASI, LN.DATE_ AS TARIH, MONTH(LN.DATE_) AS AY, YEAR(LN.DATE_) AS YIL, LN.BRANCH AS ISYERI
        FROM dbo.LG_219_01_EMFLINE AS LN inner JOIN
        dbo.LG_219_EMUHACC AS MH ON LN.ACCOUNTREF = MH.LOGICALREF inner JOIN
        dbo.LG_219_PROJECT AS PR ON LN.PROJECTREF = PR.LOGICALREF
        WHERE (LN.CANCELLED = 0) AND (PR.CODE IN('51ABK154','51ABK471','51ABK474','51ABK761','51NA675','51NA676','51NA678','51NA679','51NA680','51NC801','51NC802','51NC803','51NC804','51NC805','51BH884','51DZ950','51HH592','51AG903','51DD210','51EY187','51EY521','51EY522','51HC950','51ABH801','51BG188','51BN599','51EL871','51EP532','51EP613','51EP893','06BV4435','51BH805','51AR007','51HF014','51EZ371','51BH372','51EP821','51EZ132','51EH948','51ACM247','51ACL745','51ACL747','51ACJ987','51ACG740','51ACJ744','51ACH031','51ACH035','51ACH036','51ACP910','34GIT061','34GIT095','34GHV087','34GHV114','51ACJ740','51ACB116','51ACB117','51ACM118','51ABC030','51ABC032','51ABC036','51ABC038','51ABC044','51AB228','51AB227','51HV010','51EV812','51EY539','51BJ463','51HC776','51DN886','51HA754','51DE931','51HA415','06BY4354','06BY4355','51DK513','51HV071','51BG430','51ABM730','51EU491','51EZ485')) AND LN.DATE_ BETWEEN '$baslangic' AND '$bitis'"); 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'projenotu'=>$rs->PROJENODU,
                'projeadi'=>$rs->PROJEADI,
                'hesapkodu'=>$rs->HESAPKODU,
                'hesapadi'=>$rs->HESAPADI,
                'ozelkodu'=>$rs->OZELKODU,
                'borc'=>$rs->BORC,
                'alacak'=>$rs->ALACAK,
                'tutar'=>$rs->TUTAR,
                'satiraciklamasi'=>$rs->SATIRACIKLASI,
                'tarih'=>$rs->TARIH,
                'ay'=>$rs->AY,
                'yil'=>$rs->YIL,
                'isyeri'=>$rs->ISYERI,
                );
                $this->Database_Model->insert_data("nakliyesarflar",$data);
             };
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    
    public function nakliye_sarflari_verileri_sil(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM nakliyesarflar WHERE tarih BETWEEN '$baslangic' AND '$bitis' AND vade_toplam_sayi<>0 AND vade_sayisi<>0");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function nakliye_sarflari_excel_al()
	{
       
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "projenotu","projeadi", "hesapkodu", "hesapadi","borc","alacak","tutar", "satiraciklamasi","tarih");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM nakliyesarflar WHERE tarih BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->projenotu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->projeadi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->hesapkodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->hesapadi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->borc"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->alacak"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->tutar"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->satiraciklamasi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->tarih"));
          
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="nakliye_sarflari.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/Entegrasyon/veri_islemleri');
    }
    
    
    public function nakliye_sarflari_import(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['projenotu'] = $value['B'];
                      $inserdata[$i]['projeadi'] = $value['C'];
                      $inserdata[$i]['hesapkodu'] = $value['D'];
                      $inserdata[$i]['hesapadi'] = $value['E'];
                      $inserdata[$i]['borc'] = $value['F'];
                      $inserdata[$i]['alacak'] = $value['G'];
                      $inserdata[$i]['tutar'] = $value['H'];
                      $inserdata[$i]['satiraciklamasi'] = $value['I'];
                      $inserdata[$i]['tarih'] = $value['J'];
                      $i++;
                    }               
                    $result = $this->import->importnakliyesarflari($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('projenotu', NULL);
        $this->db->delete('nakliyesarflar');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    
    
    // NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE 
    // NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE 
    // NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE 
    // NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE 
    // NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE NAKLİYE SARFLARI KIRIKKALE 
    
    public function nakliye_sarflari_verileri_kirikkale(){ // KIRIKKALE SARF VERİLERİ KIRIKKALE SARF VERİLERİ KIRIKKALE SARF VERİLERİ KIRIKKALE SARF VERİLERİ KIRIKKALE SARF VERİLERİ 
         
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
        
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT     PR.CODE AS PROJENODU, PR.NAME AS PROJEADI, MH.CODE AS HESAPKODU, MH.DEFINITION_ AS HESAPADI, MH.SPECODE AS OZELKODU,  LN.DEBIT AS BORC, LN.CREDIT AS ALACAK, 
                  CASE WHEN LN.DEBIT > 0 THEN TRNET ELSE - TRNET END AS TUTAR, LN.LINEEXP AS SATIRACIKLASI, LN.DATE_ AS TARIH, MONTH(LN.DATE_) AS AY, YEAR(LN.DATE_) AS YIL, LN.BRANCH AS ISYERI
         FROM			  dbo.LG_219_01_EMFLINE AS LN inner  JOIN
                  dbo.LG_219_EMUHACC AS MH ON LN.ACCOUNTREF = MH.LOGICALREF inner   JOIN
                  dbo.LG_219_PROJECT AS PR ON LN.PROJECTREF = PR.LOGICALREF  
WHERE     (LN.CANCELLED = 0) AND (PR.CODE IN('06DJ1789','06DJ1790','51EV647','51EY112','51AZ635','51ED597','51EV637','51AL429','51HH591','51HH593')) AND LN.DATE_ BETWEEN '$baslangic' AND '$bitis'"); 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'projenotu'=>$rs->PROJENODU,
                'projeadi'=>$rs->PROJEADI,
                'hesapkodu'=>$rs->HESAPKODU,
                'hesapadi'=>$rs->HESAPADI,
                'ozelkodu'=>$rs->OZELKODU,
                'borc'=>$rs->BORC,
                'alacak'=>$rs->ALACAK,
                'tutar'=>$rs->TUTAR,
                'satiraciklamasi'=>$rs->SATIRACIKLASI,
                'tarih'=>$rs->TARIH,
                'ay'=>$rs->AY,
                'yil'=>$rs->YIL,
                'isyeri'=>$rs->ISYERI,
                );
                $this->Database_Model->insert_data("nakliyesarflar",$data);
             };
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function nakliye_sarflari_verileri_sil_kirikkale(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM nakliyesarflar WHERE tarih BETWEEN '$baslangic' AND '$bitis' AND vade_toplam_sayi<>0 AND vade_sayisi<>0");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    //NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ 
    //NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ 
    //NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ 
    //NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ 
    //NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ NAKLİYE ÜRÜN SATIŞINDAN GELİRLERİ 
    
    public function nakliye_urun_satisindan_gelir(){ // 
         
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
        
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT     TOP (100) PERCENT CASE STFICHE.FACTORYNR WHEN 1 THEN 'KIRIKKALE' ELSE 'MERKEZ' END AS FABRIKA, STLINE.DATE_ AS [SEVK_TARIHI], 
                      STFICHE.FICHENO AS [IRSALIYE NO], CLCARD.CODE AS [MUSTERI KODU], CLCARD.DEFINITION_ AS [MUSTERI_ADI], 
                      CASE ITEM.CARDTYPE WHEN 1 THEN 'Ticari Mal' WHEN 2 THEN 'Karma Koli' WHEN 3 THEN 'Depozitolu Mal' WHEN 4 THEN 'Sabit Kıymet' WHEN 10 THEN 'Hammadde'
                       WHEN 11 THEN 'Yarı Mamul' WHEN 12 THEN 'Mamul' WHEN 13 THEN 'Tüketim Malı' ELSE 'Malzeme Sınıfı' END AS [URUN TIPI], ITEM.CODE AS [URUN KODU], 
                      ITEM.NAME AS [URUN ADI], STLINE.AMOUNT AS MIKTAR, ROUND(CONVERT(FLOAT, ISNULL(REPLACE(STLINE.SPECODE, ',', '.'), 0)), 4) 
                      AS [LISTE_NAKLIYE_BIRIM_FIYATI], ROUND(CONVERT(FLOAT, ISNULL(REPLACE(STLINE.SPECODE2, ',', '.'), '0')), 4) AS [NAKLIYE_GERCEKLESEN_BIRIM_FIYAT], 
                      ROUND(CONVERT(FLOAT, ISNULL(REPLACE(STLINE.SPECODE, ',', '.'), 0)) * STLINE.AMOUNT, 4) AS LISTE_NAKLIYE_TOPLAMI, ROUND(CONVERT(FLOAT, 
                      ISNULL(REPLACE(STLINE.SPECODE2, ',', '.'), '0')) * STLINE.AMOUNT, 4) AS GERCEKLESEN_NAKLIYE_TOPLAMI, project.CODE, project.NAME
FROM         dbo.LG_219_PROJECT AS project RIGHT OUTER JOIN
                      dbo.LG_219_01_STLINE AS STLINE ON project.LOGICALREF = STLINE.PROJECTREF LEFT OUTER JOIN
                          (SELECT     STOCKREF, CLIENTREF, SUM(AMOUNT) AS [CIRO TONAJ]
                            FROM          dbo.LG_219_01_STLINE
                            WHERE      (DATE_ > '2019-12-31')
                            GROUP BY STOCKREF, CLIENTREF) AS STL ON STLINE.CLIENTREF = STL.CLIENTREF AND STLINE.STOCKREF = STL.STOCKREF LEFT OUTER JOIN
                      dbo.LG_219_01_STLINE AS STLINE_NAK ON STLINE.STFICHEREF = STLINE_NAK.STFICHEREF AND STLINE_NAK.STOCKREF = 8920 LEFT OUTER JOIN
                      dbo.LG_219_ITEMS AS ITEM ON STLINE.STOCKREF = ITEM.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_CLCARD AS CLCARD RIGHT OUTER JOIN
                      dbo.LG_219_01_STFICHE AS STFICHE ON CLCARD.LOGICALREF = STFICHE.CLIENTREF ON STLINE.STFICHEREF = STFICHE.LOGICALREF
WHERE     (STLINE.TRCODE IN (8)) AND (STLINE.LINETYPE = 0) AND (STLINE.CANCELLED = 0) AND (STLINE.STOCKREF <> 8920) AND project.CODE IS NOT NULL AND project.CODE <> 'K' AND project.CODE <> 'N' AND project.CODE <> 'V' AND STFICHE.FACTORYNR <> '1' AND STLINE.DATE_ BETWEEN '$baslangic' AND '$bitis'

"); 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'FABRIKA'=>$rs->FABRIKA,
                'SEVK_TARIHI'=>$rs->SEVK_TARIHI,
                'MUSTERI_ADI'=>$rs->MUSTERI_ADI,
                'MIKTAR'=>$rs->MIKTAR,
                'LISTE_NAKLIYE_BIRIM_FIYATI'=>$rs->LISTE_NAKLIYE_BIRIM_FIYATI,
                'NAKLIYE_GERCEKLESEN_BIRIM_FIYAT'=>$rs->NAKLIYE_GERCEKLESEN_BIRIM_FIYAT,
                'LISTE_NAKLIYE_TOPLAMI'=>$rs->LISTE_NAKLIYE_TOPLAMI,
                'GERCEKLESEN_NAKLIYE_TOPLAMI'=>$rs->GERCEKLESEN_NAKLIYE_TOPLAMI,
                'PROJE_KODU'=>$rs->CODE,
                'NAME'=>$rs->NAME,
                );
                $this->Database_Model->insert_data("nakliye_urunsatisi",$data);
             };
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function nakliye_urun_satisindan_gelir_sil(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM nakliye_urunsatisi WHERE SEVK_TARIHI BETWEEN '$baslangic' AND '$bitis'");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function nakliye_urun_satisindan_gelir_excel_al()
	{
       
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "EKLENME_TARIHI","FABRIKA", "SEVK_TARIHI", "MUSTERI_ADI","MIKTAR","LISTE_NAKLIYE_BIRIM_FIYATI","NAKLIYE_GERCEKLESEN_BIRIM_FIYAT", "LISTE_NAKLIYE_TOPLAMI","GERCEKLESEN_NAKLIYE_TOPLAMI","PROJE_KODU","NAME");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM nakliye_urunsatisi WHERE SEVK_TARIHI BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->EKLENME_TARIHI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->FABRIKA"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->SEVK_TARIHI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->MUSTERI_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->MIKTAR"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->LISTE_NAKLIYE_BIRIM_FIYATI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->NAKLIYE_GERCEKLESEN_BIRIM_FIYAT"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->LISTE_NAKLIYE_TOPLAMI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->GERCEKLESEN_NAKLIYE_TOPLAMI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->PROJE_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->NAME"));
          
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="nakliye_urun_satisindan_gelir_excel_al.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/Entegrasyon/veri_islemleri');
    }
    
    public function nakliye_urun_satisindan_gelir_import(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['EKLENME_TARIHI'] = $value['B'];
                      $inserdata[$i]['FABRIKA'] = $value['C'];
                      $inserdata[$i]['SEVK_TARIHI'] = $value['D'];
                      $inserdata[$i]['MUSTERI_ADI'] = $value['E'];
                      $inserdata[$i]['MIKTAR'] = $value['F'];
                      $inserdata[$i]['LISTE_NAKLIYE_BIRIM_FIYATI'] = $value['G'];
                      $inserdata[$i]['NAKLIYE_GERCEKLESEN_BIRIM_FIYAT'] = $value['H'];
                      $inserdata[$i]['LISTE_NAKLIYE_TOPLAMI'] = $value['I'];
                      $inserdata[$i]['PROJE_KODU'] = $value['J'];
                      $inserdata[$i]['NAME'] = $value['K'];
                      $i++;
                    }               
                    $result = $this->import->nakliye_urun_satisindan_gelir_import($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('SEVK_TARIHI', NULL);
        $this->db->delete('nakliye_urunsatisi');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    
    
    //NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ 
    //NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ 
    //NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ 
    //NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ 
    //NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ NAKLİYE AKARYAKIT VERİLERİ 
    
    public function nakliye_akaryakit_litre_hesabi(){ // 
         
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
        
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT     AMBAR, x.STFICHE_REFERANS, x.STLINE_REFERANS, [Fis_No], [Fis_Türü], [Belge_No], [Stfiche_Tarih], [Stline_Tarih], Ftime, [Stok_Kodu], [Stok_Adi],STOK_OZELKODU ,Birim, [Giris_Çikis], Miktar, 
                      STFICHELNNO, KALAN, Tutar, CODE, NAME
FROM         (SELECT     (SELECT     NAME
                                               FROM         dbo.L_CAPIWHOUSE AS CAPIWHOUSE
                                               WHERE     (NR = STLINE.SOURCEINDEX) AND (FIRMNR = 201)) AS AMBAR, STFICHE.LOGICALREF AS STFICHE_REFERANS, 
                                              STLINE.LOGICALREF AS STLINE_REFERANS, STFICHE.FICHENO AS [Fis_No], 
                                              CASE STFICHE.TRCODE WHEN 1 THEN 'Satinalma irsaliyesi' WHEN 2 THEN 'Perakende Satis iade irsaliyesi' WHEN 3 THEN 'Toptan Satis iade irsaliyesi' WHEN
                                               4 THEN 'Konsinye Çikis iade irsaliyesi' WHEN 5 THEN 'Konsinye Giris irsaliyesi' WHEN 6 THEN 'Satinalma iade irsaliyesi' WHEN 7 THEN 'Perakende Satis irsaliyesi'
                                               WHEN 8 THEN 'Toptan Satis irsaliyesi' WHEN 9 THEN 'Konsinye Çikis irsaliyesi' WHEN 10 THEN 'Konsinye Giris iade irsaliyesi' WHEN 11 THEN 'Fire Fisi'
                                               WHEN 12 THEN 'Sarf Fisi' WHEN 13 THEN 'Üretimden Giris Fisi' WHEN 14 THEN 'Devir Fisi' WHEN 25 THEN 'Ambar Fisi' WHEN 26 THEN 'Muhtahsil irsaliyesi'
                                               WHEN 50 THEN 'Sayim Fazlasi Fisi' WHEN 51 THEN 'Sayim Eksiði Fisi' ELSE '' END AS [Fis_Türü], STFICHE.DOCODE AS [Belge_No], 
                                              STFICHE.DATE_ AS [Stfiche_Tarih], STLINE.DATE_ AS [Stline_Tarih], STLINE.FTIME AS Ftime, ITEMS.CODE AS [Stok_Kodu], ITEMS.NAME AS [Stok_Adi], ITEMS.SPECODE as STOK_OZELKODU, 
                                              BIRIM.CODE AS Birim, CASE WHEN STLINE.IOCODE IN (1, 2) THEN 'Giris' WHEN STLINE.IOCODE IN (3, 4) THEN 'Çikis' ELSE '' END AS [Giris_Çikis], 
                                              CAST((CASE WHEN STLINE.IOCODE IN (1, 2) THEN 1 ELSE - 1 END) * STLINE.AMOUNT * (CASE WHEN ISNULL(UINFO2, 0) = 0 THEN 1 ELSE UINFO2 END) 
                                              / (CASE WHEN ISNULL(UINFO1, 0) = 0 THEN 1 ELSE UINFO1 END) AS float) AS Miktar, STLINE.STFICHELNNO, 0.00 AS KALAN, 
                                              (CASE WHEN STLINE.IOCODE IN (1, 2) THEN 1 ELSE - 1 END) * STLINE.VATMATRAH AS Tutar, PROJECT.CODE, PROJECT.NAME
                       FROM          dbo.LG_219_PROJECT AS PROJECT RIGHT OUTER JOIN
                                              dbo.LG_219_01_STLINE AS STLINE WITH (NOLOCK) ON PROJECT.LOGICALREF = STLINE.PROJECTREF RIGHT OUTER JOIN
                                              dbo.LG_219_01_STFICHE AS STFICHE WITH (NOLOCK) ON STLINE.STFICHEREF = STFICHE.LOGICALREF LEFT OUTER JOIN
                                              dbo.LG_219_ITEMS AS ITEMS WITH (NOLOCK) ON STLINE.STOCKREF = ITEMS.LOGICALREF LEFT OUTER JOIN
                                              dbo.LG_219_UNITSETL AS BIRIM WITH (NOLOCK) ON BIRIM.UNITSETREF = ITEMS.UNITSETREF AND BIRIM.MAINUNIT = 1
                       WHERE      (STFICHE.CANCELLED = 0) AND (STLINE.CANCELLED = 0) AND (STLINE.LINETYPE = 0) AND (STLINE.IOCODE IN (1, 2, 3, 4)) AND (STLINE.LPRODSTAT = 0) 
                                              AND (STLINE.DATE_ >= '$baslangic') AND (STLINE.DATE_ <= '$bitis') AND (STFICHE.TRCODE = 12) AND (PROJECT.CODE IS NOT NULL)) AS X"); 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'belge_no'=>$rs->Belge_No,
                'stfiche_tarih'=>$rs->Stfiche_Tarih,
                'stline_tarih'=>$rs->Stline_Tarih,
                'stok_kodu'=>$rs->Stok_Kodu,
                'stok_adi'=>$rs->Stok_Adi,
                'stok_ozelkodu'=>$rs->STOK_OZELKODU,
                'birim'=>$rs->Birim,
                'giris_cikis'=>$rs->Giris_Çikis,
                'miktar'=>$rs->Miktar,
                'tutar'=>$rs->Tutar,
                'code'=>$rs->CODE,
                'name'=>$rs->NAME,
                );
                $this->Database_Model->insert_data("nakliye_akaryakit",$data);
             };
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function nakliye_akaryakit_litre_hesabi_sil(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM nakliye_akaryakit WHERE stfiche_tarih BETWEEN '$baslangic' AND '$bitis'");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    public function nakliye_akaryakit_gelir_excel_al()
	{
       
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "belge_no","stfiche_tarih", "stline_tarih", "stok_kodu","stok_adi","stok_ozelkodu","birim", "giris_cikis","miktar","tutar","code","name");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM nakliye_akaryakit WHERE stfiche_tarih BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->belge_no"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->stfiche_tarih"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->stline_tarih"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->stok_kodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->stok_adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->stok_ozelkodu"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->birim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->giris_cikis"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->miktar"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->tutar"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->code"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->name"));
          
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="nakliye_akaryakit_gelir_excel_al.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/Entegrasyon/veri_islemleri');
    }
    
    public function nakliye_akaryakit_import(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['belge_no'] = $value['B'];
                      $inserdata[$i]['stfiche_tarih'] = $value['C'];
                      $inserdata[$i]['stline_tarih'] = $value['D'];
                      $inserdata[$i]['stok_kodu'] = $value['E'];
                      $inserdata[$i]['stok_adi'] = $value['F'];
                      $inserdata[$i]['stok_ozelkodu'] = $value['G'];
                      $inserdata[$i]['birim'] = $value['H'];
                      $inserdata[$i]['giris_cikis'] = $value['I'];
                      $inserdata[$i]['miktar'] = $value['J'];
                      $inserdata[$i]['tutar'] = $value['K'];
                      $inserdata[$i]['code'] = $value['L'];
                      $inserdata[$i]['name'] = $value['M'];
                      $i++;
                    }               
                    $result = $this->import->nakliye_akaryakit_import($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('stfiche_tarih', NULL);
        $this->db->delete('nakliye_akaryakit');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    // NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ 
    // NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ 
    // NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ 
    // NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ 
    // NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ NAKLİYE MAAŞ VERİLERİ İŞLEMLERİ 
    
    
    public function masrafmerkezleri_verileri_nakliye(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         
        $sorgu =$this->load->database('db2',TRUE)->query("SELECT COSTC.CODE AS MM_KODU, COSTC.DEFINITION_ AS MM_ADI, COSTC.SPECODE AS MM_OZELKODU, COSTC.CYPHCODE AS MM_YETKIKODU, 
                      COSTC.ACTIVE AS MM_DURUMU, COSTC.SPECODE2 AS MM_OZELKOD2, COSTC.SPECODE3 AS MM_OZELKOD3, COSTC.SPECODE4 AS MM_OZELKOD4, 
                      COSTC.SPECODE5 AS MM_OZELKOD5, COSTC.LOGICALREF AS MM_LOGREF, ACCDISTDET.TRCURR AS FIYAT_TL, ACCDISTDET.LOGICALREF AS LOGREF2, 
                      ACCDISTDET.TRNET AS FIYAT_NET, ACCDISTDET.REPORTNET AS RAPORDOVIZ_NET, ACCDISTDET.CREDEBNET AS BORÇ, ACCDISTDET.TSIGN, 
                      ACCDISTDET.PREVLINEREF, PROJECT.CODE AS PROJE_KODU, PROJECT.NAME AS PROJE_ADI, PROJECT.LOGICALREF AS PRJ_LOGREF, 
                      PROJECT.ACTIVE AS PROJE_DURUM, GLTRN.ACCOUNTCODE AS FIS_KODU, GLTRN.DATE_ AS TARIH, GLTRN.LINEEXP AS ACIKLAMA, GLTRN.SPECODE AS GL_OZELKODU, 
                      GLTRN.LOGICALREF AS GL_LOGREF, GLTRN.SIGN, GLTRN.TRCURR AS GL_TRCURR, GLTRN.TRCODE, GLTRN.TRNET AS GL_TRNET, GLTRN.AMNT, 
                      GLTRN.ACCOUNTREF, GLFIC.FICHENO, GLFIC.TRCODE AS FIS_TRCODE, GLFIC.SPECODE AS FIS_OZELKODU, GLFIC.STATUS, GLFIC.CYPHCODE AS FIS_YETKIKODU,
                       GLFIC.BRANCH, GLFIC.DEPARTMENT, GLFIC.LOGICALREF AS FIS_LOGREF
FROM         dbo.LG_219_EMCENTER AS COSTC WITH (NOLOCK) LEFT OUTER JOIN
                      dbo.LG_219_01_ACCDISTDETLN AS ACCDISTDET WITH (NOLOCK) ON COSTC.LOGICALREF = ACCDISTDET.CENTERREF LEFT OUTER JOIN
                      dbo.LG_219_PROJECT AS PROJECT WITH (NOLOCK) ON ACCDISTDET.PROJECTREF = PROJECT.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFLINE AS GLTRN WITH (NOLOCK) ON ACCDISTDET.ACCFICHEREF = GLTRN.ACCFICHEREF LEFT OUTER JOIN
                      dbo.LG_219_01_EMFICHE AS GLFIC WITH (NOLOCK) ON GLTRN.ACCFICHEREF = GLFIC.LOGICALREF
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0) AND COSTC.CODE='021.001' AND GLTRN.ACCOUNTCODE='720.1.100' AND GLTRN.DATE_ BETWEEN '$baslangic' AND '$bitis'
ORDER BY MM_KODU, GLFIC.DATE_, GL_LOGREF"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'ACCOUNTCODE'=>$rs->FIS_KODU,
                'MM_KODU'=>$rs->MM_KODU,
                'MM_ADI'=>$rs->MM_ADI,
                'MM_OZELKOD'=>$rs->MM_OZELKOD5,
                'BORC'=>$rs->BORÇ,
                'RAPORDOVIZ_NET'=>$rs->RAPORDOVIZ_NET,
                'ACIKLAMA'=>$rs->ACIKLAMA,
                'TARIH'=>$rs->TARIH,
                );
                $this->Database_Model->insert_data("logo_gug_nakliye_maaslari",$data);
             };
        
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    public function masrafmerkezleri_verileri_sil_nakliye(){
        
        
         $baslangic=$this->input->post('baslangic');
         $bitis=$this->input->post('bitis');
         $this->db->query("DELETE FROM logo_gug_nakliye_maaslari WHERE TARIH BETWEEN '$baslangic' AND '$bitis'");
         
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    
    public function masrafmerkezleri_verileri_excel_al_nakliye()
	{
       
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id", "ACCOUNTCODE","MM_KODU", "MM_ADI", "MM_OZELKOD","BORC","RAPORDOVIZ_NET","ACIKLAMA", "TARIH","DEMIRBAS","EKLENTI");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM logo_gug_nakliye_maaslari WHERE TARIH BETWEEN '$baslangic' AND '$bitis'")->result();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->ACCOUNTCODE"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MM_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MM_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->MM_OZELKOD"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->BORC"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->RAPORDOVIZ_NET"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->ACIKLAMA"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->TARIH"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->DEMIRBAS"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->EKLENTI"));
          
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Masraf Merkezi Verilerini.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/Entegrasyon/veri_islemleri');
        }
    
    
      public function masraf_import_nakliye(){
        
        if ($this->input->post('submit')) {
                 
                $path = './uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true, true, true, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['ACCOUNTCODE'] = $value['B'];
                      $inserdata[$i]['MM_KODU'] = $value['C'];
                      $inserdata[$i]['MM_ADI'] = $value['D'];
                      $inserdata[$i]['MM_OZELKOD'] = $value['E'];
                      $inserdata[$i]['BORC'] = $value['F'];
                      $inserdata[$i]['RAPORDOVIZ_NET'] = $value['G'];
                      $inserdata[$i]['ACIKLAMA'] = $value['H'];
                      $inserdata[$i]['TARIH'] = $value['I'];
                      $inserdata[$i]['DEMIRBAS'] = $value['J'];
                      $inserdata[$i]['EKLENTI'] = $value['K'];
                      $i++;
                    }               
                    $result = $this->import->importMasraf($inserdata);
                    
                    if($result){
                      $this->session->set_flashdata("olumlu","Soru Ekleme İşlemi Başarılı Olmuştur.");
                    }else{
                      $this->session->set_flashdata("olumsuz","Soru Ekleme İşlemi Başarısız!");
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $this->db->where('ACCOUNTCODE', NULL);
        $this->db->delete('logo_gug');
        redirect(base_url()."admin/Entegrasyon/veri_islemleri");
    }
    
    
    
        
}