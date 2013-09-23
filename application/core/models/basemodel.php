<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* basemodel.php
*
* @package arquletia
* @author AlfathDirk
* @copyright Copyright(c) 2012 PT Sagara Xinix Solusitama. All Rights Reserved.
*
* Created on 2013
*
* This software is the proprietary information of RAS
*
* History
* =======
* (yyyy/mm/dd hh:mm:ss) (author)
* 0000/00/00 00:00:00 Alfathdirk <alfathdirk@gmail.com>
*
*
*/
class Basemodel extends CI_Model {

	function __construct(){
		parent::__construct();
		// $x = $this->_model()->get_coy();	
		// $this->save();
	}

	function save($id = null){
		// $z = $this->db->field_data($this->_name);


// xlog($z,1);
		if($_POST || $_FILES){
			if($id == null){
				$_POST['created_time'] = date("Y-m-d H:i:s"); 
				if(!in_array('INSERT',explode(" ",$this->db->last_query()))){
					$this->db->insert($this->uri->segment(1), $_POST); 
				}
			} else {
				$_POST['updated_time'] =  date("Y-m-d H:i:s"); 
				$this->db->where('id', $id);
				$this->db->update($this->uri->segment(1), $_POST); 

			}
			redirect($this->_name. '/listing');
		}
	}

	function  get_listing($page = 0,$grid = null,$data = null){

		$pages = ($page < 2) ? 0 : ($page -1) * 10;
		if($grid){
			$sql = "SELECT $grid FROM " . $this->_name;
			// xlog($grid,1);exit;
		} else {
			$sql = "SELECT * FROM " . $this->_name;
		}

		$z = $this->db->query($sql . " order by id desc LIMIT ?,15",array($pages))->result_array();
		return $z;
	}

	function get_listing_by_data($page = 0,$data){
		$pages = ($page < 2) ? 0 : ($page -1) * 10;
		$query = $this->db->last_query() ;
		$z = $this->db->query($query." order by id desc LIMIT ?,15",array($pages))->result_array();
		return $z;
	}

	function get_row_listing($data = null){
		
		
		if($data !== null ){
			$count['count'] = count($data);
		} else {

			$sql = "SELECT count(id) as count FROM " . $this->_name ;
			$query = $this->db->query($sql)->row_array();
			$count = $query;
		}

		// xlog($count,1);exit;
		return $count;

	}

	function get_detail($id){

		$url = $this->uri->segment(1);
		$sql = "SELECT * FROM " . $url ." where id = ?" ;
		return $this->db->query($sql,array($id))->row_array();
	}


}




/* End of file basemodel.php */
/* Location: ./application/core/models/basemodel.php */
