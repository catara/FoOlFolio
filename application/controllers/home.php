<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['main_content_view'] = $this->load->view('home', null, TRUE);
		$data['title'] = 'Welcome to FoOlRulez';
		$this->load->view('layout', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */