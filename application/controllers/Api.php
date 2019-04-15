<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Api extends CI_Controller {
    
    public function index() {
        
    }
    
    public function delete_department() {
        $id  = $this->input->get("id");
        $res = $this->db->set('is_active', 0)->where(array(
            'id' => $id
        ))->update('departments');
        //$res = $this->db->replace("departmental_activities", array('isActive' => 0));
        if ($res) {
            echo 1;
        } else {
            echo 0;
        }
    }
    public function save_acr() {
        $faculty_id = $this->input->post("faculty-id"); // from form.
        $p = $this->input->post("points");
        $year = $this->input->post("year");
        $a_name = $this->input->post("activity");
        $field_id = $this->input->post("field-id");
        $insert_ids = array();
        $count = 0;
        $str = "";
        
        foreach($a_name as $key=>$val) {
            
            $details = array(
                "faculty_id" => $faculty_id[$key],
                "acr_year" => $year[$key],
                "points" => $p[$key]
            );
            
            $res = $this->db->insert("acr_points", $details);
            $idx = $this->db->insert_id();
            
            array_push($insert_ids, $idx);
            
            if ($res) {
                $count++;
                $str .= '<tr id="'.$field_id[$key].'"><td>'.$a_name[$key].'</td><td>'.$year[$key].'</td><td>'.$p[$key].'</td>';
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
    
    public function save_departments() {
        $hod_id     = "4567"; // from session.
        $faculty_id = "5678"; // from form.
        $org_id     = $this->session->user[0]->code;
        $name       = $this->input->post("name");
        $code       = $this->input->post("code");
        $field_id   = $this->input->post("field-id");
        $insert_ids = array();
        $count      = 0;
        $str        = "";
        foreach ($name as $key => $val) {
            $details = array(
                "org_id" => $org_id,
                "department_name" => $name[$key],
                "department_code" => $code[$key]
            );
            $res     = $this->db->insert("departments", $details);
            $idx     = $this->db->insert_id();
            array_push($insert_ids, $idx);
            if ($res) {
                $count++;
                $str .= '<tr id="' . $field_id[$key] . '"><td>' . $name[$key] . '</td><td>' . $code[$key] . '</td>';
                $str .= '<td><button class="btn btn-danger dept-delete-new" data-id="' . $idx . '" data-delete="' . $field_id[$key] . '"><i class="icons font-1xl d-block cui-circle-x"></i></button></td></tr>';
            }
        }
        
        if ($count == sizeof($name)) {
            echo $str;
        } else {
            echo 0;
        }
    }
    
    public function getUserOrganisation($code) {
        $organisation = null;
        // to check is org. code is in university table.
        $res          = $this->db->query("SELECT * FROM university WHERE university_code = '$code'");
        if ($res->num_rows() == 1) {
            $organisation = $res->result();
            
        } else {
            // check in institute table.
            $res = $this->db->query("SELECT * FROM institute WHERE institute_code = '$code'");
            if ($res->num_rows() == 1) {
                $organisation = $res->result();
            }
        }
        
        return $organisation;
    }
    
    public function getUser($faculty_id) {
        $res = $this->db->select("*")->from("faculty")
                    ->join("levels", "levels.id = faculty.level")
                    ->where("faculty_id", $faculty_id)
                    ->get()
                    ->result();
        if ($res)
            return $res;
        return null;
        
    }
    
    public function login_user() {
        $code     = $this->input->post("code");
        $username = $this->input->post("username");
        $pass     = md5($this->input->post("password"));
        $sql      = "SELECT * FROM user_login WHERE code = '$code' AND username = '$username' AND password = '$pass'";
        $result   = $this->db->query($sql);
        
        $faculties = array(
            "head-of-department",
            "faculty"
        );
        if ($result && $result->num_rows() == 1) {
            $user         = $result->result();
            $organisation = $this->getUserOrganisation($user[0]->code);
            if (in_array($user[0]->role, $faculties)) {
                // get user object.
                echo "INSIDE";
                $user_details = $this->getUser($user[0]->username);
                $this->session->set_userdata("user_details", $user_details);
                echo $user[0]->username;
                echo json_encode($user_details);
            }
            $this->session->set_userdata('user', $user);
            $this->session->set_userdata('organisation', $organisation);
            // redirect based on user-type/role.
            echo 1;
        } else {
            echo 0;
        }
        
    }
    
    public function update_faculty_profile() {
        $faculty_id = $this->session->user[0]->username; // from session
        
        $name    = $this->input->post("faculty_name");
        $contact = $this->input->post("faculty_contact");
        $address = $this->input->post("faculty_address");
        $email   = $this->input->post("faculty_email");
        //$date_of_joining = $this->input->post("joining_date");
        //$department=$this->input->post("department");
        //$subject= $this->input->post("subject");
        //$level=$this->input->post("level");
        //$faculty_id = $this->input->post("faculty_id");
        
        $faculty_details = array(
            "name" => $name,
            "contact" => $contact,
            "address" => $address,
            "email" => $email
            //"date_of_joining"=>$date_of_joining,
            //"department"=>$department,
            //"subject"=>$subject,
            //"level"=>$level,
            //"faculty_id"=>$faculty_id
        );
        
        $sql = $this->db->set($faculty_details)
                    ->where("faculty_id", $faculty_id)
                    ->update('faculty');
        //print_r($this->db->last_query());    
        if ($this->db->affected_rows() == 1) {
            $this->session->set_userdata("user_details", 
            	$this->getUser($faculty_id));
            echo 1;
        } else {
            echo 0;
        }
    }
    
    public function update_hod_profile() {
        $faculty_id = $this->session->user[0]->username; // from session
        
        $name    = $this->input->post("faculty_name");
        $contact = $this->input->post("faculty_contact");
        $address = $this->input->post("faculty_address");
        $email   = $this->input->post("faculty_email");
        //$date_of_joining = $this->input->post("joining_date");
        //$department=$this->input->post("department");
        //$subject= $this->input->post("subject");
        //$level=$this->input->post("level");
        //$faculty_id = $this->input->post("faculty_id");
        
        $faculty_details = array(
            "name" => $name,
            "contact" => $contact,
            "address" => $address,
            "email" => $email
            //"date_of_joining"=>$date_of_joining,
            //"department"=>$department,
            //"subject"=>$subject,
            //"level"=>$level,
            //"faculty_id"=>$faculty_id
        );
        
        $sql = $this->db->set($faculty_details)
			        ->where("faculty_id", $faculty_id)
			        ->update('faculty');
        //print_r($this->db->last_query());    
        if ($this->db->affected_rows() == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
    
    public function update_university_profile() {
        $user = $this->session->user[0];
        
        $details = array(
            "university_name" => $this->input->get("name"),
            "address" => $this->input->get("address"),
            "contact" => $this->input->get("contact"),
            "email" => $this->input->get("email"),
            "district" => $this->input->get("district"),
            "postal_code" => $this->input->get("postal_code")
        );
        $res     = $this->db->set($details)
                        ->where("university_code", $user->code)
                        ->update("university");

        if ($this->db->affected_rows() == 1) {
            $this->session->set_userdata("organisation", 
            	     $this->getUserOrganisation($user->code));
            
            echo 1;
        } else {
            echo 0;
        }
        
    }
    
    public function save_university_image() {
        
        $user = $this->session->user[0];
        
        $config['upload_path']   = "assets/img";
        $config['allowed_types'] = 'gif|jpg|png|PNG|JPEG|JPG';
        $config['encrypt_name']  = TRUE;
        
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file_upload")) {
            $data = array(
                'upload_data' => $this->upload->data()
            );
            
            $title   = $this->input->post('title');
            $image   = $data['upload_data']['file_name'];
            $details = array(
                "logo" => "assets/img/" . $image
            );
            
            $res = $this->db->set($details)
                        ->where("university_code", $user->code)
                        ->update("university");

            if ($this->db->affected_rows() == 1) {
                $this->session->set_userdata("organisation", 
                	     $this->getUserOrganisation($user->code));
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo $this->upload->display_errors();
            
        }
    }
    
    public function save_faculty_image() {
        
        $user = $this->session->user[0];
        
        $config['upload_path']   = "assets/img";
        $config['allowed_types'] = 'gif|jpg|png|PNG|JPEG|JPG';
        $config['encrypt_name']  = TRUE;
        
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file_upload")) {
            $data = array(
                'upload_data' => $this->upload->data()
            );
            
            $title   = $this->input->post('title');
            $image   = $data['upload_data']['file_name'];
            $details = array(
                "pic" => "assets/img/" . $image
            );
            
            $res = $this->db->set($details)
                        ->where("faculty_id", $user->username)
                        ->update("faculty");
            if ($this->db->affected_rows() == 1) {
                $this->session->set_userdata("user_details", 
                	$this->getUser($user->username));
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo $this->upload->display_errors();
            
        }
    }
    
    public function save_hod_details() {
        $faculty_id = "FAC" . rand(1, 10000) . rand(5, 3000);
        $details    = array(
            "name" => $this->input->get("name"),
            "date_of_joining" => $this->input->get("date_of_joining"),
            "department" => $this->input->get("department"),
            "faculty_id" => $faculty_id,
            "level" => 6,
            "university_code" => $this->session->user[0]->code
        );
        $login      = array(
            "code" => $this->session->user[0]->code,
            "username" => $faculty_id,
            "password" => md5($faculty_id),
            "role" => "head-of-department"
        );
        
        $res          = $this->db->insert("faculty", $details);
        $login_create = $this->db->insert("user_login", $login);
        if ($res && $login_create) {
            echo 1;
        } else {
            echo 0;
        }
        
    }
    
    public function save_faculty() {
        $faculty_id   = "FACF" . rand(1, 90000) . rand(3, 661) . rand(2, 9543);
        $details      = array(
            "name" => $this->input->get("faculty-name"),
            "date_of_joining" => $this->input->get("faculty-joining-date"),
            "level" => $this->input->get("faculty-level"),
            "faculty_id" => $faculty_id,
            "university_code" => $this->session->user[0]->code,
            "department" => $this->input->get("department")
        );
        $login        = array(
            "code" => $this->session->user[0]->code,
            "username" => $faculty_id,
            "password" => md5($faculty_id),
            "role" => "faculty"
        );
        $res          = $this->db->insert("faculty", $details);
        $login_create = $this->db->insert("user_login", $login);
        if ($res && $login_create) {
            echo 1;
        } else {
            echo 0;
        }
    }
    
    public function save_activities() {
        $config['upload_path']   = "assets/img/proof";
        $config['allowed_types'] = 'gif|jpg|png|PNG|JPEG|JPG|docx|doc|txt|xls|xlsx';
        $config['encrypt_name']  = TRUE;
        $this->load->library('upload', $config);
        
        
        $org_id     = $this->session->user[0]->code;
        $name       = $this->input->post("name");
        $type       = $this->input->post("activity-type");
        $semester = $this->input->post("semester");
        $year_from = $this->input->post("year-from");
        $year_to = $this->input->post("year-to");
        //$proof = $_FILES['proof'];
        echo json_encode($_FILES);
        //echo count($_FILES['proof']['name']);
        $field_id = $this->input->post("field-id");
        
        $insert_ids = array();
        $count      = 0;
        $str        = "";
        foreach ($name as $key => $val) {
            $image = null;
            if ($this->upload->do_upload("proof-" . $key)) {
                $data = array(
                    'upload_data' => $this->upload->data()
                );
                
                //$title = $this->input->post('title');
                $image = $data['upload_data']['file_name'];
                
            } else {
                echo $this->upload->display_errors();
                die();
            }
            $details = array(
                "faculty_id" => $this->session->user[0]->username,
                "name" => $name[$key],
                "type" => $type[$key],
                "sem" => $semester[$key],
                "year_from" => $year_from[$key],
                "year_to" => $year_to[$key],
                "report" => $image
            );
            $res     = $this->db->insert("activity", $details);
            $idx     = $this->db->insert_id();
            array_push($insert_ids, $idx);
            if ($res) {
                $count++;
                $str .= '<tr id="' . $field_id[$key] . '"><td>' . $name[$key] . '</td><td>' . $semester[$key] . '</td>';
                $str .='<td>'.$year_from[$key].'</td><td>'.$year_to[$key].'</td><td>'.$type[$key].'</td>';
                $str .= '<td>' . $image . '</td>';
                $str .= '<td><button class="btn btn-danger activity-delete" data-id="' . $idx . '" data-delete="' . $field_id[$key] . '"><i class="icons font-1xl d-block cui-circle-x"></i></button></td></tr>';
            }
        }
        
        if ($count == sizeof($name)) {
            echo $str;
        } else {
            echo 0;
        }
        
    }

    public function delete_activity() {
        $id  = $this->input->get("id");
        $res = $this->db->set('is_active', 0)->where(array(
            'serial' => $id
        ))->update('activity');
        //$res = $this->db->replace("departmental_activities", array('isActive' => 0));
        if ($this->db->affected_rows() == 1) {
            echo 1;
        } else {
            echo 0;
        }
    }
    
    public function update_qualifications() {
        $faculty_id     = $this->session->user[0]->username;
        $qualifications = $this->input->post("qualification");
        echo var_dump($this->input->post("qualification"));
        
        if (!empty($qualifications)) {
            $val = $qualifications;
        }
        $id_for_proof = explode(",", $val);
        $successful_uploads = 0;
        $update_qualifications = true;
        foreach ($id_for_proof as $key => $id) {
            $img_path = $this->upload_file("proof-" . $id);
            if ($img_path != NULL) {
            	$this->db->insert("qualification_proof", array(
            		"faculty_id" => $faculty_id,
            		"proof" => $img_path,
            		"qualification_id" => $id
            	));
            	$successful_uploads++;
            }
        }
        //echo "count: " . $successful_uploads;
        if ($successful_uploads != count($id_for_proof)) {
        	$update_qualifications = false;
        }

        if ($update_qualifications) {       
	        $res = $this->db->select("*")->from("input_qualification")->where("faculty_id", $faculty_id)->get();
	        if ($res->num_rows() == 1) {
	            $res = $res->result();
	            //echo "<pre>" . print_r($res, true);
	            $collection_ids = $res[0]->qualification . "," . $val;
	            $res            = $this->db->set(array(
	                "qualification" => $collection_ids
	            ))->where("faculty_id", $faculty_id)->update("input_qualification");
	        } else {
	            $res = $this->db->insert("input_qualification", array(
	                "faculty_id" => $faculty_id,
	                "qualification" => $val
	            ));
	        }

	        echo 1;
	    }
	    else {
	    	echo 0 ;
	    }
        
    }

    public function upload_file($input_name) {
        
        $config['upload_path']   = 'assets/proof/';
        $connfig['file_name'] = rand(1,900).rand(1,9000).rand(1,9000)."STR";
        $config['allowed_types'] = 'gif|jpg|png|xlsx|xls|doc|txt|docx';
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($input_name)) {
            //echo $this->upload->display_errors();
            return null;
        } else {
            return $this->upload->data("full_path");
        }
        
        return null;
    }
    public function teaching_process_add() {
        $sem = $this->input->post("semester");
        $years = $this->input->post("year");
        $codes = $this->input->post("subject");
        $total_classes = $this->input->post("totalClasses");
        $classes = $this->input->post("classes");
        $faculty_id = $this->input->post("faculty-id");
        $field_id = $this->input->post("field-id");
        $successful_uploads = 0;
        $insert_ids = array();
        $str = "";

        foreach ($sem as $key => $val) {
            $img = $this->upload_file("proof-".$key);
            if ($img != NULL) {
                $to_save = array(
                    "faculty_id" => $faculty_id[$key],
                    "semester" => $sem[$key],
                    "year" => $years[$key],
                    "subject_code" => $codes[$key],
                    "total_classes" => $total_classes[$key],
                    "held_classes" => $classes[$key],
                    "teaching_proof" => $img
                );
                $res = $this->db->insert("teaching_process", $to_save);
                $idx     = $this->db->insert_id();
                array_push($insert_ids, $idx);
                if ($res) {
                    $str .= '<tr id="' . $field_id[$key] . '"><td>' . $sem[$key] . '</td><td>' . $years[$key] . '</td><td>'. $codes[$key] .'</td><td>'.$total_classes[$key].'</td><td>'.$classes[$key].'</td>';
                    $str .= '<td>' . $img . '</td>';
                    $str .= '<td><button class="btn btn-danger teaching-process-delete" data-id="' . $idx . '" data-delete="' . $field_id[$key] . '"><i class="icons font-1xl d-block cui-circle-x"></i></button></td></tr>';
                }
                $successful_uploads++;
            }

        }
        $data = array();
        if ($successful_uploads == count($sem)) {
           
           echo $str;
        }
        else {
            $data['result'] = 0;
            echo json_encode($data);
        }

        return null;
    }
    public function teaching_process_delete() {
        $id = $this->input->get("id");
        $res = $this->db->set(array("is_active" => 0))
                    ->where("serial", $id)
                    ->update("teaching_process");

        if ($this->db->affected_rows() == 1){
            echo 1;
        }
        else {
            echo 0;
        }
        return null;
    }

    public function get_faculty_data() {
        //sleep(3);
        $faculty_id = $this->input->get("facultyId");
        $type = $this->input->get("type"); // to differetiate b/w institute and HOD
        
        // type = 1 ->HOD
        // TYPE = 0 -> Institute/University
        
        $semester = 1; //getSemester(`date`) calculate semester a/c to date.
        $data = array();
        // get user details
        $details = $this->db->select("*")
                        ->from("faculty")
                        ->join("levels", "levels.id = faculty.level")
                        ->join("faculty_dept", "faculty_dept.id = faculty.department")
                        ->where("faculty_id", $faculty_id)
                        ->get()
                        ->result();
        // get user activities
        $activities = $this->db->where("faculty_id", $faculty_id)
                           ->where("sem", 1)
                           ->where("is_verified", 0);


        if ($type == 1) {
            $activities = $activities->where("type != ", "institute");
        } 
        else {
            $activities = $activities->where("type", "institute");
        }

        $activities = $activities->get("activity")->result();

        // get user qualifiations that need to be verified
        $to_get = array("qualification_name", "qualification_proof.id","qualification_proof.proof" );
        $qualifications = $this->db->select($to_get)
                                ->from("qualification_proof")
                                ->join("min_qualifications", "min_qualifications.id = qualification_proof.qualification_id")
                                ->where('faculty_id', $faculty_id)
                                ->where("is_verified", 0)
                                ->where("is_active", 1)
                                ->get()->result();

        // get ACR for user
        $acr = $this->db->where("faculty_id", $faculty_id)
                    ->where("is_active", 1)
                    ->get("acr_points")
                    ->result();

        // get teaching process scores
        $teaching_process = $this->db->where("faculty_id", $faculty_id)
                                 ->where("is_active", 1)
                                 ->get("teaching_process")
                                 ->result();

        $data['acr'] = $acr;
        $data['teaching_process'] = $teaching_process;
        $data['qualifications'] = $qualifications;
        $data['details'] = $details;
        $data['activities'] = $activities;

        
        echo json_encode($data);
        return null;
    }

    public function verify_activity() {
        $activity_id = $this->input->post("activity");
        $qualification_id = $this->input->post("qualification");
        
        if ($activity_id == -1) {
            $id = $qualification_id;
            $index = "id";
            $table = "qualification_proof";
        }
        else {
            $id = $activity_id;
            $index = "serial"; 
            $table = "activity";
        }
        
        $res = $this->db->set(array("is_verified" => 1))
                    ->where($index, $id)
                    ->update($table);

        if ($this->db->affected_rows() == 1) {
            echo 1;
        }
        else {
            echo 0;
        }
    }
	
	public function upload_time_table() {
		$this->load->view("time_table");
	}
    
}