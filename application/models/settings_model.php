<?php

/*
 * Модель для работы с настройками
 */

class Settings_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function site_available()
    {
        $result = $this->db->get(SETTINGS_TABLE)->result_array();
        return $result[0]['site_available'];
    }
}