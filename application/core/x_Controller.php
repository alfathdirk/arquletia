<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class x_Controller extends CI_Controller{

	var $CI;
	var $_name;
	var $_var;
	var $_view;
	var $_layout_view = 'layouts/main';
	var $_validation;
	
	function __construct(){
		parent::__construct();
		// require APPPATH.'/core//REST_Controller.php';

		$this->_name = get_called_class();
		$this->CI = $this;
		$this->load->add_package_path(MODPATH . get_called_class());
		
		$this->load->helper(array('x'));

		$this->load->library(array('session'));

		
		// xlog(current_url(),1);
		// $this->_name = get_called_class();
		// if($this->_validation){
		// $this->_validation = $this->_validate();
		// }
	}

	function _validate(){
		$this->load->library('form_validation');
		$result = true;
		if (!empty($this->_validation[$this->uri->rsegments[2]])) {
			$this->form_validation->set_rules($this->_validation[$this->uri->rsegments[2]]);
			$result = $this->form_validation->run();
			if (!$result) {
				// echo "harus";exit;
				$this->_var['errors'] = validation_errors();
				// return false;
			} 
		}

		return $result;
	}


	function _post_controller_constructor() {

		// xlog($this->_check_access(),1);

		// if (!$this->_check_access()) {
		// 	redirect('site/error?continue=' . current_url(), null, 303);
		// 	exit;
		// }
	}


	function _post_controller() {

		if (empty($this->_view)) {
			$this->_view = $this->_name . '/' . $this->uri->rsegments[2];
		}

		if (!empty($this->_layout_view)) {
			$view = $this->_layout_view;
			$data = $this->_var;
		} else {
			$view = $this->_view;
			$data = $this->_var;
		}
		widget_view($view, $data);
	}


	function _model($modelName = ''){

		if($modelName){
			$modelName .= '_model';
		}  else {
			$modelName = $this->_name ."_model";
		}
		$this->load->model($modelName);
		return $this->$modelName;
	}

	function _get_user($user_id){
		$sql = "SELECT * FROM users where `username` = ?";
		$aw = $this->db->query($sql,$user_id)->row_array();  
		return $aw;
	}

	

}
