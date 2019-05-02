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
	
	public function feedback() {

		$this->load->view("feedback");
	}

	
	public function feedback_dashboard() {

		$this->load->view("feedback_dashboard");
	}

	
	public function getDepartments($code) {
		$res = $this->db->select("*")
				->where("org_id", $code)
				->where("is_active", 1)
				->get("departments");
		if ($res) {
			return $res->result();
		}
		else {
			return null;
		}
	}
	
	public function faculty() {
		$faculty_id = $this->session->user[0]->username; // will come from session
		$data = array();
		//$res = $this->db->where(["faculty_id" => $faculty_id])->get("faculty")->result();
		$res = $this->db->select("*")
			->from("faculty")
			->join("levels", "levels.id = faculty.level")
			->join("departments", "departments.id = faculty.department")
			->where("faculty_id", $faculty_id)
			->get()->result();
		if (sizeof($res) > 0) {
			$data["faculty_details"] = $res;
		}
		$data["user_details"] = $this->session->user_details;
		//echo "<pre>".print_r($this->session, true);
		$this->load->view("faculty", $data);
	}

	public function add_hod() {
		$org_id = $this->session->user[0]->code;
		$data["departments"] = $this->getDepartments($org_id);
		$this->load->view("add_hod", $data);
	}
	
	public function hod_details() {
		$faculty_id = $this->session->user[0]->username; // will come from session
		$res = $this->db->where(["faculty_id" => $faculty_id])->get("faculty")->result();
		$res = $this->db->select("*")
			->from("faculty")
			->join("levels", "levels.id = faculty.level")
			->join("departments", "departments.id = faculty.department")
			->where("faculty_id", $faculty_id)
			->get()->result();
		if (sizeof($res) >0 ) {
			$data["faculty_details"] = $res;
		}
		$this->load->view("hod_details",$data);
	}
	public function add_institution() {

		$this->load->view("add_institution", $data);
	}
	public function add_institute() {
		$data["user"] = $this->session->user;
		$data["org"]  = $this->session->organisation;
		$data["parent_university"] = $data["user"][0]->code;
		$this->load->view("add_institute", $data);
	}
	public function add_department() {
		$org_code = $this->session->user[0]->code;
		$data['departments'] = $this->getDepartments($org_code);
		$this->load->view("add_department",$data);
	}


	//university details.
	public function university_admin() {
		$user = $this->session->user[0];
		$org = $this->session->organisation[0];
		$data["user"] = $user;
		$data["org"] = $org;
		
		$this->load->view("university_admin",$data);
	}
	public function institute_admin() {

		$this->load->view("institute_details");
	}

	public function HOD_show_faculty() {
		$res = $this->db->select("*")
					->from("faculty")
					->join("faculty_dept","faculty_dept.id = faculty.department")
					->join("levels", "levels.id = faculty.level")
					->where("university_code", $this->session->user[0]->code)
					->where("faculty_id !=", $this->session->user[0]->username)
					->get()
					->result();
		if (sizeof($res) > 0) {
			$data['faculties'] = $res;
		}
		else {
			$data['faculties'] = null;
		}


		$this->load->view("faculty_list",$data);
	}

	public function HOD_add_faculty() {
		$res = $this->db->select("*")
				->from("faculty")
				->join("departments", "faculty.department = departments.id")
				->where("faculty_id", $this->session->user[0]->username)
				->get()->result();
		if ($res) {
			$data["fac"] = $res;
		}
		$this->load->view("add_faculty", $data);
	}
	
	public function add_faculty_technical() {
		$res = $this->db->select("*")
				->from("faculty")
				->join("departments", "faculty.department = departments.id")
				->where("faculty_id", $this->session->user[0]->username)
				->get()->result();
		if ($res) {
			$data["fac"] = $res;
		}
		$this->load->view("add_faculty_technical", $res);
	}
	public function get_next_level($id) {
		$res = $this->db->where(['id' => $id])->get("levels")->result();
		if(count($res) > 0)
			return $res[0]->level_id;
		return null;
	}

	public function faculty_qualifications() {
		$user_details = $this->session->user_details[0];
		$department_id = 1; //$user_details->department;
		$level= $user_details->level;
		$level = $this->get_next_level($user_details->level+1);

		$faculty_id = $this->session->user[0]->username;
		$arr=$this->db->where(['department'=>$department_id,'level'=>$level])
		->get('min_requirements')->result();
		$ids_to_show = array();
		$ids_verbose = array();
		$ids_to_disable = array(); //get ids that are already added by the faculty, and diable them.
		$res_disable = $this->db->where("faculty_id", $faculty_id)->get("input_qualification");
		if ($res_disable->num_rows() == 1) {
			$id_X = explode(",",$res_disable->result()[0]->qualification);
		}
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
				if (isset($id_X) && sizeof($id_X)>0) {
					if (in_array($val, $id_X)) {
						// id is already maked by the the faculty. 
						array_push($ids_verbose, ['id'=> $data[0]->id,
							'name'=>$data[0]->qualification_name,
							'is_editable' => false
						]);
					}
					else {
						array_push($ids_verbose, ['id'=> $data[0]->id,
							'name'=>$data[0]->qualification_name,
							'is_editable' => true
						]);
					}
				}
				else {
					array_push($ids_verbose, ['id'=> $data[0]->id,
							'name'=>$data[0]->qualification_name,
							'is_editable' => true
						]);
				}
				
			}
			else {
				die('error occured');
			}
		}

		$data['qualifications'] = $ids_verbose;
		//echo "<pre>".print_r($this->session, true);
		$this->load->view("faculty_qualifications", $data);
	}
	
	public function get_activities($faculty_id, $type = NULL) {
		$res = $this->db->select("*")
				->from("activity")
				->where("faculty_id", $faculty_id);
		if ($type != NULL)
			$res = $res->where("type", $type);

		$res = $res->get()->result();

		if(count($res) > 0)
			return $res;
		return null;
	}


	public function faculty_activity() {
		$user = $this->session->user[0];
		$data['activities'] = $this->get_activities($user->username);
		$this->load->view("faculty_activity", $data);
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

	public function faculty_promotion() {

		$this->load->view("faculty_promotion");
	}


		public function faculty_qualifications_technical() {
		$user_details = $this->session->user_details[0];
		$department_id = 1; //$user_details->department;
		$level= $user_details->level;
		$level = $this->get_next_level($user_details->level+1);

		$faculty_id = $this->session->user[0]->username;
		$arr=$this->db->where(['department'=>$department_id,'level'=>$level])
		->get('technical_requirement')->result();
		$ids_to_show = array();
		$ids_verbose = array();
		$ids_to_disable = array(); //get ids that are already added by the faculty, and diable them.
		$res_disable = $this->db->where("faculty_id", $faculty_id)->get("input_qualification");
		if ($res_disable->num_rows() == 1) {
			$id_X = explode(",",$res_disable->result()[0]->qualification);
		}
		foreach($arr as $key=>$val) {
			$ids = explode(",", $val->qualifications);
			foreach($ids as $key=>$x) {
				if (!in_array($x, $ids_to_show))
					array_push($ids_to_show, $x);
			}
		}
		
		foreach($ids_to_show as $key=>$val) {
			$data = $this->db->where(['id'=>$val])
					->get('technical_min_qualifications')
					->result();
			if ($data) {
				if (isset($id_X) && sizeof($id_X)>0) {
					if (in_array($val, $id_X)) {
						// id is already maked by the the faculty. 
						array_push($ids_verbose, ['id'=> $data[0]->id,
							'name'=>$data[0]->qualification_name,
							'is_editable' => false
						]);
					}
					else {
						array_push($ids_verbose, ['id'=> $data[0]->id,
							'name'=>$data[0]->qualification_name,
							'is_editable' => true
						]);
					}
				}
				else {
					array_push($ids_verbose, ['id'=> $data[0]->id,
							'name'=>$data[0]->qualification_name,
							'is_editable' => true
						]);
				}
				
			}
			else {
				die('error occured');
			}
		}

		$data['qualifications'] = $ids_verbose;
		//echo "<pre>".print_r($this->session, true);
		$this->load->view("faculty_qualifications", $data);
	}
}