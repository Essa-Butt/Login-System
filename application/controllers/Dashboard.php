<?php
class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $logindata =$this->session->userdata('loginData');
        if(empty($logindata))
        {
            redirect('http://mydev.com/Login');
        }

    }

    public function index()
    {
        $this->load->view('dashboard');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('http://mydev.com/Login');
    }
}

?>