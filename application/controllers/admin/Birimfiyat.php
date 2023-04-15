<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Birimfiyat extends CI_Controller {

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
    
    public function Birimfiyat()
	{
        
        $sql = "CALL birimfiyatsarflarhesapla()";
        $this->db->query($sql);
        
        $sql = "CALL iscilikmaliyethesabi()"; // BAKIM ONARIM İŞÇİLERİ HESABI DA VAR
        $this->db->query($sql);
        
        $sql = "CALL iscilikistasyonhesaplamalari()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM bakimgygriskdigeroranlari WHERE Id< 59");
        $data["gyg"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyatparametreler WHERE Id< 87 OR Id=93 OR Id=94");
        $data["parametre"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyatsarflar WHERE Id < 55");
        $data["sarflar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM zamandegerleri WHERE Id < 200");
        $data["zaman"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM stearikasit WHERE Id < 17");
        $data["stearikasit"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM iscilikgunhesabi WHERE Id < 2");
        $data["iscilikgun"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM iscilikmaliyethesabi WHERE Id < 18");
        $data["iscilikmaliyet"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM iscilikbakimonarim WHERE Id < 18");
        $data["iscilikbakimonarim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM iscilikistasyon WHERE Id < 22");
        $data["istasyon"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM birimfiyatnakliye WHERE rapor_id IS NULL");
        $data["sbt"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelastikhesabi WHERE rapor_id IS NULL");
        $data["lastik"]=$sorgu->result();
        
        $sql = "CALL ambalajmaliyeti()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM ambalajmaliyeti WHERE Id<13");
        $data["ambalajmaliyeti"]=$sorgu->result();
       
        
        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/birimfiyat');
        $this->load->view('admin/_footer');
        
	}
    
    public function parametre_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $fiyat=$this->input->post('fiyat');
		
	$data=array(
        'adi'=>$adi,
		'fiyat'=>$fiyat,
    );
        $this->Database_Model->update_data("birimfiyatparametreler",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    
    public function birimfiyat_parametreler_excel()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Adı", "Fiyatı");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_birimfiyatparametreler();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->fiyat"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Birimfiyatparametreler.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/birimfiyat/birimfiyat');
    }
    
    public function birimfiyatsarf_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $fiyat=$this->input->post('fiyat');
        $yuzde=$this->input->post('yuzde');
		
                $data=array(
                    'adi'=>$adi,
                    'fiyat'=>$fiyat,
                    'yuzde'=>$yuzde,
                );
        $this->Database_Model->update_data("birimfiyatsarflar",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    public function birimfiyatsarflar_excel()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Adı", "Yüzde","Fiyat","Fiyat Birimi","Fireli Fiyat","Fireli Fiyat Birimi","Son Fiyat","Son Fiyat Birimi","Açıklama");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_birimfiyatsarflar();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->yuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->fiyat"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->fiyatbirimi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->firelifiyat"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->firelifiyatbirimi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->sonfiyat"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->sonfiyatbirimi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->aciklama"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Birimfiyatparametreler.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/birimfiyat/birimfiyat');
    }
    public function gyg_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $gercekoran=$this->input->post('gercekoran');
                $data=array(
                    'adi'=>$adi,
                    'gercekoran'=>$gercekoran,
                );
        $this->Database_Model->update_data("bakimgygriskdigeroranlari",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    public function zamandegeri_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $gunsaati=$this->input->post('gunsaati');  
        $aydakigun=$this->input->post('aydakigun');
                $data=array(
                    'adi'=>$adi,
                    'gunsaati'=>$gunsaati,
                    'aydakigun'=>$aydakigun,
                );
        $this->Database_Model->update_data("zamandegerleri",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    public function sa_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $ton=$this->input->post('ton');  
                $data=array(
                    'adi'=>$adi,
                    'ton'=>$ton,
                );
        $this->Database_Model->update_data("stearikasit",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    public function sa_excel()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Adı", "Ton");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_stearikasit();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->ton"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Stearikasit.xls"');
          $object_writer->save('php://output');
          redirect(base_url().'admin/birimfiyat/birimfiyat');
    }
    public function calismagunleri_guncelle($id)
	{
        $dini=$this->input->post('dini');
        $haftasonu=$this->input->post('haftasonu');
        $senelik=$this->input->post('senelik');
        $mazeret=$this->input->post('mazeret');
        $toplamgun=$this->input->post('toplamgun');
		
                $data=array(
                    'dini'=>$dini,
                    'haftasonu'=>$haftasonu,
                    'senelik'=>$senelik,
                    'mazeret'=>$mazeret,
                    'toplamgun'=>$toplamgun,
                );
        $this->Database_Model->update_data("iscilikgunhesabi",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    public function iscilikmaliyeti_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $fiyat=$this->input->post('fiyat');  
                $data=array(
                    'adi'=>$adi,
                    'fiyat'=>$fiyat,
                );
        $this->Database_Model->update_data("iscilikmaliyethesabi",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    
    public function iscilikbakimonarim_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $fiyat=$this->input->post('fiyat');  
                $data=array(
                    'adi'=>$adi,
                    'fiyat'=>$fiyat,
                );
        $this->Database_Model->update_data("iscilikbakimonarim",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    
    public function iscilikistasyon_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $kisisayisi=$this->input->post('kisisayisi');  
                $data=array(
                    'adi'=>$adi,
                    'kisisayisi'=>$kisisayisi,
                );
        $this->Database_Model->update_data("iscilikistasyon",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    
    public function parametre_guncelle_nakliye($id)
	{
        $adi=$this->input->post('adi');
        $fiyat=$this->input->post('fiyat');
        
		
	$data=array(
        'adi'=>$adi,
		'fiyat'=>$fiyat,
        
    );
        $this->Database_Model->update_data("birimfiyatnakliye",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    
    public function parametre_guncelle_lastik($id)
	{
        $cekicionmiktar=$this->input->post('cekicionmiktar');
        $cekicionomur=$this->input->post('cekicionomur');
        $cekicionbrfiyat=$this->input->post('cekicionbrfiyat');
        $cekicicekermiktar=$this->input->post('cekicicekermiktar');
        $cekicicekeromur=$this->input->post('cekicicekeromur');
        $cekicicekerbrfiyat=$this->input->post('cekicicekerbrfiyat');
        $dorsepilotmiktar=$this->input->post('dorsepilotmiktar');
        $dorsepilotomur=$this->input->post('dorsepilotomur');
        $dorsepilotbrfiyat=$this->input->post('dorsepilotbrfiyat');
        
		
	$data=array(
        'cekicionmiktar'=>$cekicionmiktar,
		'cekicionomur'=>$cekicionomur,
        'cekicionbrfiyat'=>$cekicionbrfiyat,
		'cekicicekermiktar'=>$cekicicekermiktar,
        'cekicicekeromur'=>$cekicicekeromur,
		'cekicicekerbrfiyat'=>$cekicicekerbrfiyat,
        'dorsepilotmiktar'=>$dorsepilotmiktar,
		'dorsepilotomur'=>$dorsepilotomur,
        'dorsepilotbrfiyat'=>$dorsepilotbrfiyat,
        
    );
        $this->Database_Model->update_data("nakliyelastikhesabi",$data,$id);
         redirect(base_url()."admin/birimfiyat/birimfiyat");
    }
    
    public function ambalajmaliyeti_guncelleme($Id)
	{
        $tablo="ambalajmaliyeti";
        $fiyat_tl=$this->input->post('fiyat_tl');
        $fiyat_usd=$this->input->post('fiyat_usd');
        $fiyat_euro=$this->input->post('fiyat_euro');
        $fire=$this->input->post('fire');
        $data=array(
            'fiyat_tl'=>$fiyat_tl,
            'fiyat_usd'=>$fiyat_usd,
            'fiyat_euro'=>$fiyat_euro,
            'fire'=>$fire,
        );
            $this->Database_Model->update_data($tablo,$data,$Id);
            redirect(base_url()."admin/birimfiyat/birimfiyat");
    }


	public function paketleme_excel()
	{


		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("Adı","Fiyat TL","Fiyat $","Fiyat €","Fire","Sonuç TL","Paketleme Maliyeti TL","Toplam TL","Satınalma Birimi");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->Excel_export_model->fetch_data_ambalaj_maliyetleri();

		$excel_row = 2;

		foreach($employee_data as $row)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->fiyat_tl"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->fiyat_usd"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->fiyat_euro"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->fire"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->sonuc_tl"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->paketleme"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->toplam"));
			$object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->satinalma_birim"));
			$excel_row++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Ambalajmaliyetleri.xls"');
		$object_writer->save('php://output');
		redirect(base_url().'admin/birimfiyat/birimfiyat');
	}
    
    
   
    
    
    
}
