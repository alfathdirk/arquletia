<?php

class rest extends REST_Controller {
    function greet_get() {
    	$_GET =  "alfat";
        $data = array(
            'name' => $this->get(),
            'age' => 29,
        );
        $this->response($data);
    }
}