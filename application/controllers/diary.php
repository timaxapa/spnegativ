<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diary extends CI_Controller {

	public function index()
	{
		$data['view'] = "diary/diary";
		$data['page_title'] = "Дневник";

		$this->load->view('view', $data);
	}
}
