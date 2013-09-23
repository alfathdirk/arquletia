<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class x_Loader extends CI_Loader {

    public function __construct() {
        $this->_ci_ob_level = ob_get_level();
        $this->_ci_library_paths = array(APPPATH, BASEPATH);
        $this->_ci_helper_paths = array(APPPATH, BASEPATH);
        $this->_ci_model_paths = array(APPPATH,MODPATH);
        $this->_ci_view_paths = array(APPPATH . 'views/' => TRUE);
    }

    function view($view, $vars = array(), $return = FALSE) {

        $modView = explode('/', trim($view, '/'));
        $this->_ci_view_paths[MODPATH . $modView[0].'/views/'] = TRUE;

        foreach ($this->_ci_view_paths as $view_path => $show) {
            $exploded = explode('/', trim($view, '/'));
            $trim_view = $exploded[count($exploded) - 1];

            if (file_exists($view_path . $view . '.php')) {
                $view = $view;
                break;
            } elseif (file_exists($view_path . $trim_view . '.php')) {
                $view = $trim_view;
                break;
            }
        }
        return parent::view($view, $vars, $return);
    }

    // function model($model , $name = '' , $db = false){
    //     // xlog($this->_ci_model_paths,1);
    //     // $modView = trim($model);
    //     // xlog($model,1);
    //     // $this->_ci_models[] = "product_model";
    //     return parent::model($model , $name = '' , $db = false);
    // }

}