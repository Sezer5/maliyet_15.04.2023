<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerceklesennakliye extends CI_Controller {

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
    
    public function Gerceklesennakliye()
	{
        

        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gerceklesennakliye');
        $this->load->view('admin/_footer');
        
	}
    public function Gerceklesennakliyesorgula()
	{
        $baslangic=$this->input->post('baslangic');
        $bitis=$this->input->post('bitis');
        $lokasyon=$this->input->post('lokasyon');
        
        $sorgu =$this->load->database('db2',TRUE)->query("SELECT dbo.LG_219_01_STLINE.DATE_ AS SEVK_TARIHI, dbo.LG_219_01_STFICHE.FICHENO AS IRSALIYE_NO, dbo.LG_219_CLCARD.CODE AS CARI_KODU, 
                      dbo.LG_219_CLCARD.DEFINITION_ AS CARI_ADI, dbo.LG_219_ITEMS.CODE AS MAMUL_KODU, dbo.LG_219_ITEMS.NAME AS MAMUL_ADI, 
                      dbo.LG_219_ITEMS.CYPHCODE AS MAMUL_SATIS_GRUBU, dbo.LG_219_ITEMS.SPECODE AS MAMUL_TASIMA_TIPI, 
                      dbo.LG_219_ITEMS.SPECODE2 AS MAMUL_TORBA_TIPI, dbo.LG_219_ITEMS.SPECODE3 AS MAMUL_PAKET_TIPI, 
                      dbo.LG_219_ITEMS.SPECODE4 AS MAMUL_AMBALAJ_KG, dbo.LG_219_01_STLINE.AMOUNT AS SEVKEDILEN_MIKTAR_KG, 
                      dbo.LG_219_CLCARD.CITY AS SEVK_YERI, dbo.LG_219_01_ORFICHE.FICHENO AS SIPARIS_NO, dbo.LG_219_PROJECT.CODE AS PROJE_KODU, 
                      dbo.LG_219_PROJECT.NAME AS PROJE,  ROUND(CONVERT(FLOAT, 
                      ISNULL(REPLACE(LG_219_01_STLINE.SPECODE, ',', '.'), 0)), 4) AS NIGTAS_NAK_KG_FIYATI, 
                      ROUND(CONVERT(FLOAT, ISNULL(REPLACE(LG_219_01_STLINE.SPECODE2, ',', '.'), '0')), 4) AS NAKLIYECI_KG_FIYATI
FROM         dbo.LG_219_ITEMS RIGHT OUTER JOIN
                      dbo.LG_219_01_STLINE ON dbo.LG_219_01_STLINE.STOCKREF = dbo.LG_219_ITEMS.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_STFICHE ON dbo.LG_219_01_STLINE.STFICHEREF = dbo.LG_219_01_STFICHE.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_PROJECT ON dbo.LG_219_01_STLINE.PROJECTREF = dbo.LG_219_PROJECT.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_ORFICHE ON dbo.LG_219_01_STLINE.ORDFICHEREF = dbo.LG_219_01_ORFICHE.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_SLSMAN ON dbo.LG_219_01_STFICHE.SALESMANREF = dbo.LG_SLSMAN.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_CLCARD ON dbo.LG_219_01_STFICHE.CLIENTREF = dbo.LG_219_CLCARD.LOGICALREF
WHERE     (dbo.LG_219_01_STLINE.TRCODE IN (8, 9)) AND (dbo.LG_219_01_STLINE.LINETYPE = 0) AND (dbo.LG_219_01_STLINE.CANCELLED = 0) AND (dbo.LG_219_01_STLINE.DATE_ BETWEEN '$baslangic' AND '$bitis') AND(dbo.LG_219_CLCARD.CITY IN('$lokasyon')) AND (dbo.LG_219_PROJECT.CODE<>'K') OR (dbo.LG_219_PROJECT.CODE<>NULL)

");
        $data["veri"]=$sorgu->result();
        $data["lokasyon"]=$lokasyon;
        $data["bitis"]=$bitis;
        $data["baslangic"]=$baslangic;
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gerceklesennakliyesorgula');
        
        
	}
    public function action_Gerceklesennakliyesorgula($baslangic,$bitis,$lokasyon)
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("SEVKTARIHI", "CARIADI","MAMULADI", "MAMULSATISGRUBU","MAMULTASIMATIPI","SEVKEDILENMIKTARTON", "SEVKYERI","PROJEKODU","NIGTASTONFIYATI", "NAKLIYECITONFIYATI");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->load->database('db2',TRUE)->query("SELECT dbo.LG_219_01_STLINE.DATE_ AS SEVK_TARIHI, dbo.LG_219_01_STFICHE.FICHENO AS IRSALIYE_NO, dbo.LG_219_CLCARD.CODE AS CARI_KODU, 
                      dbo.LG_219_CLCARD.DEFINITION_ AS CARI_ADI, dbo.LG_219_ITEMS.CODE AS MAMUL_KODU, dbo.LG_219_ITEMS.NAME AS MAMUL_ADI, 
                      dbo.LG_219_ITEMS.CYPHCODE AS MAMUL_SATIS_GRUBU, dbo.LG_219_ITEMS.SPECODE AS MAMUL_TASIMA_TIPI, 
                      dbo.LG_219_ITEMS.SPECODE2 AS MAMUL_TORBA_TIPI, dbo.LG_219_ITEMS.SPECODE3 AS MAMUL_PAKET_TIPI, 
                      dbo.LG_219_ITEMS.SPECODE4 AS MAMUL_AMBALAJ_KG, dbo.LG_219_01_STLINE.AMOUNT AS SEVKEDILEN_MIKTAR_KG, 
                      dbo.LG_219_CLCARD.CITY AS SEVK_YERI, dbo.LG_219_01_ORFICHE.FICHENO AS SIPARIS_NO, dbo.LG_219_PROJECT.CODE AS PROJE_KODU, 
                      dbo.LG_219_PROJECT.NAME AS PROJE,  ROUND(CONVERT(FLOAT, 
                      ISNULL(REPLACE(LG_219_01_STLINE.SPECODE, ',', '.'), 0)), 4) AS NIGTAS_NAK_KG_FIYATI, 
                      ROUND(CONVERT(FLOAT, ISNULL(REPLACE(LG_219_01_STLINE.SPECODE2, ',', '.'), '0')), 4) AS NAKLIYECI_KG_FIYATI
FROM         dbo.LG_219_ITEMS RIGHT OUTER JOIN
                      dbo.LG_219_01_STLINE ON dbo.LG_219_01_STLINE.STOCKREF = dbo.LG_219_ITEMS.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_STFICHE ON dbo.LG_219_01_STLINE.STFICHEREF = dbo.LG_219_01_STFICHE.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_PROJECT ON dbo.LG_219_01_STLINE.PROJECTREF = dbo.LG_219_PROJECT.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_01_ORFICHE ON dbo.LG_219_01_STLINE.ORDFICHEREF = dbo.LG_219_01_ORFICHE.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_SLSMAN ON dbo.LG_219_01_STFICHE.SALESMANREF = dbo.LG_SLSMAN.LOGICALREF LEFT OUTER JOIN
                      dbo.LG_219_CLCARD ON dbo.LG_219_01_STFICHE.CLIENTREF = dbo.LG_219_CLCARD.LOGICALREF
WHERE     (dbo.LG_219_01_STLINE.TRCODE IN (8, 9)) AND (dbo.LG_219_01_STLINE.LINETYPE = 0) AND (dbo.LG_219_01_STLINE.CANCELLED = 0) AND (dbo.LG_219_01_STLINE.DATE_ BETWEEN '$baslangic' AND '$bitis') AND(dbo.LG_219_CLCARD.CITY IN('$lokasyon')) AND (dbo.LG_219_PROJECT.CODE<>'K') OR (dbo.LG_219_PROJECT.CODE<>NULL)

")->result();

          $excel_row = 2;
          $sevkmiktar=0;
          $nigtas=0;
          $nakliyeci=0;
          foreach($employee_data as $row)
          {
           $sevkmiktar=$row->SEVKEDILEN_MIKTAR_KG / 1000;
           $nigtas=floatval($row->NIGTAS_NAK_KG_FIYATI) * 1000;
           $nakliyeci=floatval($row->NAKLIYECI_KG_FIYATI) * 1000;
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->SEVK_TARIHI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->CARI_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->MAMUL_ADI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->MAMUL_SATIS_GRUBU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->MAMUL_TASIMA_TIPI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$sevkmiktar"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->SEVK_YERI"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->PROJE_KODU"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$nigtas"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$nakliyeci"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="GERCEKLESENMALIYET.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/Gerceklesennakliye/Gerceklesennakliyesorgula');
            }
    
    
    //GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ 
    //GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ 
    //GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ 
    //GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ 
    //GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ 
    //GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ GERÇEKLEŞEN NAKLİYE MALİYETLERİ 
    
    public function gerceklesennakliyemaliyetleri()
	{
        $ay=0;
        $ilk=0;
        $son=0;
        $sorgu=$this->db->query("SELECT * FROM aydegerigerceklesen WHERE Id < 2");
        $data["aydegeri"]=$sorgu->result();
        
        foreach($data['aydegeri'] as $rs){
            $ay=$rs->aydegeri;
        };
        
        date_default_timezone_set('Europe/Istanbul');
        $date2 = date('Y-m-t'); 
        $son = date( "Y-m", strtotime( $date2 . "-$ay month"));
        
        $data['gercek_tarih']=$son;
        
        $date3=date('m');
                        
                        
                        if($date3 > 8){
                            $bas2=date("Y-09-01");
                            $son2=date("Y-08-31", strtotime('+1 years'));                        
                        }else{
                            $bas2=date("Y-09-01", strtotime('-1 years'));
                            $son2=date("Y-08-31");
                        }
        
        $sql = "CALL gerceklesen_nakliye()"; // HARCIRAH,HGSOGS,KASKO,MTV,SİGORTA,TRAFİKSİGORTA VAR
        $this->db->query($sql);
                
        $sorgu=$this->db->query("SELECT * FROM nakliye_araclar WHERE rapor_id=0");
        $data["gerceklesennakliyemaliyeti"]=$sorgu->result();

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gerceklesennakliyemaliyetleri');
        $this->load->view('admin/_footer');
        
	}
    public function Gerceklesennakliye_detaylar($p,$t)
	{
        $date = date('Y-m-01');
        $date2 = date('Y-m-d'); 
        $sorgu=$this->db->query("SELECT aydegeri FROM aydegerigerceklesen WHERE Id = 1");
        $data["zaman"]=$sorgu->result();
        $zaman_degeri=0;
        $bilgi=0;
        $data['plaka']=$p;
        foreach($data['zaman'] as $rs){
            $zaman_degeri=$rs->aydegeri;
        };
        $baslangic=date( "Y-m-01", strtotime( $date . "- $zaman_degeri month"));
        $bitis = date( "Y-m-t", strtotime( $date2 . "- $zaman_degeri month"));
        $data['baslangic']=$baslangic;
        $data['bitis']=$bitis;
        
        if($t==1){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('770.03.002','760.10.0.011','740.4.049','740.0.012','710.0.050','730.4.047')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
                        
            $data['bilgi']="Akaryakıt";
            $data['tur']=$t;
        }elseif($t==2){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('710.0.100','710.0.101','710.0.105','710.0.106','710.0.107','710.0.108','710.0.109','710.0.110','710.0.303','730.3.028','730.3.029','730.3.031','730.3.032','730.3.037','740.3.031','760.10.3.032','770.03.001','710.0.103')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
                        
            $data['bilgi']="Bakım";
            $data['tur']=$t;
        }elseif($t==3){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('730.3.040','730.3.043','740.3.036','740.3.037','740.4.042','740.4.044','770.02.001','760.10.4.040')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="Genel Üretim Giderleri";
            $data['tur']=$t;
        }elseif($t==4){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('740.4.046')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="Harcırah";
            $data['tur']=$t;
        }elseif($t==5){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('740.4.041')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="HGS / OGS";
            $data['tur']=$t;
        }elseif($t==6){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('740.4.053','730.4.061','760.10.4.052','760.20.4.052','770.03.020')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="Kasko";
            $data['tur']=$t;
        }elseif($t==7){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('710.0.102')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="Lastik";
            $data['tur']=$t;
        }elseif($t==8){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('740.5.053','730.5.052','770.05.002','760.20.5.050','760.10.5.050')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="MTV";
            $data['tur']=$t;
        }elseif($t==9){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('730.4.062','730.4.064','730.4.068','730.4.040','760.10.4.044','770.03.023')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="Sigorta";
            $data['tur']=$t;
        }elseif($t==10){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('770.03.021','760.20.4.053','760.10.4.051','740.4.052','730.4.060')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['bilgi']="Trafik Sigorta";
            $data['tur']=$t;
        }elseif($t==11){
            $sorgu=$this->db->query("SELECT * FROM nakliyesarflar WHERE (hesapkodu IN ('710.0.104')) AND projenotu = '$p' AND tarih BETWEEN '$baslangic' AND '$bitis'");
            $data["veri"]=$sorgu->result();
            $data['tur']=$t;
                        
            $data['bilgi']="Yağ Bakım";
            
            
        }
        
        $this->load->view('admin/gerceklesennakliye_detaylar',$data);
        
	}
    
    public function sarflar_guncelle($id,$p)
	{
        $AKTIF=$this->input->post('AKTIF');
        $tur=$this->input->post('tur');
        
		
	$data=array(
        'AKTIF'=>$AKTIF,
    );
        $this->Database_Model->update_data("nakliyesarflar",$data,$id);
         redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_detaylar/$p/$tur");
    }
    
    public function ekstreler_guncelle($id,$p)
	{
        $AKTIF=$this->input->post('AKTIF');
        $tur=$this->input->post('tur');
        
		
	$data=array(
        'AKTIF'=>$AKTIF,
    );
        $this->Database_Model->update_data("nakliye_sarfcikislari",$data,$id);
         redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_detaylar/$p/$tur");
    }
    
    public function Gerceklesennakliye_seferler($p)
	{
        $date = date('Y-m-01');
        $date2 = date('Y-m-t'); 
        $sorgu=$this->db->query("SELECT aydegeri FROM aydegerigerceklesen WHERE Id = 1");
        $data["zaman"]=$sorgu->result();
        $zaman_degeri=0;
        $bilgi=0;
        $data['plaka']=$p;
        foreach($data['zaman'] as $rs){
            $zaman_degeri=$rs->aydegeri;
        };
        $baslangic=date( "Y-m-01", strtotime( $date . "- $zaman_degeri month"));
        $bitis = date( "Y-m-t", strtotime( $date2 . "- $zaman_degeri month"));
        $data['baslangic']=$baslangic;
        $data['bitis']=$bitis;
        
        $sorgu =$this->db->query("SELECT * FROM nakliye_seferleri WHERE PROJE_KODU='$p' AND SEVK_TARIHI BETWEEN '$baslangic' AND '$bitis'");
        $data["veri"]=$sorgu->result();
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gerceklesennakliye_seferler');
        
        
	}
    
    
    
    
    
    public function Gerceklesennakliyemaliyeti_excelal()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id","PLAKA", "DURUM","MARKA", "MODEL","ARAÇ CİNSİ","MODEL YILI", "İŞYERİ","AKARYAKIT","BAKIM","GUG","HARCIRAH","HGS/OGS","KASKO","LASTİK","MTV","SİGORTA","TRAFİK SİGORTA","YAĞ");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM nakliye_araclar WHERE rapor_id=0")->result();

          $excel_row = 2;
          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->Id"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->plaka"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->durum"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->marka"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->model"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->arac_cinsi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->model_yili"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->isyeri"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->akaryakit"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->bakim"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->gug"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->harcirah"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->hgsogs"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->kasko"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->lastik"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->mtv"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->sigorta"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->trafiksigorta"));           
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->yag"));           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Gerceklesen_Nakliye.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/Gerceklesennakliye/gerceklesennakliyemaliyetleri');
            }
    
    public function Gerceklesennakliye_ekstralar($id,$plaka)
	{
        $bas=date("Y-01-01");
        $son=date("Y-12-31");
        
        $sorgu=$this->db->query("SELECT * FROM nakliye_araclar WHERE Id=$id");
        $data["gerceklesennakliyemaliyeti"]=$sorgu->result();
        $data["arac_id"]=$id;
        
        $sorgu=$this->db->query("SELECT * FROM nakliyesarflar_vergi WHERE projenotu='$plaka' AND tarih BETWEEN '$bas' AND '$son'");
        $data["vergiler"]=$sorgu->result();
       
        $this->load->view('admin/gerceklesennakliye_ekstralar',$data);
        
        
	}
    public function Gerceklesennakliye_ekstralar_guncelle($id)
	{
        $yol_km=$this->input->post('yol_km');
        $komisyon=$this->input->post('komisyon');
        $diger_gelirler=$this->input->post('diger_gelirler');
        $plaka=$this->input->post('plaka');
        $data=array(
            'yol_km'=>$yol_km,
            'komisyon'=>$komisyon,
            'diger_gelirler'=>$diger_gelirler,
        );
            $this->Database_Model->update_data("nakliye_araclar",$data,$id);
             redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_ekstralar/$id/$plaka");
    }
    
    public function Gerceklesennakliye_nakliye_gelirleri_detay($p)
	{
        $date = date('Y-m-01');
        $date2 = date('Y-m-t'); 
        $sorgu=$this->db->query("SELECT aydegeri FROM aydegerigerceklesen WHERE Id = 1");
        $data["zaman"]=$sorgu->result();
        $zaman_degeri=0;
        $bilgi=0;
        $data['plaka']=$p;
        foreach($data['zaman'] as $rs){
            $zaman_degeri=$rs->aydegeri;
        };
        $baslangic=date( "Y-m-01", strtotime( $date . "- $zaman_degeri month"));
        $bitis = date( "Y-m-t", strtotime( $date2 . "- $zaman_degeri month"));
        $data['baslangic']=$baslangic;
        $data['bitis']=$bitis;
        
        $sorgu =$this->db->query("SELECT * FROM nakliye_tumfaturalar WHERE PROJE_KODU ='$p' AND  FATURA_TARIHI BETWEEN '$baslangic' AND '$bitis'");
        $data["yalniz_nakliye"]=$sorgu->result();
        
        $sorgu =$this->db->query("SELECT * FROM nakliye_urunsatisi WHERE PROJE_KODU ='$p' AND  SEVK_TARIHI BETWEEN '$baslangic' AND '$bitis'");
        $data["urun_satisindan"]=$sorgu->result();
        
        $this->load->view('admin/gerceklesennakliye_nakliye_gelirleri_detay',$data);

        
        
	}
    public function Gerceklesennakliye_yalniz_nakliye_guncelle()
	{
        $Id=$this->input->post('Id');
        $FATURA_TURU=$this->input->post('FATURA_TURU');
        $TUR_KODU=$this->input->post('TUR_KODU');
        $FATURA_TARIHI=$this->input->post('FATURA_TARIHI');
        $CARI_KODU=$this->input->post('CARI_KODU');
        $CARI_ADI=$this->input->post('CARI_ADI');
        $MALZEME_ADI=$this->input->post('MALZEME_ADI');
        $MIKTAR=$this->input->post('MIKTAR');
        $FIYAT=$this->input->post('FIYAT');
        $TOPLAM=$this->input->post('TOPLAM');
        $PROJE_KODU=$this->input->post('PROJE_KODU');
        $PROJE_ACIKLAMASI=$this->input->post('PROJE_ACIKLAMASI');
        $data=array(
            'FATURA_TURU'=>$FATURA_TURU,
            'TUR_KODU'=>$TUR_KODU,
            'FATURA_TARIHI'=>$FATURA_TARIHI,
            'CARI_KODU'=>$CARI_KODU,
            'CARI_ADI'=>$CARI_ADI,
            'MALZEME_ADI'=>$MALZEME_ADI,
            'MIKTAR'=>$MIKTAR,
            'FIYAT'=>$FIYAT,
            'TOPLAM'=>$TOPLAM,
            'PROJE_KODU'=>$PROJE_KODU,
            'PROJE_ACIKLAMASI'=>$PROJE_ACIKLAMASI,
        );
            $this->Database_Model->update_data("nakliye_tumfaturalar",$data,$Id);
             redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_nakliye_gelirleri_detay/$PROJE_KODU");
    }
    
    public function Gerceklesennakliye_yalniz_nakliye_sil($id,$plaka)
	{
        
        $this->db->query("DELETE FROM nakliye_tumfaturalar WHERE Id=$id");	
         redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_nakliye_gelirleri_detay/$plaka");
    }
    
    
    
    public function Gerceklesennakliye_urun_satisindan_guncelle()
	{
        $Id=$this->input->post('Id');
        $FABRIKA=$this->input->post('FABRIKA');
        $SEVK_TARIHI=$this->input->post('SEVK_TARIHI');
        $MUSTERI_ADI=$this->input->post('MUSTERI_ADI');
        $MIKTAR=$this->input->post('MIKTAR');
        $LISTE_NAKLIYE_BIRIM_FIYATI=$this->input->post('LISTE_NAKLIYE_BIRIM_FIYATI');
        $NAKLIYE_GERCEKLESEN_BIRIM_FIYAT=$this->input->post('NAKLIYE_GERCEKLESEN_BIRIM_FIYAT');
        $LISTE_NAKLIYE_TOPLAMI=$this->input->post('LISTE_NAKLIYE_TOPLAMI');
        $GERCEKLESEN_NAKLIYE_TOPLAMI=$this->input->post('GERCEKLESEN_NAKLIYE_TOPLAMI');
        $PROJE_KODU=$this->input->post('PROJE_KODU');
        $NAME=$this->input->post('NAME');
        $data=array(
            'FABRIKA'=>$FABRIKA,
            'SEVK_TARIHI'=>$SEVK_TARIHI,
            'MUSTERI_ADI'=>$MUSTERI_ADI,
            'MIKTAR'=>$MIKTAR,
            'LISTE_NAKLIYE_BIRIM_FIYATI'=>$LISTE_NAKLIYE_BIRIM_FIYATI,
            'NAKLIYE_GERCEKLESEN_BIRIM_FIYAT'=>$NAKLIYE_GERCEKLESEN_BIRIM_FIYAT,
            'LISTE_NAKLIYE_TOPLAMI'=>$LISTE_NAKLIYE_TOPLAMI,
            'GERCEKLESEN_NAKLIYE_TOPLAMI'=>$GERCEKLESEN_NAKLIYE_TOPLAMI,
            'PROJE_KODU'=>$PROJE_KODU,
            'NAME'=>$NAME,
        );
            $this->Database_Model->update_data("nakliye_urunsatisi",$data,$Id);
             redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_nakliye_gelirleri_detay/$PROJE_KODU");
    }
    
    public function Gerceklesennakliye_urun_satisindan_sil($id,$plaka)
	{
        
        $this->db->query("DELETE FROM nakliye_urunsatisi WHERE Id=$id");	
         redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_nakliye_gelirleri_detay/$plaka");
    }
    
    public function bakim_bolumu($id,$p)
	{
        $date = date('Y-m-01');
        $date2 = date('Y-m-t'); 
        $sorgu=$this->db->query("SELECT aydegeri FROM aydegerigerceklesen WHERE Id = 1");
        $data["zaman"]=$sorgu->result();
        $zaman_degeri=0;
        $bilgi=0;
        $data['plaka']=$p;
        foreach($data['zaman'] as $rs){
            $zaman_degeri=$rs->aydegeri;
        };
        $baslangic=date( "Y-m-01", strtotime( $date . "- $zaman_degeri month"));
        $sayac=0;
        
        $tur=$this->input->post('tur');
        $vade_bolumu=$this->input->post('vade_bolumu');
        $sorgu =$this->db->query("SELECT * FROM nakliyesarflar WHERE Id ='$id'");
        $data["nakliyesarflari"]=$sorgu->result();
        foreach($data['nakliyesarflari'] as $rs)
            while($sayac < $vade_bolumu){
                $baslangic=date( "Y-m-01", strtotime( $date . "- $zaman_degeri month"));
                $baslangic=date( "Y-m-01", strtotime( $baslangic . "+$sayac month"));
                $data=array(
                'projenotu'=>$rs->projenotu,
                'projeadi'=>$rs->projeadi,
                'hesapkodu'=>$rs->hesapkodu,
                'hesapadi'=>$rs->hesapadi,
                'ozelkodu'=>$rs->ozelkodu,
                'borc'=>$rs->borc,
                'alacak'=>$rs->alacak,
                'tutar'=>$rs->tutar / $vade_bolumu,
                'satiraciklamasi'=>$rs->satiraciklamasi,
                'tarih'=>$baslangic,
                'ay'=>$rs->ay,
                'yil'=>$rs->yil,
                'isyeri'=>$rs->isyeri,
                'vade_sayisi'=>$sayac+1,
                'vade_toplam_sayi'=>$vade_bolumu,
                );
                $this->Database_Model->insert_data("nakliyesarflar",$data);
                $sayac=$sayac+1 ;
            }
                $this->db->query("DELETE FROM nakliyesarflar WHERE Id=$id");
                redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_detaylar/$p/$tur");
            
        
        
       
             
        }
    
    public function dorse_giderleri($p)
	{
        $date = date('Y-m-01');
        $date2 = date('Y-m-t'); 
        $sorgu=$this->db->query("SELECT aydegeri FROM aydegerigerceklesen WHERE Id = 1");
        $data["zaman"]=$sorgu->result();
        $zaman_degeri=0;
        $bilgi=0;
        $data['plaka']=$p;
        foreach($data['zaman'] as $rs){
            $zaman_degeri=$rs->aydegeri;
        };
        $baslangic=date( "Y-m-01", strtotime( $date . "- $zaman_degeri month"));
        $bitis = date( "Y-m-t", strtotime( $date2 . "- $zaman_degeri month"));
        $data['baslangic']=$baslangic;
        $data['bitis']=$bitis;
        
        $sorgu =$this->db->query("SELECT * FROM nakliyesarflar_sorgu WHERE (projenotu IN ('51ACB116','51ACB117','51ACM118','51ABC030','51ABC032','51ABC036','51ABC038','51ABC044','51AB228','51AB227','51HV010','51EV812','51EY539','51BJ463','51HC776','51DN886','51HA754','51DE931','51HA415','06BY4354','06BY4355','51DK513','51HV071','51BG430','51ABM730','51EU491','51EZ485')) AND  tarih BETWEEN '$baslangic' AND '$bitis'");
        $data["dorse_giderleri"]=$sorgu->result();
        
        $sorgu =$this->db->query("SELECT COUNT(Id) as kayitsayisi FROM nakliye_araclar WHERE rapor_id=0 AND aktif IS NULL");
        $data["arac_sayisi"]=$sorgu->result();
                
        
        $this->load->view('admin/dorse_giderleri',$data);

        
        
	}
    
    public function Gerceklesennakliye_ekstralar_vergiekle()
	{
        $plaka=$this->input->post('plaka');
        $hesapkodu=$this->input->post('hesapkodu');
        $aciklama=$this->input->post('aciklama');
        $tutar=$this->input->post('tutar');
        $arac_id=$this->input->post('arac_id');
        $tarih=date("Y-01-02");
        $data=array(
            'projenotu'=>$plaka,
            'hesapkodu'=>$hesapkodu,
            'satiraciklamasi'=>$aciklama,
            'tarih'=>$tarih,
            'tutar'=>$tutar,
        );
            $this->Database_Model->insert_data("nakliyesarflar_vergi",$data);
            redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_ekstralar/$arac_id/$plaka");
    }
    
    public function Gerceklesennakliye_ekstralar_vergisil($id,$plaka,$arac_id)
	{
        
        $this->db->query("DELETE FROM nakliyesarflar_vergi WHERE Id=$id");	
         redirect(base_url()."admin/Gerceklesennakliye/Gerceklesennakliye_ekstralar/$arac_id/$plaka");
    }
}