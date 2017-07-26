<?php
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->helper('url');
        $this->load->database();
        $logindata =$this->session->userdata('loginData');
        if(!empty($logindata))
        {
            redirect('http://mydev.com/Dashboard');
        }
    }

    public function index()
    {
        if(isset($_POST['email'])){
           $result = $this->User_Model->login($_POST['email'], $_POST['paswrd']);
           if($result == false)
           {
               echo 'Invalid email or password';
           }
           else{
               $sessionData = array();
               $sessionData['loginData'] = $result;
               $this->session->set_userdata($sessionData);
               redirect('http://mydev.com/Dashboard');

            }
        }
    else {
        $this->load->view('login.php');
    }
        }
    }

?>