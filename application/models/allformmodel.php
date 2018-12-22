<?php
class AllFormModel extends CI_Model{
	
	function getState(){
		//$school_code = $this->session->userdata("school_code");
		$result = $this->db->query("SELECT DISTINCT state FROM city_state ORDER BY state");
		return $result;
	}
	
	function getCity($state){
		//$school_code = $this->session->userdata("school_code");
		$result = $this->db->query("SELECT DISTINCT city FROM city_state WHERE state = '$state' ORDER BY city");
		return $result;
	}
	
	function getArea($state,$city){
		//$school_code = $this->session->userdata("school_code");
		$result = $this->db->query("SELECT DISTINCT area FROM city_state WHERE city = '$city' AND state = '$state'  ORDER BY area");
		return $result;
	}
	
	function getPin($state,$city,$area){
		//$school_code = $this->session->userdata("school_code");
		$result = $this->db->query("SELECT DISTINCT pin FROM city_state WHERE city = '$city' AND state = '$state' AND area = '$area'  ORDER BY area LIMIT 1");
		return $result;
	}
	
	function getClass(){
		$school_code = $this->session->userdata("school_code");
		$result = $this->db->query("SELECT DISTINCT class_name FROM class_info WHERE school_code='$school_code'");
		return $result;
	}
	
	function getSection(){
		$school_code = $this->session->userdata("school_code");
		$result = $this->db->query("SELECT DISTINCT section FROM class_info WHERE school_code='$school_code'");
		return $result;
	}
	
	
}