<?php
class Import_model extends CI_Model {
     public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
    public function importData($data) {
 
        $res = $this->db->insert_batch('ilce',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
    public function importMasraf($data) {
 
        $res = $this->db->insert_batch('logo_gug',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
    public function importuretim($data) {
 
        $res = $this->db->insert_batch('uretim_miktarlari',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
     public function importnakliyesarflari($data) {
 
        $res = $this->db->insert_batch('nakliyesarflar',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
    public function importnakliyegelirlerihizmet($data) {
 
        $res = $this->db->insert_batch('nakliye_tumfaturalar',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
    
    public function nakliye_urun_satisindan_gelir_import($data) {
 
        $res = $this->db->insert_batch('nakliye_urunsatisi',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
    public function nakliye_akaryakit_import($data) {
 
        $res = $this->db->insert_batch('nakliye_akaryakit',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }
 
    }
    
 
}
 
?>