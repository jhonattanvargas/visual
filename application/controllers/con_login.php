<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class con_login extends CI_Controller {

	function __construct(){
		parent::__construct();

	}
	public function index()
		{
			$this->load->view('view_banner_top');
			$this->load->view('view_login');
		}

	public function carga_datos(){

		$user =$this->input->post('user');
		$pass =$this->input->post('pass');
		$this->db->where('usuario',$user);
		$this->db->select('usuario');
		$this->db->select('password');
		$data = $this->db->get('admin',1);

		if($data->num_rows()>0){
			if($data->row()->password == $pass){
				$newdata = array(
                   'username'  => $user,
                   'logged_in' => TRUE
               		);
				$this->session->set_userdata($newdata);
				
				redirect("index.php/con_admin");
			
			}
			else{

					redirect('index.php/con_admin/mal');
			}
		}
		else{

			redirect('index.php/con_admin/mal');
		}
	}
}