<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Music extends CI_Controller {

	public function index()
	{
		$data['view'] = "music/music";
		$data['page_title'] = "Музыка";

		$this->load->view('view', $data);
	}
}
