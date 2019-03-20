<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Api extends CI_Controller {

	public function index() {
	
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