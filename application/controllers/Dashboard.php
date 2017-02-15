<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('user_session')){
            redirect('login');
        }
    }
	public function index()
	{
	    $data["title"] = "Dashboard";
		$this->twig->display('pages/dashboard',$data);
	}
}
