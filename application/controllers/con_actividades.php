<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_actividades extends CI_Controller {

	public function index()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('view_menu_actividades');
		$this->load->view('view_footer');
	}

	public function orientacionymovilidad()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/actividades-folder/view_orientacion_y_movilidad');
		$this->load->view('view_footer');
	}

	public function asistencia_psicologica()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/actividades-folder/view_asistencia_psicologica');
		$this->load->view('view_footer');
	}

	public function atencion_kine()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/actividades-folder/view_atencion_kine');
		$this->load->view('view_footer');
	}

	public function recreacion_y_esparcimiento()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/actividades-folder/view_recreacion_y_esparcimiento');
		$this->load->view('view_footer');
	}

	public function otras()
	{
		$this->load->view('view_banner_top');
		$this->load->view('view_banner_imagenes');
		$this->load->view('/actividades-folder/view_otras');
		$this->load->view('view_footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */