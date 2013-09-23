<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* slider.php
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

class slider extends baseController {

	function _save($id = null){
		// $this->db->truncate('slider');
		$config['upload_path'] = './asset/slider';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$config['max_size']	= '3000';
		$config['max_width'] = '1000';
		$config['max_height'] = '800';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);	

		$get = $this->db->get_where($this->_name,array('id' => $id))->row_array();

		if($_POST){

			if($this->_validate()){
				$data = array();
				if($_FILES['images']['name'] !== null){
					if(!$this->upload->do_upload('images')){
						echo $this->upload->display_errors('<p>', '</p>');
						$images = array(
							'images' => ($id) ? (($get['images'] !== null) ? $get['images'] : 'No Data') : 'No Data To Upload'
							);
					} else {
						$w = $this->upload->data();
						$images = array(
							'images' => $w['file_name']
							);
					}
				}
				if(empty($id)){ 
					$data = array(
						'images' => $images['images']  ,
						);

					// $_POST['']
					$this->db->insert('slider',$data);
				} else {
					$data = array(
						'images' => (isset($_FILES)) ? $images['images'] : @$get['images'],
						); 
					$this->db->update('slider',$data,array('id' => $id));

				}

			}
		}

		parent::_save($id);

	}
}

/* End of file slider.php */
/* Location: .//home/alfathdirk/workspace/vthrone2/modules/slider/controllers/slider.php */