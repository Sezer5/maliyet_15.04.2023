<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasyonnakliye extends CI_Controller {

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
                $this->load->model('Main_model');
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
    
    public function Lokasyonnakliye()
	{
        $sql = "CALL birimfiyatnakliyesabitler()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlar ORDER BY sehir ASC");
        $data["sbt"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM logo_cariler ORDER BY cari_adi ASC");
        $data["cari_adi"]=$sorgu->result();
        
    
        $data['cities'] = $this->Main_model->getCity();
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/lokasyonnakliye');
       // $this->load->view('uye/_footer');
        
	}
    
    public function getCityDepartment(){ 
    // POST data 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('Main_model');
    
    // get data 
    $data['towns'] = $this->Main_model->getCityDepartment($postData);
    echo json_encode($data); 
  }
    public function parametre_guncelle($id)
	{
        $adi=$this->input->post('adi');
        $fiyat=$this->input->post('fiyat');
        
		
	$data=array(
        'adi'=>$adi,
		'fiyat'=>$fiyat,
        
    );
        $this->Database_Model->update_data("birimfiyatnakliye",$data,$id);
         redirect(base_url()."uye/birimfiyatnakliye/birimfiyatnakliye");
    }
    public function lokasyonnakliye_ekle()
	{
        $sirket=$this->input->post('sirket');
        $sehiradi=0;
        $sehirid=$this->input->post('sehirid');
        $ilceadi=0;
        $ilceid=$this->input->post('ilceid');
        $yolkm=$this->input->post('yolkm');
        $yakittuk=$this->input->post('yakittuk');
        $yolsure=$this->input->post('yolsure');
        $amortisman=$this->input->post('amortisman');
        $omur=$this->input->post('omur');
        $cekiciyagkm=$this->input->post('cekiciyagkm');
        $cekiciyagfiyat=$this->input->post('cekiciyagfiyat');
        $dorseyagkm=$this->input->post('dorseyagkm');
        $dorsebakim=$this->input->post('dorsebakim');
        $tonaj=$this->input->post('tonaj');
        $listefiyat=$this->input->post('listefiyat');
        $hgs=$this->input->post('hgs');
        $harcirah=$this->input->post('harcirah');
        $bakimonarim=$this->input->post('bakimonarim');
        $sorgu=$this->db->query("SELECT adi FROM sehir WHERE Id = $sehirid");
        $data["sehirad"]=$sorgu->result();
        foreach($data['sehirad'] as $sehir){
          $sehiradi=$sehir->adi;  
        };
        
        $sorgu=$this->db->query("SELECT adi FROM ilce WHERE Id = $ilceid");
        $data["ilcead"]=$sorgu->result();
        foreach($data['ilcead'] as $ilce){
          $ilceadi=$ilce->adi;  
        };
        
        $data=array(
            'sirket'=>$sirket,
		    'sehir_Id'=>$sehirid,
            'sehir'=>$sehiradi,
            'ilce'=>$ilceadi,
            'ilce_Id'=>$ilceid,
            'yolkm'=>$yolkm,
            'yakittukort'=>$yakittuk,
            'yolsuresi'=>$yolsure,
            'amortismandeger'=>$amortisman,
            'amortismanomur'=>$omur,
            'cekicibakimkm'=>$cekiciyagkm,
            'cekicibakimfiyat'=>$cekiciyagfiyat,
            'silobasbakimkm'=>$dorseyagkm,
            'silobasbakimfiyat'=>$dorsebakim,
            'tonaj'=>$tonaj,
            'listefiyat'=>$listefiyat,
            'hgsogs'=>$hgs,
            'harcirah'=>$harcirah,
            'bakimonarimaylik'=>$bakimonarim,
            
            
		);
        $this->Database_Model->insert_data("nakliyelokasyonlar",$data);
        $data=array(
		'sabit'=>1,
       );
        $this->Database_Model->update_data("ilce",$data,$ilceid);
         redirect(base_url()."uye/lokasyonnakliye/lokasyonnakliye");
        
	}
    public function lokasyonnakliye_detay($id)
	{
        $sql = "CALL birimfiyatnakliyesabitler()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlar WHERE Id=$id");
        $data["sbt"]=$sorgu->result();
                        
        $sorgu=$this->db->query("SELECT * FROM nakliyelastikhesabi WHERE Id < 2");
        $data["lastik"]=$sorgu->result();
        
    
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/lokasyonnakliye_detay');
        $this->load->view('uye/_footer');
        
	}
    public function listefiyat_guncelle($id)
	{
	$data=array(
        'listefiyat'=>$this->input->post('listefiyat'),
        
    );
        $this->Database_Model->update_data("nakliyelokasyonlar",$data,$id);
         redirect(base_url()."uye/Lokasyonnakliye/lokasyonnakliye_detay/$id");
    }
    public function sirket_guncelle($id)
	{
	$data=array(
        'sirket'=>$this->input->post('sirket'),
        
    );
        $this->Database_Model->update_data("nakliyelokasyonlar",$data,$id);
         redirect(base_url()."uye/Lokasyonnakliye/lokasyonnakliye_detay/$id");
    }
    
    public function tamirbakim_guncelle($id)
	{
	$data=array(
        'cekicibakimkm'=>$this->input->post('cekicibakimkm'),
        'cekicibakimfiyat'=>$this->input->post('cekicibakimfiyat'),
        'silobasbakimkm'=>$this->input->post('silobasbakimkm'),
        'silobasbakimfiyat'=>$this->input->post('silobasbakimfiyat'),
        
    );
        $this->Database_Model->update_data("nakliyelokasyonlar",$data,$id);
         redirect(base_url()."uye/Lokasyonnakliye/lokasyonnakliye_detay/$id");
    }
    public function amortisman_guncelle($id)
	{
	$data=array(
        'amortismandeger'=>$this->input->post('amortismandeger'),
        'amortismanomur'=>$this->input->post('amortismanomur'),
        
    );
        $this->Database_Model->update_data("nakliyelokasyonlar",$data,$id);
         redirect(base_url()."uye/Lokasyonnakliye/lokasyonnakliye_detay/$id");
    }
    public function yolbilgileri_guncelle($id)
	{
	$data=array(
        'yolsuresi'=>$this->input->post('yolsuresi'),
        'yolkm'=>$this->input->post('yolkm'),
        'yakittukort'=>$this->input->post('yakittukort'),
        
    );
        $this->Database_Model->update_data("nakliyelokasyonlar",$data,$id);
         redirect(base_url()."uye/Lokasyonnakliye/lokasyonnakliye_detay/$id");
    }
    public function degisengiderler_guncelle($id)
	{
	$data=array(
        'hgsogs'=>$this->input->post('hgsogs'),
        'harcirah'=>$this->input->post('harcirah'),
        'tonaj'=>$this->input->post('tonaj'),
        
    );
        $this->Database_Model->update_data("nakliyelokasyonlar",$data,$id);
         redirect(base_url()."uye/Lokasyonnakliye/lokasyonnakliye_detay/$id");
    }
    public function action_lokasyonnakliye()
	{
       
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Şehir", "İlçe","Personel Maaşı", "Kasko", "Trafik Sigortası", "MTV","Bakım Onarım","Amortisman","Yakıt Kull. Bedeli","Lastik Kull. Bedeli","Tamir & Bakım","HGS / OGS","Harcırah ","Değişen Giderler Toplamı","Ton başı maliyet","Araç başı kârlılık","Ton başına kârlılık");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_nakliye();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->sehir"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->ilce"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->personelmaas"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->kasko"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->trafiksigorta"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->mtv"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->bakimonarimaylik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->amortismanaylik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->yakitkullanim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->lastikkullanim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->tamirbakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->hgsogs"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->harcirah"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->degisengiderlertop"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->tonbasimaliyet"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->aracbasikar"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->tonbasikar"));
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Nakliyelokasyonlari.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'uye/lokasyonnakliye/lokasyonnakliye');
            }
    public function lokasyon_sil($id)
	{
        $this->db->query("DELETE FROM nakliyelokasyonlar WHERE Id=$id");
        redirect(base_url().'uye/lokasyonnakliye/lokasyonnakliye');
        
	}
    public function sirket_ekle()
	{
        
        $sirketadi=$this->input->post('sirketadi');
        $sehirid=$this->input->post('sehirid');
        $sehir_sirket=$this->input->post('sehir_sirket');
        $ilce_sirket=$this->input->post('ilce_sirket');
        $ilceid=$this->input->post('ilceid');
        $lokasyonid=$this->input->post('lokasyonid');
        $data=array(
                      "sirketadi"=>$sirketadi,
                      "sehir_Id"=>$sehirid,
                      "sehir"=>$sehir_sirket,
                      "ilce"=>$ilce_sirket,
                      "ilce_Id"=>$ilceid,
                      "lokasyon_id"=>$lokasyonid,
                      
		);
        $this->db->insert("nakliyelokasyonlarsirketler",$data);
        redirect(base_url().'uye/lokasyonnakliye/lokasyonnakliye_detay/'.$lokasyonid);
        
	}
    
    public function nakliye_raporlari()
	{
        $sorgu=$this->db->query("SELECT * FROM birimfiyatnakliye WHERE rapor_id IS NOT NULL");
        $data["degismeyenler"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlarrapor GROUP BY sehir,ilce");
        $data["lokasyonlar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliye_araclar WHERE rapor_id IS NOT NULL");
        $data["gerceklesen_nakliye"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliye_gerceklesenrapor");
        $data["gerceklesen_nakliye_raporlar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlarrapor GROUP BY rapor_id");
        $data["guncel_nakliye_raporlari"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/nakliye_raporlar');
        $this->load->view('uye/_footer');
        
	}
    
    //GİRİŞLERİ HIZLI YAPABİLMEK İÇİN METHODLAR
    
    public function deger_girisi()
	{
        $sql = "CALL birimfiyatnakliyesabitler()";
        $this->db->query($sql);
        
        $sorgu=$this->db->query("SELECT * FROM nakliyelokasyonlar ORDER BY sehir ASC");
        $data["sbt"]=$sorgu->result();
        
        
        
    
        $data['cities'] = $this->Main_model->getCity();
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/lokasyonnakliye_deger_girisi');
       // $this->load->view('uye/_footer');
        
	}
    public function deger_girisi_guncelle($id)
	{
	$data=array(
        'yolsuresi'=>$this->input->post('yolsuresi'),
        'yolkm'=>$this->input->post('yolkm'),
        
    );
        $this->Database_Model->update_data("nakliyelokasyonlar",$data,$id);
         redirect(base_url()."uye/Lokasyonnakliye/deger_girisi");
    }
}
