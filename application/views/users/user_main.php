<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* user_main.php
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

?>

<div class="clearfix"></div>
<div class="container">
    <div class="row-fluid spacer">
        <div class="span4">
            <img src="<?php echo themes_url('default/icons') ?>/article.png" alt="" width="150">
            <div>
                <a href="<?php echo site_url('product/add') ?>" class="btn btn-small btn-warning">Add Product</a>
                <a href="<?php echo site_url('product/listing') ?>" class="btn btn-small btn-warning">List Product</a>
            </div>
        </div>
        <div class="span4">
            <img src="<?php echo themes_url('default/icons') ?>/history-icon.png" alt="" width="150">
            <div>
                <a href="<?php echo site_url('category/add') ?>" class="btn btn-small btn-warning">Add Category</a>
                <a href="<?php echo site_url('category/listing') ?>" class="btn btn-small btn-warning">List Category</a>
            </div>
        </div>
        <div class="span4">
            <img src="<?php echo themes_url('default/icons') ?>/menu.png" alt="" width="150">
            <div>
                <a href="<?php echo site_url('slider/add') ?>" class="btn btn-small btn-warning">Add Slider</a>
                <a href="<?php echo site_url('slider/listing') ?>" class="btn btn-small btn-warning">List Slider</a>
            </div>
        </div>
    </div>
</div>