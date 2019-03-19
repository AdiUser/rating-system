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
	public function index() {
		$this->load->view('dashboard');
	}

	public function add_university() {

		$this->load->view("add_university");
	}
	public function faculty() {

		$this->load->view("faculty");
	}

	public function HOD_show_faculty() {

		$this->load->view("faculty_list");
	}

	public function HOD_add_faculty() {
		$this->load->view("add_faculty");
	}
}
