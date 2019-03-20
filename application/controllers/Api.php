<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Api extends CI_Controller {

	public function index() {
	
	}
	public function delete_activity() {
		$id = $this->input->get("id");
		$res = $this->db->set('isActive', 0)
				->where(array('id' => $id))
				->update('departmental_activities');
		//$res = $this->db->replace("departmental_activities", array('isActive' => 0));
		if ($res) {
			echo 1;
		}
		else {
			echo 0;
		}
	}
	public function save_activities() {
		$hod_id = "4567"; // from session.
		$faculty_id = "5678"; // from form.

		$p = $this->input->post("points");
		$sem = $this->input->post("semester");
		$a_name = $this->input->post("activity");
		$field_id = $this->input->post("field-id");
		$insert_ids = array();
		$count = 0;
		$str = "";
		foreach($a_name as $key=>$val) {
			$details = array(
				"hod_id" => $hod_id,
				"faculty_id" => $faculty_id,
				"activity_name" => $a_name[$key],
				"semester" => $sem[$key],
				"points" => $p[$key]
			);
			$res = $this->db->insert("departmental_activities", $details);
			$idx = $this->db->insert_id();
			array_push($insert_ids, $idx);
			if ($res) {
				$count++;
				$str .= '<tr id="'.$field_id[$key].'"><td>'.$a_name[$key].'</td><td>'.$sem[$key].'</td><td>'.$p[$key].'</td>';
				$str .= '<td><button class="btn btn-danger dept-activities-delete-new" data-id="'.$idx.'" data-delete="'.$field_id[$key].'"><i class="icons font-1xl d-block cui-circle-x"></i></button></td></tr>'; 
			}
		}

		
		if ($count == sizeof($p)) {
			echo $str;
		}
		else {
			echo 0;
		}
	}

	public function getUserOrganisation($code) {
		$organisation = null;
		// to check is org. code is in university table.
		$res = $this->db->query("SELECT * FROM university WHERE university_code = '$code'");
		if ($res->num_rows() == 1) {
			$organisation = $res->result();
			
		} 
		else {
			// check in institute table.
			$res = $this->db->query("SELECT * FROM institute WHERE institute_code = '$code'");
			if ($res->num_rows() == 1) {
				$organisation = $res->result();
			}
		}

		return $organisation;
	}

	public function login_user() {
		$code = $this->input->post("code");
		$username = $this->input->post("username");
		$pass = md5($this->input->post("password"));
		$sql = "SELECT * FROM user_login WHERE code = '$code' AND username = '$username' AND password = '$pass'";
		$result = $this->db->query($sql);
			
		if ($result && $result->num_rows() == 1) {
			$user = $result->result();
			$organisation = $this->getUserOrganisation($user[0]->code);
			$this->session->set_userdata('user',$user);
			$this->session->set_userdata('organisation', $organisation);
			// redirect based on user-type/role.
			echo 1;
		} 
		else {
			echo 0;
		}
		

	}
}