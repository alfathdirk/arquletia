<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* basecontroller.php
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


class BaseController extends x_Controller{

	function __construct(){
		parent::__construct();
		$this->_check_access();
	}

	

	function _check_access($arrayNg = false){
		$uriALL = $this->_name . "/" . $this->uri->rsegments[2];
		$sessID = $this->session->userdata('usr_id');
		if($sessID){
			$x = $this->_model('users')->user_get_role($sessID);
			foreach ($x as $val) {
				$arrayNg[] = $val['ngapain_aja'];
			}
			if(in_array("*",$arrayNg )){
				return true;
			} else {
				if(in_array($uriALL, $arrayNg) ||  ($uriALL == 'users/user_main')){
					return true;
				} else {
					if($uriALL == 'users/logout' || $uriALL == 'users/change_password'){
						return true;
					}
					if($this->_name !== 'login'){
						redirect('/login?continue=' . current_url());
					} 
				}
			}
		} else {
			if(!empty($arrayNg)){
				if(in_array($uriALL,$arrayNg)){
					return true;					
				} 
			}
			if($this->_name !== 'login'){
				redirect('/login?continue=' . current_url());
			} 
		} 
	}

	function add(){
		$this->_save();
	}

	function edit($id){
		if(!isset($id)){
			redirect('/');
		}
		$this->_save($id);
	}

	function _save($id = null){
		$this->_var['errors'] = '';
		$this->_view = $this->_name . '/' . 'add_edit';

		$this->_var['id'] = $id;
		if(!empty($id)){
			$get = $this->db->get_where($this->_name,array('id' => $id))->row_array();
			$this->_var['data'] = $get;
			// $this->_model()->save($id);
		} 

		if ($_POST) {
			if($this->_validate()){
				try {
					// $model->save($_POST, $id);
					$this->_model()->save($id);
					// redirect($this->_get_uri('edit'));
				} catch (Exception $e) {
					$this->_var['errors'] = '<p>' . $e->getMessage() . '</p>';
				}
			}
		}

		$this->_var['field_data'] = $this->db->field_data($this->uri->segment(1));
	}

	function listing($page = 1 , $data=null){
		$uri = $this->_name;
		// $page = 1;
		// $this->db->field_data($this->uri->segment(1));
		$this->_var['curPage'] = $page;
		$this->_var['linkPage'] = site_url($this->_name  .'/' .$this->uri->rsegments[2]);

		$pages = $this->_model()->get_row_listing($data);

		$this->_var['pages'] = ceil($pages['count']/15);

		$grid = $this->_grid() ;
		
		if($this->uri->segment(4)){
			$z = $this->_model()->get_listing_by_data($page,$data);
		} else {
			$z = $this->_model()->get_listing($page,$grid);
		}

		$this->_var['datas'] = $z;
		// xlog($z,1);exit;
		// xlog($this->db->last_query(),1);exit;
		return $z;
		
	}

	function _grid($data = null){
		if($data){
			$imp = implode(',',$data);
			return $imp;
		}
		// xlog($data,1);exit;
	}
	

	function delete($id){

		if($_GET){

			if($_GET['confirm'] == 'yes'){
				$this->db->delete($this->_name, array('id' => $id)); 
			}
			redirect ($this->_name . '/listing');
		}
	}
	
	function detail($id){
		if(!isset($id)){
			redirect('listing');
		}
		$data = $this->_model()->get_detail($id);
		$this->_var['data']=$data;
	}

	function _sysparam($value){
		return $this->db->query("SELECT * FROM sysparam WHERE `group` = ?",array($value));
	}

	function index() {
		if($this->uri->segment(2) == null){
			redirect($this->_name. '/listing');
		}
	}

	


}



/* End of file basecontroller.php */
/* Location: ./application/core/controllers/basecontroller.php */