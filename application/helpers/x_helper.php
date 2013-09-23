<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if(!function_exists('xlog')){
	function xlog($val , $false = null){

		if($false != null){
			echo "<pre>";
			print_r($val);
			echo "</pre>";
		}
	}
}

if(!function_exists('legend_show')){
	function legend_show(){
		$CI = &get_instance();
		$uri = $CI->uri->segment(2) . ' ' .$CI->uri->segment(1); 

		$exp = explode(' ',$uri);

		for ($i=0; $i < count($exp); $i++) { 
			$word = str_split($exp[$i]);
			echo strtoupper($word[0]);
			for ($y=1; $y < count($word); $y++) { 
				echo $word[$y];
			}
			echo " ";

		}
	}
}

if(!function_exists('themes_url')){
	function themes_url($val = ''){
		return base_url() . 'themes/' . $val;
	}
}

if(!function_exists('widget_view')){

	function widget_view($view ,$data = null , $bhvr = false){
		$CI = &get_instance();
		// if($bhvr)
		$aw = $CI->load->view($view,$data,$bhvr);
		return $aw;
	}
}

if (!function_exists('multi_upload')) {

	function multi_upload($field_name) {
		$CI = &get_instance();
		$id = $CI->uri->segment(3);
		// xlog($id,1);exit();
		$config['upload_path'] = './asset/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '2000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$config['encrypt_name'] = TRUE;

		$CI->load->library('upload');

		$files = $_FILES;
		$cpt = count($_FILES[$field_name]['name']);

		if($id == null){

			for($i=0; $i<$cpt; $i++){

				$_FILES[$field_name]['name']= $files[$field_name]['name'][$i];
				$_FILES[$field_name]['type']= $files[$field_name]['type'][$i];
				$_FILES[$field_name]['tmp_name']= $files[$field_name]['tmp_name'][$i];
				$_FILES[$field_name]['error']= $files[$field_name]['error'][$i];
				$_FILES[$field_name]['size']= $files[$field_name]['size'][$i];    

				$CI->upload->initialize($config);
				if(!$CI->upload->do_upload($field_name)){
					echo $CI->upload->display_errors('<p>', '</p>');

				} else {
					$w = $CI->upload->data();

					$data = array(
						'images' => $w['file_name'],
						);

					$CI->db->insert($CI->_name, $data); 
				}
			}
		} else {

			if($cpt <= 1){
				for($i=0; $i < 1; $i++){

					$_FILES[$field_name]['name']= $files[$field_name]['name'][$i];
					$_FILES[$field_name]['type']= $files[$field_name]['type'][$i];
					$_FILES[$field_name]['tmp_name']= $files[$field_name]['tmp_name'][$i];
					$_FILES[$field_name]['error']= $files[$field_name]['error'][$i];
					$_FILES[$field_name]['size']= $files[$field_name]['size'][$i];    

					$CI->upload->initialize($config);
					if(!$CI->upload->do_upload($field_name)){
						echo $CI->upload->display_errors('<p>', '</p>');

					} else {
						$w = $CI->upload->data();
						$data = array(
							'images' => $w['file_name'],
							);
						$CI->db->update($CI->_name, $data, array('id' => $id));
					}
				}
			} else {
				echo '<div class="alert alert-error container"><a class="close" data-dismiss="alert">×</a><center>You just edit 1 item</center> </div>';
			}
		}
	}
}

if (!function_exists('xform_date')) {

	function xform_date($name, $data = array()) {
		$CI =& get_instance();
		$data = array('name' => $name );
		return $CI->load->view('helpers/xform_date', $data, true);
	}
}

