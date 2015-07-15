<?php
	class mylink{
		protected $db;
		public function __construct(){
			$this->db=  mysqli_connect("localhost","root","","links");
			
			}
		protected function generatecode($num){
			return base_convert(mt_rand(),10,36);
			}	
		public function makecode($link){
			$url = trim($link);
		
			
			$url = $this->db->escape_string($url);
			 
			$exists = $this->db->query("select code from url where link='{$url}'");
			if($exists->num_rows){
				return $exists->fetch_object()->code;
				}
			else{
				$insert = $this->db->query("insert into url (link , date) 		   					values('{$url}', now())");
				$code = $this->generatecode($this->db->insert_id);
				$this->db->query("update url set code= '{$code}' where link= '{$url}'");
				return $code;
				}
			return  $url;
			}
		public function getlink($code){
			$code = $this->db->escape_string($code);
			$code = $this->db->query("select link from url where code= '$code'");
			if($code->num_rows){
				return $code->fetch_object()->url;
				}
				return '';
			}
		}
?>