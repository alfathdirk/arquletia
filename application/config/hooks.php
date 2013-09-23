<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/



$hook['pre_system'] = array(
                'class'    => 'Hook',
                'function' => '_pre_system',
                'filename' => 'hook.php',
                'filepath' => 'hooks'
);

$hook['pre_controller'] = array(
                'class'    => 'Hook',
                'function' => '_pre_controller',
                'filename' => 'hook.php',
                'filepath' => 'hooks'
);


$hook['post_controller_constructor'] = array(
                'class'    => 'Hook',
                'function' => '_post_controller_constructor',
                'filename' => 'hook.php',
                'filepath' => 'hooks'
);



$hook['post_controller'] = array(
                'class'    => 'Hook',
                'function' => '_post_controller',
                'filename' => 'hook.php',
                'filepath' => 'hooks'
);

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */