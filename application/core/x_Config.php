<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class x_Config extends CI_Config {

	function __construct() {
		parent::__construct();
		$this->_config_paths = array(APPPATH);

	}


}