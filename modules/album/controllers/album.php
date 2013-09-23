<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* album.php
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

class album extends baseController {

	function _save($id =null) {
		if($_FILES){
			multi_upload('images');
		}

		parent::_save($id);
	}

	function listing(){
		parent::listing();
	}

	
}

/* End of file album.php */
/* Location: .//home/alfathdirk/workspace/rexe/modules/album/controllers/album.php */