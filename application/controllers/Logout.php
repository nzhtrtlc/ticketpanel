<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    public function index(){
        if(!$this->session->has_userdata('logged_in')){
            $this->session->unset_userdata('user_session');
        }
        redirect('login');
    }
}
