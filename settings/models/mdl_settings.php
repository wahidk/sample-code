<?php
	class Mdl_settings extends MY_Model {

		public function __construct() {
			parent::__construct();
			$this->_table = "settings";
			$this->primary_key = 'settings.key';
    	}
	
		function getValueByKey($key){
			$this->db->select('value');
			$this->db->from($this->_table);
			$this->db->where('key', $key);
			$query = $this->db->get();
			$row = $query->row();
			if($row){
				return $row->value;
				exit();
			}
			
			return false;
		}
	
	}