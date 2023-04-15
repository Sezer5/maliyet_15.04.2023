<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
                $this->load->database(); //Sayfada database'ye erişimi sağlar
				$this->load->model('Database_Model');
                $this->load->library('Http');
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
    public function login()
	{
        $this->load->view('uye/login_formu');
        
	}
    
     public function profilim()
	{
        $sorgu=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->oturum_uye["id"]);//üyeleri veri tabanından çek
        $data["veri"]=$sorgu->result();

		$sorgu=$this->db->query("SELECT * FROM uyeler WHERE Id!=".$this->session->oturum_uye["id"]);//üyeleri veri tabanından çek
		$data["kullanicilar"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/profilim');
        $this->load->view('uye/_footer');
        
	}
    
    function profil_guncelle_uye($Id){
        
        $data=array(
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
		);
        $this->session->set_flashdata("sonuc","Güncelleme Başarılı Olmuştur.");
        $this->Database_Model->update_data("uye",$data,$Id);
        redirect(base_url()."uye/home/profilim");
    }
    public function maliyet_personelleri()
	{
        $sorgu=$this->db->query("SELECT * FROM uyeler");//üyeleri veri tabanından çek
        $data["veri"]=$sorgu->result();
        
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/maliyet_personelleri');
        $this->load->view('uye/_footer');
        
	}
    function maliyet_personelleri_guncelle($Id){
        
        $data=array(
        'adsoy'=>$this->input->post('adsoy'),
        'email'=>$this->input->post('email'),
        'password'=>$this->input->post('password'),
        'durum'=>$this->input->post('durum'),    
		);
        $this->session->set_flashdata("sonuc","Güncelleme Başarılı Olmuştur.");
        $this->Database_Model->update_data("uyeler",$data,$Id);
        redirect(base_url()."uye/home/maliyet_personelleri");
    }
    function email_gonder()
    {
        $sTo="unalmissezer@gmail.com";
        $sSubject="Bilgilendirme";  
        $sMessage="Bu bir bilgilendirme ve deneme mailidir";
        $SMTP_HOST = "mail.nigtas.com";
        $SMTP_USER = "system@nigtas.com";
        $SMTP_PASS = "3a3c3b";
        $SMTP_PORT = "587";
       
        $this->load->library('email');
       
        // Set the default email config and Initialize
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = $SMTP_HOST;
        $config['smtp_user'] = $SMTP_USER;
        $config['smtp_pass'] = $SMTP_PASS;
        $config['smtp_port'] = $SMTP_PORT;
        $config['mailtype']  = 'text';
        $config['wordwrap']     = TRUE;       
        $this->email->initialize($config);
         $this->email->set_newline("\r\n");
            ;
            $this->email->clear(TRUE);
       
        $this->email->from('system@nigtas.com', 'Niğtaş');
        $this->email->to($sTo);
        $this->email->subject($sSubject);
        $this->email->message($sMessage);
       
        //if( !$this->CI->email->send())
        if( !$this->email->send())
        {
            echo "E-mail Gönderilemedi";
            
        }
        else
        {
            echo "Email sent";
            
        } 
           
    }
     public function logo(){
         
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
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801)) AND GLTRN.DATE_ BETWEEN '2022-10-01' AND '2022-12-31'
ORDER BY MM_KODU, GLFIC.DATE_, GL_LOGREF

