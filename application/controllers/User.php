<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
   /* public function __construct() {
   parent::__construct();
   $this->load->library(array('form_validation', 'csvimport'));
   $this->load->helper(array('url', 'language'));
   $this->load->library('pagination');
   $this->load->library('upload');
   }
    */

   public function get_faculty_data() {
      // $ss      = 'I-1003097846';
      // $faculty = $this->db->where('f_enrolled_in', $ss)->get('rs_faculty')->result();
      return $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($faculty));
   }

   public function index() {
      //  $ss              = 'I-1003097846';
      //  $data['faculty'] = $this->db->where('f_enrolled_in', $ss)->get('rs_faculty')->result();
      $this->load->view('profile');
   }
}
