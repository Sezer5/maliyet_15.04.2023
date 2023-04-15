<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Butunexceller_eski extends CI_Controller {

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
                $this->load->model('excel_export_eski_maliyetler');
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
    
    public function Butunexceller_eski($id)
	{
        
        $this->load->model("excel_export_eski_maliyetler");
        $this->load->library("excel");
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);

        $table_columns = array("Mamul","HM","HM %","İşçilik","İşçilik %","Enerji","Enerji %","S.A.","S.A. %","Amortisman","Amortisman %","Bakım","Bakım %","Kaplama Maliyeti","Kaplama Maliyeti %","Net Maliyet","Maliyet");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->excel_export_eski_maliyetler->fetch_data_kapliort($id);

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->mamul"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->hm"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->hmyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->uretimiscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->iscilikyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->enerjiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->sa"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->sayuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->amortismanyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->bakimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->kaplamamaliyeti"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->kaplamamaliyetiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->netmaliyet"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->maliyet"));
           $excel_row++;
          }
        
        $object->createSheet();
        $object->setActiveSheetIndex(1);
        $table_columns = array("İstasyon", "Mamul","Saat Kapasite", "HM", "HM %", "İşçilik","İşçilik %","Enerji","Enerji %","Amortisman","Amortisman %","Bakım","Bakım %","Üretim Maliyeti","Üretim Maliyeti %","Genel Yönetim","Genel Yönetim %","Risk","Risk %","Net Maliyet","Maliyet");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->excel_export_eski_maliyetler->fetch_data_granul($id);

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->istasyon"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->mamul"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->saatkapasite"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->hm"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->hmyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->uretimiscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->iscilikyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->enerjiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->amortismanyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->bakimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->uretimmaliyeti"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->uretimmaliyetiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->genelyonetim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->genelyonetimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->risk"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->riskyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(19,$excel_row,str_replace(".",",","$row->netmaliyet"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(20,$excel_row,str_replace(".",",","$row->maliyet"));
           $excel_row++;
          }
        
        $object->createSheet();
        $object->setActiveSheetIndex(2);
        
        $table_columns = array("Mamul", "HM", "HM %", "İşçilik","İşçilik %","Enerji","Enerji %","Ö.K.","Ö.K. %","Amortisman","Amortisman %","Bakım","Bakım %","Üretim Maliyeti","Üretim Maliyeti %","Genel Yönetim","Genel Yönetim %","Risk","Risk %","Diğer","Diğer %","Net Maliyet");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->excel_export_eski_maliyetler->fetch_data_mikronizeort($id);

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->mamul"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->hm"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->hmyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->uretimiscilik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->iscilikyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->enerji"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->enerjiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->ok"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->okyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->amortisman"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->amortismanyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->bakim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->bakimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->uretimmaliyeti"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->uretimmaliyetiyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->genelyonetim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->genelyonetimyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->risk"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->riskyuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(19,$excel_row,str_replace(".",",","$row->diger"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(20,$excel_row,str_replace(".",",","$row->digeryuzde"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(21,$excel_row,str_replace(".",",","$row->netmaliyet"));
           $excel_row++;
          }
        
        $object->createSheet();
        $object->setActiveSheetIndex(3);
        
        $table_columns = array("Adı", "Saatlik Tüketim (Sa/Kw)","Günlük Tüketim","Aylık Tüketim","Günlük Çalışma Saati","Aylık Çalışılan Gün");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->excel_export_eski_maliyetler->fetch_data_enerji($id);

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->saatliktuketim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->gunluktuketim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->ayliktuketim"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->gunsaati"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->aydakigun"));
           $excel_row++;
          }
        
        $object->createSheet();
        $object->setActiveSheetIndex(4);
        
        $table_columns = array("Degirmen No","Seperatör No","0,120µ", "0,95µ", "0,85µ", "75µ", "65µ","650µ", "1µ", "2µ", "3µ", "5µ", "10µ", "20µ", "40µ", "60µ","70µ", "80µ","100µ");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $kapasite_degirmenler_data = $this->excel_export_eski_maliyetler->fetch_data_kapasite_degirmenler($id);

          $excel_row = 2;

          foreach($kapasite_degirmenler_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->degirmen_no"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->m0120"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->m095"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->m085"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->m75"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->m65"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->m650"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->m1"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->m2"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->m3"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->m5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->m10"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->m20"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->m40"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(15,$excel_row,str_replace(".",",","$row->m60"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(16,$excel_row,str_replace(".",",","$row->m70"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(17,$excel_row,str_replace(".",",","$row->m80"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(18,$excel_row,str_replace(".",",","$row->m100"));
           $excel_row++;
          }
        $excel_row++;
        
        $table_columns4 = array("KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER","KAPASİTE DİK DEĞİRMENLER",);

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 32, $field);
           $column++;
          }
        $excel_row++;
        $table_columns3 = array("Adı","0,120µ","0,95µ","0,85µ","0,75µ","0,65µ");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 34, $field);
           $column++;
          }
        $kapasite_dikdegirmenler_data = $this->excel_export_eski_maliyetler->fetch_data_kapasite_dikdegirmenler($id);

          $excel_row = 35;

          foreach($kapasite_dikdegirmenler_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->m0120"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->m095"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->m085"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->m075"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->m065"));
           $excel_row++;
          }
         $excel_row++;
        
        $table_columns4 = array("SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ","SARKAÇ",);

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 40, $field);
           $column++;
          }
        $excel_row++;
        $table_columns3 = array("Zaman","Adı","100","A100","KA100");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 42, $field);
           $column++;
          }
        $kapasite_sarkac_data = $this->excel_export_eski_maliyetler->fetch_data_kapasite_sarkac($id);

          $excel_row = 43;

          foreach($kapasite_sarkac_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->srk_ust"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->i100"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->a100"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->ka100"));
           $excel_row++;
          }
         $excel_row++;
            $table_columns4 = array("KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA","KAPLAMA");

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 49, $field);
           $column++;
          }
         $excel_row++;
        $table_columns3 = array("*","Adı","0,95K","0,85K","0,75K","GLS 926","0,65K","0,650K","1FK","1K","GLS 912","2K","3K","5K","10K");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column,51, $field);
           $column++;
          }
        $kapasite_kaplama_data = $this->excel_export_eski_maliyetler->fetch_data_kapasite_kpl_alt($id);

          $excel_row = 52;

          foreach($kapasite_kaplama_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->kplust"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->ist"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->k95"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->k85"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->k75"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->gls926"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->k65"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,str_replace(".",",","$row->k650"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,str_replace(".",",","$row->fk1"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,str_replace(".",",","$row->k1"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,str_replace(".",",","$row->gls912"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,str_replace(".",",","$row->k2"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(12,$excel_row,str_replace(".",",","$row->k3"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(13,$excel_row,str_replace(".",",","$row->k5"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(14,$excel_row,str_replace(".",",","$row->k10"));
           $excel_row++;
          }
        $excel_row++;
            $table_columns4 = array("GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL","GRANUL");

          $column = 0;
        foreach($table_columns4 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 63, $field);
           $column++;
          }
         $excel_row++;
        $table_columns3 = array("Adı","Saatlik","Günlük","Aylık");

          $column = 0;
        foreach($table_columns3 as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column,165, $field);
           $column++;
          }
        $kapasite_granul_data = $this->excel_export_eski_maliyetler->fetch_data_kapasite_granul($id);

          $excel_row = 166;

          foreach($kapasite_granul_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->urunadi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->saatlik"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->gunluk"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->aylik"));
           $excel_row++;
          }
        
        $object->createSheet();
        $object->setActiveSheetIndex(5);
        
        $table_columns = array("Adı", "Ton");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->excel_export_eski_maliyetler->fetch_data_stearikasit($id);

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->ton"));
           $excel_row++;
          }
        
        $object->createSheet();
        $object->setActiveSheetIndex(6);
        
        $table_columns = array("Adı", "Fiyatı");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->excel_export_eski_maliyetler->fetch_data_birimfiyatparametreler($id);

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->fiyat"));
           $excel_row++;
          }
        
        $object->createSheet();
        $object->setActiveSheetIndex(7);
        
         $table_columns = array("Adı", "Cari Değer","Faydalı Ömür", "Yıl/Tl", "Ay/Tl", "Saat/Tl");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->excel_export_eski_maliyetler->fetch_data_amortisman($id);

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
          header('Content-Disposition: attachment;filename="Maliyetler.xls"');
          $object_writer->save('php://output');
       
          redirect(base_url()."admin/home");
        
	}
    
   
         
    
}
