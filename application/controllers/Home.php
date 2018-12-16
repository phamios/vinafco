<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	public function index()
	{
		$this->load->view('dashboard');
    }
    
    public function demension(){
        if (isset($_REQUEST['submitUpload'])) {
            redirect('home/kiemtradauvao');
        }
        $this->load->view('dashboard');
    }

    public function demensionreview(){ 
        $this->load->view('dashboard');
    }
}
