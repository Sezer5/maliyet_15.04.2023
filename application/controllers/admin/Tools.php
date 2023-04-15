<?php
class Tools extends CI_Controller {
    
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
                $this->load->helper('text');
                $this->load->database();
				$this->load->model('Database_Model');
        }

        public function message()
        {
            $a=0;
            $data=array(
            'adsoy'=>$a,
    		);
            $this->Database_Model->insert_data("denemecron",$data);
        }
}