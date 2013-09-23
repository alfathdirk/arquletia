<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* smenu.php
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

class main extends baseController {

	function __construct(){
		parent::__construct();
		if(preg_match('/(add|listing|edit)/',$this->uri->segment(2))){
			$this->_layout_view = "layouts/main";

		} else {

			$this->_layout_view = "smenu/layouts";
		}
		$sql = $this->_model()->get_menu();
		$this->_var['smenu'] = $sql;

	}

	function index(){
		$sql = $this->_model()->get_member();
		$this->_var['members'] = $sql;
	}

	function gallery(){
		$sql = $this->_model()->get_gallery();
		$this->_var['galleries'] = $sql;

	}


	function _check_access(){
		$true = array(
			'main/index',
			'main/about',
			'main/gallery',
			'main/contact',
			);
		parent::_check_access($true);
	}

	function about(){
	}

	function contact(){
		
	}

	function _save($id = null){
		parent::_save($id);
	}

}

/* End of file smenu.php */
/* Location: .//home/alfathdirk/workspace/topgan/modules/smenu/controllers/smenu.php */