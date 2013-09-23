<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* create.php
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

class create extends baseController {


	function __construct(){
		parent::__construct();
		$this->_validation = array(
			'index' => array(
				array(
					'field' => 'control',
					'label' => 'Controllers',
					'rules' => 'required'
					),
				),
			);
	}

	function index(){
		$this->_var['apps'] = array( 
			"baseController" =>'Base Control => Arquletia Controllers',
			"CI_Controller" =>'CI Base => Base CI Controllers' 
			);
		$this->_var['error'] = '';
		// xlog(,1);exit;
		if($_POST){
			if($this->_validate()){
				$dir = getcwd() . "/modules/" . $_POST['control'] ;
				$control = $dir . '/controllers/' . $_POST['control'] . ".php";
				$model = $dir . '/models/' . $_POST['control'] . "_model.php";
				if(!file_exists($dir)){
					mkdir($dir . "/controllers", 0755,true);
					mkdir($dir . "/models", 0755,true);
					mkdir($dir . "/views", 0755,true);

					$apps['apps'] = $_POST['apps'];

					$view = widget_view('create/control',$apps,true);
					$open = fopen($control, 'w');
					fputs($open, $view ,strlen($view));
					fclose($open);

					$mode = widget_view('create/model',$apps,true);
					$mod =  fopen($model, 'w');
					fputs($mod, $mode ,strlen($mode));
					fclose($mod);

					$sql = 'CREATE TABLE IF NOT EXISTS ' .'`'. $_POST['control'] . '` ' .'(`id` int(11) unsigned NOT NULL AUTO_INCREMENT,' ;
						for ($i=0; $i < count($_POST['field']); $i++) { 

							$length = ($_POST['length'][$i] == null) ? (($_POST['type'][$i] == 'INT') ? "11" : "255") : $_POST['length'][$i];
							$type = (preg_match('(TEXT|DATE)',$_POST['type'][$i])) ? (($_POST['type'][$i] == 'TEXT') ? "text" : "date") : $_POST['type'][$i] . ' (' .$length. ')' . ' NOT NULL' ;
							$sql .= '`'.$_POST['field'][$i].'` ' . $type . ' ,'  ;
						}

						$sql .= " 
						`created_time` datetime NOT NULL,
						`updated_time` datetime NOT NULL,
						PRIMARY KEY (`id`)
						) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;";

$this->db->query($sql);

} else {
	$this->_var['error'] =  "Filename exist!"; 
} 

} else {
	$this->_var['error'] = validation_errors();
}	
}
}


}

/* End of file create.php */
/* Location: .//home/alfathdirk/workspace/arquletia/modules/create/controllers/create.php */