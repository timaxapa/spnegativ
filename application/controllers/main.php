<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	public function index()
	{
		$data['view'] = "main/main";
		$data['page_title'] = "Главная";

		$this->load->view('view', $data);
	}
}
