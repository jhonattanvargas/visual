<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_testimonios extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view_banner_top');
		//$this->load->view('view_slideshare');
		$this->load->view('view_banner_imagenes');
		$this->load->view('view_menu_testimonios');
		$this->load->view('view_footer');
		//echo "hola Chile"
	}

	public function uno()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/testimonios-folder/view_uno');
		$this->load->view('view_footer');
	}

	public function dos()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/testimonios-folder/view_dos');
		$this->load->view('view_footer');
	}

	public function tres()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/testimonios-folder/view_tres');
		$this->load->view('view_footer');
	}
}
