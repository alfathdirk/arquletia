<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* install.php
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

class install extends x_Controller {

	var $nama;

	function __construct(){
		parent::__construct();

		$explodeName = explode('/', $this->config->config['base_url']);
		$this->_nama = $explodeName[2];
	}


	function _print($val = ''){
		echo $val;
	}

	function install_db(){

		$name = $this->nama;
		echo $name . "\n";exit;

		// $output = '';
		// $mysql = "echo asd";
		// exec('ls');
	}


}

/* End of file install.php */
/* Location: ./application/controllers/install.php */