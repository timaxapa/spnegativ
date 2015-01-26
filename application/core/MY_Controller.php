<?php

class MY_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->_init();
    }

    private function _init()
    {
        if (!$this->settings_model->site_available()) {
            $this->load->view('system/not_available');
        }
    }
}