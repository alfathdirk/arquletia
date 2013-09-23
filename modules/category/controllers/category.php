<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* category.php
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

class category extends baseController {


	function __construct(){
		parent::__construct();

		$this->_validation = array(
			'add' => array(
				array(
					'field' => 'category_product',
					'label' => 'Category Product',
					'rules' => 'required'
					),
				array(
					'field' => 'description',
					'label' => 'Description',
					'rules' => 'required'
					),
				
				),
			'edit' => array(
				array(
					'field' => 'category_product',
					'label' => 'Category Product',
					'rules' => 'required'
					),
				array(
					'field' => 'description',
					'label' => 'Description',
					'rules' => 'required'
					),
				)
			);
	}
	
	function _grid(){
		$config = array('id','category_product');
		return parent::_grid($config);
	}
}

/* End of file category.php */
/* Location: .//home/alfathdirk/workspace/vthrone2/modules/category/controllers/category.php */