<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_sobre_nosotros extends CI_Controller {

	
	public function index()
	{

		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('view_menu_sobre_nosotros');
		$this->load->view('view_footer');
	}
	
	public function quienes_somos()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/sobrenosotros-folder/view_quienes_somos');
		$this->load->view('view_footer');
	}

	public function mision()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/sobrenosotros-folder/view_mision');
		$this->load->view('view_footer');
	}

	public function organigrama()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/sobrenosotros-folder/view_organigrama');
		$this->load->view('view_footer');
	}

	public function historia()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/sobrenosotros-folder/view_historia');
		$this->load->view('view_footer');
	}	

}
