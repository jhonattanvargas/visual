<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_contactanos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('view_banner_top');
		//$this->load->view('view_slideshare');
		$this->load->view('view_banner_imagenes');
		$this->load->view('view_menu_contactanos');
		$this->load->view('view_footer');
		//echo "hola Chile"
	}

	public function contactenos()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/contacto-folder/view_contactenos');
		$this->load->view('view_footer');
		//echo "hola Chile"
	}

	public function como_llegar()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/contacto-folder/view_como_llegar');
		$this->load->view('view_footer');
	}

	public function como_ayudarnos()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/contacto-folder/view_como_ayudarnos');
		$this->load->view('view_footer');
	}
}