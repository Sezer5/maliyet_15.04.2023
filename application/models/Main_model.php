<?php
class Main_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
                
                
        }
	
	function getCity(){

    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('sehir');
    $response = $q->result_array();

    return $response;
  }

  // Get City departments
  function getCityDepartment($postData){
    $response = array();
 
    // Select record
    $this->db->select('Id,adi');
    $this->db->where('sehir_Id', $postData['city']);
    $q = $this->db->get('ilce');
    $response = $q->result_array();

    return $response;
  }
}
