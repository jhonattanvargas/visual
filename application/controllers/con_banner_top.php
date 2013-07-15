<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_banner_top extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_slideshare');
		$this->load->view('view_menu');
		$this->load->view('view_footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */