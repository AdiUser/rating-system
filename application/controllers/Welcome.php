<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
	public function dashboard() {
		$data["user"] = $this->session->user;
		$data["organisation"] = $this->session->organisation;

		$this->load->view("dashboard", $data);
	}
	public function login() {
		$this->load->view("login");
	}

	public function add_university() {

		$this->load->view("add_university");
	}
	public function faculty() {
		$faculty_id = "fact101"; // will come from session
		$res = $this->db->where(["faculty_id" => $faculty_id])->get("faculty")->result();
		$res = $this->db->select("*")
			->from("faculty")
			->join("levels", "levels.id = faculty.level")
			->join("departments", "departments.id = faculty.department")
			->where(["faculty_id"=>$faculty_id])
			->get();
		if (sizeof($res) >0 ) {
			$data["faculty_details"] = $res->result();
		}
		$this->load->view("faculty", $data);
	}
	public function add_hod() {

		$this->load->view("add_hod");
	}
	public function hod_details() {
		$faculty_id = "fact101"; // will come from session
		$res = $this->db->where(["faculty_id" => $faculty_id])->get("faculty")->result();
		$res = $this->db->select("*")
			->from("faculty")
			->join("levels", "levels.id = faculty.level")
			->join("departments", "departments.id = faculty.department")
			->where(["faculty_id"=>$faculty_id])
			->get();
		if (sizeof($res) >0 ) {
			$data["faculty_details"] = $res->result();
		}
		$this->load->view("hod_details",$data);
	}
	public function add_institution() {

		$this->load->view("add_institution");
	}
	public function add_department() {

		$this->load->view("add_department");
	}

	public function university_admin() {

		$this->load->view("university_admin");
	}

	public function HOD_show_faculty() {

		$this->load->view("faculty_list");
	}

	public function HOD_add_faculty() {
		$this->load->view("add_faculty");
	}
	public function facultyQualifications() {
		$department_id=1;
		$level=11;
		$faculty_id = "FACT5672";
		$arr=$this->db->where(['department'=>$department_id,'level'=>$level])
		->get('min_requirements')->result();
		$ids_to_show = array();
		$ids_verbose = array();
		foreach($arr as $key=>$val) {
			$ids = explode(",", $val->qualifications);
			foreach($ids as $key=>$x) {
				if (!in_array($x, $ids_to_show))
					array_push($ids_to_show, $x);
			}
		}
		
		foreach($ids_to_show as $key=>$val) {
			$data = $this->db->where(['id'=>$val])
					->get('min_qualifications')
					->result();
			if ($data) {
				array_push($ids_verbose, ['id'=> $data[0]->id,'name'=>$data[0]->qualification_name]);
			}
			else {
				die('error occured');
			}
		}
		$data['qualifications'] = $ids_verbose;
		$this->load->view("facultyQualifications", $data);
	}
	public function faculty_activity() {

		$this->load->view("faculty_activity");
	}

	public function load_file($file) {
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($file['name']) && in_array($file['type'], $file_mimes)) {
			$arr_file = explode('.', $file['name']);
			$extension = end($arr_file);
			if('csv' == $extension){
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} 
			else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $reader->load($file['tmp_name']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			
			echo "<pre>";
			print_r($sheetData);

			
			return $sheetData;
	
		}
	}

	public function import(){
		echo "<pre>".print_r($this->load_file($_FILES['upload_file']), true);
	}

	public function detail_load($qualification_id){
	}

	
}