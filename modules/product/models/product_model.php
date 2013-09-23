<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* news_model.php
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
class product_model extends baseModel {
	
	function get_menu(){
		$sql = "SELECT * FROM main order by id desc";
		return $this->db->query($sql)->result_array();

	}


}

/* End of file news_model.php */
/* Location: .//home/alfathdirk/workspace/rexe/modules/news/models/news_model.php */
