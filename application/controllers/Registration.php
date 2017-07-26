<?php
class Registration extends CI_Controller {

       function __construct() {
           parent::__construct();
           $this->load->model('User_Model');
           $this->load->helper('url');
           $this->load->database();
       }

       public function index() {
           $query = $this->db->get("registrationform");
           $data['records'] = $query->result();
           $this->load->view('login',$data);
       }

       public function add_user() {

           $data = array(
               'firstname' => $this->input->post('fname'),
               'lastname' => $this->input->post('lname'),
               'gender' => $this->input->post('gender'),
               'age' => $this->input->post('age'),
               'email' => $this->input->post('email'),
               'password' => $this->input->post('paswrd')
           );

           $this->User_Model->insert($data);
           //echo "<pre>"; print_r($_POST); exit;
           redirect('http://mydev.com/Login');

       }

       public function get_user()
       {

           $user_listing = $this->User_Model->get();
           $view_data= array();
           $view_data['userList'] = $user_listing;
           $this->load->view('listing_view',$view_data);
       }
}
?>