<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function login(){
        if (isset($_REQUEST['bttLogin'])) {
            $username = $this->input->post('username',true);
            $password = $this->input->post('userpass',true);
            $session_user = array( 
                'admin_name' => $username,
                'admin_pass' =>$password
            );
            $this->session->set_userdata($session_user);
 
            redirect('home/index');
        }
        $this->load->view('login');
    }


	public function index()
	{
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }
    
    public function demension(){
        
        if ($this->session->userdata('admin_name') <> null) {
            if (isset($_REQUEST['submitUpload'])) {
                redirect('home/kiemtradauvao');
            }
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    public function booklogistic(){
        if ($this->session->userdata('admin_name') <> null) {
            if (isset($_REQUEST['bttBook'])) {
                redirect('home/baogiaketqua');
            }
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    public function bookresult(){
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    public function demensionreview(){ 
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }


    public function demensionmanual(){
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }


    public function costLogistic(){ 
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    public function transaction(){
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    public function locationman(){
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }
    

    public function formula(){
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    

    public function group(){ 
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    public function listdemension(){ 
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        }
    }

    public function userlist(){
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        } 
    }

    public function adduser(){
        if ($this->session->userdata('admin_name') <> null) {
            $this->load->view('dashboard');
        } else {
            redirect('home/login');
        } 
    }

    function logout() { 
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_pass'); 
        redirect('home/login');
    }
 
}
