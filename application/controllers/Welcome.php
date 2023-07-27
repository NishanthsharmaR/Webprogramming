<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this-> load->view('backend/custom/css');
		// $this-> load->view('backend/custom/js');

		// $this-> load->view('backend/custom/header');
		// $this-> load->view('backend/admin/navigation');

		$this->load->view('welcome_message');
		// $this-> load->view('backend/custom/footer');
		// $this-> load->view('backend/custom/right_sidebar');
	}
	public function basicproject()
	{ 
		// echo "i am here";
		
		$this->load->view('viewproject');
		
	}
	public function democrud()
	{ 
		// echo "i am here";
		
		
		$this->load->view('crudoperations');
		
	}
	public function demotables()
	{ 
		// echo "i am here";
		
		$this->load->view('tables');
		
	}

}
