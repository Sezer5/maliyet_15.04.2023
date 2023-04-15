<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerceklesendegerler extends CI_Controller {

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
    
    public function Gerceklesendegerler()
	{
        
        $sql = "CALL gerceklesendegerlerhmuretim()"; //*
        $this->db->query($sql);
        
        $sql = "CALL gerceklesendegerleriscilikenerjiamor()"; //*
        $this->db->query($sql);
        
        $sql = "CALL gerceklesenmaliyetler1()"; //*
        $this->db->query($sql);
        
        $sql = "CALL gerceklesendegerlerhmuretimkapli()"; //*
        $this->db->query($sql);
        
        $sql = "CALL gerceklesenozelurunler()"; //*
        $this->db->query($sql);
        
        $sql = "CALL gerceklesendegerlerortkop()"; //*
        $this->db->query($sql);
        
        
        $sorgu=$this->db->query("SELECT * FROM gerceklesendegerler WHERE istasyon_tipi='deg' AND Id < 60");
        $data["deg"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM gerceklesendegerler WHERE istasyon_tipi='dik' AND Id < 134");
        $data["dik"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM gerceklesendegerler WHERE istasyon_tipi='sar' AND Id < 67");
        $data["sar"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM gerceklesendegerler WHERE istasyon_tipi='bey' AND Id< 84");
        $data["bey"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM gerceklesendegerler WHERE istasyon_tipi='moz' AND Id< 95");
        $data["moz"]=$sorgu->result();
        
        $sorgu=$this->db->query("SELECT * FROM gerceklesendegerler WHERE istasyon_tipi='kap' AND Id < 133");
        $data["kap"]=$sorgu->result();
        
        
        

        $this->load->view('admin/_header',$data);
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/gerceklesendegerler');
        $this->load->view('admin/_footer');
        
	}
    
    public function tutardegistir($Id)
	{
        $eklenen_tutar=$this->input->post('eklenen_tutar');
	$data=array(
        'eklenen_tutar'=>$eklenen_tutar,
    );
        $this->Database_Model->update_data("gerceklesendegerler",$data,$Id);
         redirect(base_url()."admin/gerceklesendegerler/gerceklesendegerler");
    }
    public function action_maliyetler()
	{
       
        
        $this->load->model("excel_export_model");
        $this->load->library("excel");
        $object = new PHPExcel();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("ADI", "NET MALİYET TL","MALİYET %10 TL", "%10 TL","NET MALİYET USD","MALİYET %10 USD", "%10 USD");

        $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_export_model->fetch_data_maliyetler();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,str_replace(".",",","$row->adi"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,str_replace(".",",","$row->netmaliyet"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,str_replace(".",",","$row->maliyetyuzde10"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,str_replace(".",",","$row->artiyuzde10"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,str_replace(".",",","$row->netmaliyet_usd"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,str_replace(".",",","$row->maliyetyuzde10_usd"));
           $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,str_replace(".",",","$row->artiyuzde10_usd"));
           
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Maliyetler.xls"');
          $object_writer->save('php://output');
         redirect(base_url().'admin/maliyetler/maliyetler');
            }
   
    
    
    
}
