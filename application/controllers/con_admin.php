<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class con_admin extends CI_Controller {
public function index()
	{
		if ($this->session->userdata('logged_in')){

		$this->load->view('view_banner_top');
		$this->load->view('view_menu_admin');
		}
		else{
			$this->load->view('view_error_login');
		}
}


public function mal(){
	$this->load->view('view_error_login');

}

public function salir(){
	$this->session->sess_destroy();
		//$this->index_page();
		redirect('index.php/con_login');
}
}