<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* role.php
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
class role extends basecontroller {

	function __construct(){
		parent::__construct();
	}

	// function listing_role($id = null){
		
	// 	$query = $this->_model('users')->show_role();
	// 	$this->_var['data'] = $query;
		
	// 	if($id != null){
	// 		$x = $this->_model('users')->get_role($id);
	// 		echo json_encode($x);
	// 		exit;
			
	// 	}

	// }

	function listing(){
		parent::listing();
	}

	function _save($id = null){
		$this->_var['ngapain'] = $this->_model('users')->get_role($id);
		// xlog($z,1);
		parent::_save($id);
	}

	
	function privilege($id , $del = null){
		if($_POST){
			$z = $this->_model('users')->privilege($id);
			redirect ('role/listing');
		}

		if($del){
			$this->db->delete('privilege_role', array('id' => $del,'role_id' => $id)); 
			redirect ('role/listing') .'/' .$id;
		}
	}


	// function delete($role_id){
	// 	$this->db->delete('role', array('id' => $role_id)); 
	// }

	

}

/* End of file role.php */
/* Location: ./application/controllers/role.php */


