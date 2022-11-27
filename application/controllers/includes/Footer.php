<?php
// Frontend Footer
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index($page = 'home')
	{
	if (!file_exists(APPPATH. 'views/dashboard/includes'. $page. '.php')exi) {
			show_404();
		}
		
		$this->load->view('welcome_message');
		$this->load->view('frontend/includes/header');
		$this->load->view('frontend/includes/asidebar', $page_data);
		$this->load->view('frontend/department', $data);
	}
}
