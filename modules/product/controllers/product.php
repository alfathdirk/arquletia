<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* news.php
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

class product extends baseController {

	function __construct(){
		parent::__construct();

		$this->_validation = array(
			'add' => array(
				array(
					'field' => 'title',
					'label' => 'title',
					'rules' => 'required'
					),
				array(
					'field' => 'short_description',
					'label' => 'Short description',
					'rules' => 'required'
					),
				
				),
			'edit' => array(
				array(
					'field' => 'title',
					'label' => 'title',
					'rules' => 'required'
					),
				array(
					'field' => 'short_description',
					'label' => 'Short description',
					'rules' => 'required'
					),
				)
			);

		$sql = $this->_model()->get_menu();
		$this->_var['smenu'] = $sql;
	}

	function _save($id = null){
		// $this->db->truncate('product');
		$config['upload_path'] = './asset/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$config['max_size']	= '3000';
		$config['max_width'] = '1000';
		$config['max_height'] = '800';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);	

		$get = $this->db->get_where($this->_name,array('id' => $id))->row_array();


		$cat_id = $this->db->query('SELECT category_id,category_product as product FROM product LEFT JOIN category on (category.id = product.category_id) where product.id = ?',array('id' => $id))->row_array();

		// xlog($cat_id,1);exit;
		$this->_var['cat_id'] = $cat_id;


		$catalog = $this->db->get('category')->result_array();



		$this->_var['category_opt'][0] = "- Please Select - ";
		foreach ($catalog as $key => $c) {
			// xlog($c,1);
			$this->_var['category_opt'][$c['id']] = $c['category_product'];
		}
		// exit;

		if($_POST){
			// xlog($_FILES,1);exit;
			if($this->_validate()){
				$data = array();
				if($_FILES['images']){
					if(!$this->upload->do_upload('images')){
						echo $this->upload->display_errors('<p>', '</p>');
					} else {
						$w = $this->upload->data();
						$images = array(
							'images' => $w['file_name']
							);
					}
				}

				if($_FILES['pdf']){
					if(!$this->upload->do_upload('pdf')){
						echo $this->upload->display_errors('<p>', '</p>');
					} else {
						$p = $this->upload->data();
						$pdf = array(
							'pdf' => $p['file_name']
							);
					}
				}
			// xlog($images,1);exit;


				if(empty($id)){ 
					$data = array(
						'title' => $_POST['title'],
						'category_id' => $_POST['category_id'],
						'images' => ($_FILES['images'] !== null ) ? $images['images'] : '<no pict>' ,
						'pdf' => ($_FILES['pdf'] !== null ) ? $pdf['pdf'] : '<no pdf>' ,
						'short_description' => $_POST['short_description'],
						'description' => $_POST['description'],
						'created_time' => date("Y-m-d H:i:s")
						);
					$this->db->insert('product',$data);
				} else {

					$data = array(
						// 'title' => $_POST['title'],
						'images' => (@$images) ? @$images['images'] : @$get['images'],
						'pdf' => (@$pdf) ? @$pdf['pdf'] : @$get['pdf'],
						// 'short_description' => $_POST['short_description'],
						// 'description' => $_POST['description'],
						); 
					$this->db->update('product',$data,array('id' => $id));

				}

			}
		}
		parent::_save($id);

	}

	function detail($id){
		$this->_layout_view = 'main/layouts';
		parent::detail($id);
	}


	function _grid(){
		$fields = array(
			'id',
			'title' ,
			'short_description',
			'images',
			// 'description'

			);
		return parent::_grid($fields);
		
	}
// this method is too deprecated
	// function listing(){
	// }

	function _check_access(){
		$true = array(
			'product/index',
			'product/detail',
			);
		parent::_check_access($true);
	}

	function index($page = 1,$query = null){
		$this->_layout_view = 'main/layouts';

		// $query = preg_replace('( |%20)', ' ',$this->uri->segment(4));
		// xlog($conf,1);exit;
		if ($query == null) {
			$conf = $this->db->query('SELECT * FROM product order by id desc')->result_array();
		} else {
			$sql = "SELECT product.* ,
			category.category_product 
			FROM product 
			INNER JOIN category 
			on (product.category_id = category.id ) 
			where category.category_product = ?";
			$conf = $this->db->query($sql,array($query))->result_array();
			// xlog($this->db->last_query(),1);exit;
		}
		// xlog($conf,1);

		$pw = parent::listing($page,$conf); 
		$this->_var['all_blog'] = $pw;
		// xlog($pw,1);exit;
		
	}


}

/* End of file news.php */
/* Location: .//home/alfathdirk/workspace/rexe/modules/news/controllers/news.php */