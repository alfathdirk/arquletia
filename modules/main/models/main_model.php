<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* main_model.php
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
class main_model extends baseModel {

	function three_post(){
		$sql = "SELECT * FROM post order by id desc LIMIT 3 ";
		return $this->db->query($sql)->result_array();
	}

	function get_gallery(){
		$sql = "SELECT * FROM album order by id desc";
		return $this->db->query($sql)->result_array();
	}

	function get_member(){
		$sql = "SELECT * FROM member order by id desc";
		return $this->db->query($sql)->result_array();
	}

	function get_menu(){
		$sql = "SELECT * FROM main order by id desc";
		return $this->db->query($sql)->result_array();

	}


}

/* End of file main_model.php */
/* Location: .//home/alfathdirk/workspace/topgan/modules/main/models/main_model.php */
