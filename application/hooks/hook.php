<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hook {


    function _pre_system(){
        define('ARQPATH', 'application/core/');
        define('MODPATH', 'modules/');
        spl_autoload_register(array($this, '_autoload_class'));
    }

    function _pre_controller(){

    }

    function _autoload_class($class) {
        // echo 'class : ' . $class . '<br/>';
        $class = strtolower($class);
        $matches = null;
        $match = preg_match('/(controller|model)$/i', $class, $matches);
        // print_r($match);
        if ($match) {
            foreach (array(BASEPATH, APPPATH,ARQPATH,MODPATH) as $path) {

                $file_path = $path . $matches[0] . 's/' . $class . EXT;
                // echo 'file path : ' . $file_path . '<br/>';

                if (file_exists($file_path)) {
                    require_once $file_path;
                    // echo 'load : ' . $class .'<br/>';
                }
            }
        }
        // exit;

    }

    function _post_controller_constructor(){
        $CI = &get_instance();
        if (method_exists($CI, '_post_controller_constructor')) {
            $CI->_post_controller_constructor();
        }
        // xlog($CI,1);
    }

    function _post_controller(){
        $CI = &get_instance();
        if (method_exists($CI, '_post_controller')) {
            $CI->_post_controller();
        }
    }

}