"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
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
        redirect(base_url()."uye/home");
    }
    
    public function logo_kirikkale(){
         
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
WHERE     (ACCDISTDET.PREVLINEREF = GLTRN.LOGICALREF) AND (ACCDISTDET.CANCELLED = 0)   AND  (GLFIC.BRANCH IN (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 100)) AND 
                      (GLFIC.DEPARTMENT IN (0, 1, 11, 12, 21, 101, 201, 202, 203, 301, 401, 501, 601, 701, 801)) AND GLTRN.DATE_ > '2022-01-01' AND COSTC.CODE LIKE '101%'
ORDER BY MM_KODU, GLFIC.DATE_, GL_LOGREF

"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
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
                $this->Database_Model->insert_data("logo_gug_kirikkale",$data);
             };
        redirect(base_url()."uye/home");
    }
    
   public function logouretim(){
         
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT PROD.DATE_ AS TARIH, PROD.FICHENO AS FIS_NO, ITEMS.CODE AS MALZEME_KODU, ITEMS.NAME AS MALZEME_ADI,PROD.PLNAMOUNT AS PLANLANAN, PROD.ACTAMOUNT AS GERCEKLESEN, OPR.CODE AS OPERASYON_KODU, OPR.NAME AS OPERASYON_ADI,WRKS.CODE AS ISTASYON_KODU, WRKS.NAME AS ISTASYON_ADI, PROD.CAPIBLOCK_CREADEDDATE AS ISLEM_TARIHI
         
         FROM   dbo.LG_219_PRODORD AS PROD LEFT OUTER JOIN
                dbo.LG_219_OPERTION AS OPR INNER JOIN
                dbo.LG_219_DISPLINE AS DISP ON OPR.LOGICALREF = DISP.OPERATIONREF INNER JOIN
                dbo.LG_219_WORKSTAT AS WRKS ON DISP.WSREF = WRKS.LOGICALREF ON PROD.LOGICALREF = DISP.PRODORDREF LEFT OUTER JOIN
                dbo.LG_219_ITEMS AS ITEMS ON PROD.ITEMREF = ITEMS.LOGICALREF      
            
         WHERE OPR.CODE<>'10.PAKETLEME' AND OPR.CODE<>'02.KABA KIRMA ELEME' AND ITEMS.Name <> 'TUVENAN' AND OPR.CODE<>'90.GERİ DÖNÜŞÜM' AND DATE_ BETWEEN '2022-10-01' AND '2022-12-31' ORDER BY PROD.FICHENO DESC"); // MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU MASRAF MERKEZLERİ GİDERLERİ SORGUSU 
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
        redirect(base_url()."uye/home");
    }
    
    public function degerkontrol()
	{
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug WHERE (MM_KODU IN ('000.021','001.000','001.001','001.024','001.025','001.026','001.027','001.028','001.029','001.030','001.031','001.032','001.033','001.034','001.040','001.067','021.004'))  AND ACCOUNTCODE <> '730.3.033' AND ACCOUNTCODE <> '720.1.100' AND TARIH BETWEEN '2022-01-01' AND '2022-01-31'");
        $data["deger"]=$sorgu->result();
        

        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/degerkontrol');
        $this->load->view('uye/_footer');
        
	}
     public function send_sms()
	{
        
      
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/mesajkontrol');
        $this->load->view('uye/_footer');
         
        
	}
    
    public function sysggeor()
	{
        
        $sorgu=$this->db->query("SELECT * FROM granul_genel WHERE Id < 40");
        $data["granul_genel"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM kirikkale_dagitim WHERE Id < 7");
        $data["kirikkale_dagitim"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM gerceklesendegerler_ozelurunler");
        $data["ozel_urunler"]=$sorgu->result();
        
        $sql = "CALL maliyethesaplamamikronizekapli()";
        $this->db->query($sql);
        
        $sql = "CALL maliyethesaplamagranul()";
        $this->db->query($sql);
        
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id < 21");
        $data["mikronize"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 20 AND Id < 39");
        $data["kapli"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 38 AND Id < 56");
        $data["granulextra"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM maliyetler WHERE Id > 55  AND Id<67");
        $data["granul"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM raporlamalar ORDER BY Id DESC LIMIT 1");
        $data["son_rapor"]=$sorgu->result();
              
        $this->load->view('uye/_header',$data);
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/sysggeor');
        $this->load->view('uye/_footer');
         
        
	}
    
    function sysggeor_updt(){
        
        $Id=$this->input->post('Id');
        $granulyuzdesi=$this->input->post('granulyuzdesi');
        
        $data=array(
        'granulyuzdesi'=>$granulyuzdesi,
		);
        $this->Database_Model->update_data("granul_genel",$data,$Id);
        if($Id<18){
            $Id=$Id + 38;
            
        }else{
            $Id=$Id + 35;
        }
        $this->Database_Model->update_data("maliyetler",$data,$Id);
        redirect(base_url()."uye/home/sysggeor");
    }
    
    function maliyet_ha($Id){
        
        $data=array(
        'ha_kodu'=>$this->input->post('ha_kodu'),
            
		);
        $this->session->set_flashdata("sonuc","Güncelleme Başarılı Olmuştur.");
        $this->Database_Model->update_data("maliyetler",$data,$Id);
        redirect(base_url()."uye/home/sysggeor");
    }
    
    function sysggeor_updt_kpl(){
        
        $urunkodu=$this->input->post('urunkodu');
        $katsayi=$this->input->post('katsayi');
        $this->db->query("UPDATE kapli SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<26");
        $this->db->query("UPDATE kapliort SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<30");
        $this->db->query("UPDATE maliyetler SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<67");
        
        redirect(base_url()."uye/home/sysggeor");
    }
    
    function sysggeor_updt_mk(){
        
        $urunkodu=$this->input->post('urunkodu');
        $katsayi=$this->input->post('katsayi');
        $this->db->query("UPDATE mikronize SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<34");
        $this->db->query("UPDATE mikronizeort SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<42");
        $this->db->query("UPDATE maliyetler SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<67");
        redirect(base_url()."uye/home/sysggeor");
    }
    function sysggeor_updt_ger(){
        
        $urunkodu=$this->input->post('urunkodu');
        $katsayi=$this->input->post('katsayi');
        $this->db->query("UPDATE gerceklesendegerler SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<134");
        $this->db->query("UPDATE gerceklesendegerlerort SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<61");
        $this->db->query("UPDATE gerceklesenmaliyetler SET katsayi = '$katsayi' WHERE urunkodu='$urunkodu' AND Id<70");
        redirect(base_url()."uye/home/sysggeor");
    }
    function sysggeor_kirikkale_gm10(){
        
        $Id=$this->input->post('Id');
        $katsayi=$this->input->post('katsayi');
        
        $data=array(
        'katsayi'=>$katsayi,
		);
        $this->Database_Model->update_data("kirikkale_dagitim",$data,$Id);
        redirect(base_url()."uye/home/sysggeor");
    }
    function sysggeor_mikronize_gerceklesen(){
        
        $Id=$this->input->post('Id');
        $iscilik=$this->input->post('iscilik');
        $enerji=$this->input->post('enerji');
        $amortisman=$this->input->post('amortisman');
        $ok=$this->input->post('ok');
        $gug=$this->input->post('gug');
        
        $data=array(
        'iscilik'=>$iscilik,
        'enerji'=>$enerji,
        'amortisman'=>$amortisman,
        'ok'=>$ok,
        'gug'=>$gug,
		);
        $this->Database_Model->update_data("gerceklesendegerler_ozelurunler",$data,$Id);
        redirect(base_url()."uye/home/sysggeor");
    }
    
   
    
    public function nakliye_cariler(){
         
         $sorgu =$this->load->database('db2',TRUE)->query("select * from LG_219_CLCARD WHERE CODE NOT LIKE ('%120.02.%') AND SPECODE LIKE ('%MÜŞTERİ%')  AND CYPHCODE LIKE ('%YI-%')"); 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'cari_kodu'=>$rs->CODE,
                'cari_adi'=>$rs->DEFINITION_,
                'temsilci'=>$rs->CYPHCODE,
                'adres'=>$rs->ADDR1,
                'adres2'=>$rs->ADDR2,
                'sehir'=>$rs->CITY,
                );
                $this->Database_Model->insert_data("logo_cariler",$data);
             };
        redirect(base_url()."uye/home");
    }
    
    public function table_clean()
	{
        
        $tables = $this->db->list_tables();
        foreach ($tables as $table){
                        $table;
            if($table!='mikronizeort' && $table!='kapliort'){
                $fields = $this->db->field_data($table);
                                  foreach ($fields as $field){
                                      if($field->name=='rapor_id'){
                                          $this->db->query("DELETE FROM $table WHERE rapor_id=24");
                                          
                                          
                                          
                                      };
        }
	       }else{
                $fields = $this->db->field_data($table);
                                  foreach ($fields as $field){
                                      if($field->name=='rapor_id'){
                                          $this->db->query("DELETE FROM $table WHERE rapor_id=24");
                                          
                                          
                                          
                                      };
                
            }
        }
    }
}
    
    // NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI 
    // NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI 
    // NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI 
    // NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI 
    // NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI NAKLİYE SORGULARI BAŞLANGICI 
    
    public function nakliye_tumfaturalar(){ //KULANILACAK NAKLİYE GELİRLERİ KULANILACAK NAKLİYE GELİRLERİ KULANILACAK NAKLİYE GELİRLERİ KULANILACAK 
         
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
					  WHERE (INVOICE.TRCODE IN(9)) AND (INVOICE.DATE_ BETWEEN '2022-01-01' AND '2022-01-31')"); 
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
        redirect(base_url()."uye/home");
    }
    
     public function nakliyesarflar_nigde(){                //NAKLİYE İLE ALAKALI VERGİLER VE HARCIRAHLAR İÇİN KULLANILIYOR SADECE
         
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT PR.CODE AS PROJENODU, PR.NAME AS PROJEADI, MH.CODE AS HESAPKODU, MH.DEFINITION_ AS HESAPADI, MH.SPECODE AS OZELKODU, LN.DEBIT AS BORC, LN.CREDIT AS ALACAK,
        CASE WHEN LN.DEBIT > 0 THEN TRNET ELSE - TRNET END AS TUTAR, LN.LINEEXP AS SATIRACIKLASI, LN.DATE_ AS TARIH, MONTH(LN.DATE_) AS AY, YEAR(LN.DATE_) AS YIL, LN.BRANCH AS ISYERI
        FROM dbo.LG_219_01_EMFLINE AS LN inner JOIN
        dbo.LG_219_EMUHACC AS MH ON LN.ACCOUNTREF = MH.LOGICALREF inner JOIN
        dbo.LG_219_PROJECT AS PR ON LN.PROJECTREF = PR.LOGICALREF
        WHERE (LN.CANCELLED = 0) AND (PR.CODE IN('51ABK154','51ABK471','51ABK474','51ABK761','51NA675','51NA676','51NA678','51NA679','51NA680','51NC801','51NC802','51NC803','51NC804','51NC805','51BH884','51DZ950','51HH592','51AG903','51DD210','51EY187','51EY521','51EY522','51HC950','51ABH801','51BG188','51BN599','51EL871','51EP532','51EP613','51EP893','06BV4435','51BH805','51AR007','51HF014','51EZ371','51BH372','51EP821','51EZ132','51EH948')) AND LN.DATE_ BETWEEN '2022-08-01' AND '2022-11-30'"); 
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
        redirect(base_url()."uye/home");
    }
    
    public function nakliyesarflar_kirikkale(){                //NAKLİYE İLE ALAKALI VERGİLER VE HARCIRAHLAR İÇİN KULLANILIYOR SADECE
         
         $sorgu =$this->load->database('db2',TRUE)->query("SELECT     PR.CODE AS PROJENODU, PR.NAME AS PROJEADI, MH.CODE AS HESAPKODU, MH.DEFINITION_ AS HESAPADI, MH.SPECODE AS OZELKODU,  LN.DEBIT AS BORC, LN.CREDIT AS ALACAK, 
                  CASE WHEN LN.DEBIT > 0 THEN TRNET ELSE - TRNET END AS TUTAR, LN.LINEEXP AS SATIRACIKLASI, LN.DATE_ AS TARIH, MONTH(LN.DATE_) AS AY, YEAR(LN.DATE_) AS YIL, LN.BRANCH AS ISYERI
         FROM			  dbo.LG_219_01_EMFLINE AS LN inner  JOIN
                  dbo.LG_219_EMUHACC AS MH ON LN.ACCOUNTREF = MH.LOGICALREF inner   JOIN
                  dbo.LG_219_PROJECT AS PR ON LN.PROJECTREF = PR.LOGICALREF  
WHERE     (LN.CANCELLED = 0) AND (PR.CODE IN('06DJ1789','06DJ1790','51EV647','51EY112','51AZ635','51ED597','51EV637','51AL429','51HH591','51HH593')) AND LN.DATE_ BETWEEN '2022-08-01' AND '2022-11-30'"); 
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
        redirect(base_url()."uye/home");
    }
    
    
    
    public function nakliye_urunsatisi(){   //KULANILACAK NAKLİYE GELİRLERİ KULANILACAK NAKLİYE GELİRLERİ KULANILACAK NAKLİYE GELİRLERİ KULANILACAK 
         
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
WHERE     (STLINE.TRCODE IN (8)) AND (STLINE.LINETYPE = 0) AND (STLINE.CANCELLED = 0) AND (STLINE.STOCKREF <> 8920) AND project.CODE IS NOT NULL AND project.CODE <> 'K' AND project.CODE <> 'N' AND project.CODE <> 'V' AND STFICHE.FACTORYNR <> '1' AND STLINE.DATE_ BETWEEN '2022-01-01' AND '2022-01-31'

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
        redirect(base_url()."uye/home");
    }
    
    public function grafik_denemesi()
	{
        
        
              
        $this->load->view('uye/_header');
        $this->load->view('uye/_sidebar');
        $this->load->view('uye/grafik_denemesi');
        $this->load->view('uye/_footer');

         
        
	}
    
    public function nakliye_seferler(){
         
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
WHERE     (dbo.LG_219_01_STLINE.TRCODE IN (8, 9)) AND (dbo.LG_219_01_STLINE.LINETYPE = 0) AND (dbo.LG_219_01_STLINE.CANCELLED = 0) AND (dbo.LG_219_01_STLINE.DATE_ BETWEEN '2021-01-01' AND '2022-12-31') AND (dbo.LG_219_PROJECT.CODE<>'K') OR (dbo.LG_219_PROJECT.CODE<>NULL)

"); 
        $data["veri"]=$sorgu->result();
        
         foreach($data['veri'] as $rs){
                $data=array(
                'SEVK_TARIHI'=>$rs->SEVK_TARIHI,
                'IRSALIYE_NO'=>$rs->IRSALIYE_NO,
                'CARI_KODU'=>$rs->CARI_KODU,
                'CARI_ADI'=>$rs->CARI_ADI,
                'MAMUL_KODU'=>$rs->MAMUL_KODU,
                'MAMUL_ADI'=>$rs->MAMUL_ADI,
                'MAMUL_SATIS_GRUBU'=>$rs->MAMUL_SATIS_GRUBU,
                'MAMUL_TASIMA_TIPI'=>$rs->MAMUL_TASIMA_TIPI,
                'SEVKEDILEN_MIKTAR_KG'=>$rs->SEVKEDILEN_MIKTAR_KG,
                'SEVK_YERI'=>$rs->SEVK_YERI,
                'SIPARIS_NO'=>$rs->SIPARIS_NO,
                'PROJE_KODU'=>$rs->PROJE_KODU,
                'PROJE'=>$rs->PROJE,
                'NIGTAS_NAK_KG_FIYATI'=>$rs->NIGTAS_NAK_KG_FIYATI,
                'NAKLIYECI_KG_FIYATI'=>$rs->NAKLIYECI_KG_FIYATI,
                );
                $this->Database_Model->insert_data("nakliye_seferleri",$data);
             };
        redirect(base_url()."uye/home");
    }
    
    public function devexdeneme()
	{
        
        $sorgu=$this->db->query("SELECT * FROM logo_gug");
        $data["uye"]=$sorgu->result();
        
              
      //  $this->load->view('uye/_header',$data);
       // $this->load->view('uye/_sidebar');
        $this->load->view('uye/devexdeneme',$data);

         
        
	}
    
    public function nakliye_akaryakit(){
         
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
                                              AND (STLINE.DATE_ >= '2022-01-01') AND (STLINE.DATE_ <= '2022-12-31') AND (STFICHE.TRCODE = 12) AND (PROJECT.CODE IS NOT NULL)) AS X"); 
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
        redirect(base_url()."uye/home");
    }
    public function logo_gug_excel_al()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("Id","ACCOUNTCODE", "MM_KODU","MM_ADI", "MM_OZELKOD","BORC","RAPORDOVIZ_NET", "ACIKLAMA","TARIH");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->db->query("SELECT * FROM logo_gug WHERE BORC > '30000' AND TARIH BETWEEN '2022-10-01' AND '2022-11-30'")->result();

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
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="logogug.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'uye/home');
            }


}