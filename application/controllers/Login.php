<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        if($this->session->has_userdata('user_session')){
            redirect('dashboard');
        }
        $loginErr = isset($this->session->userdata["loginError"]) ? $this->session->userdata["loginError"] : false;
        $this->twig->addGlobal('loginError', $loginErr);
        $this->twig->display('login');
    }
    public function checkUser(){
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $this->load->model('login_model');
        $this->load->library('passhass');
        $user = $this->login_model->checkPassword($email,$pass);
        if($user){
            $user_credentials["user_session"] = [
                "user_id" => $user->user_id,
                "fullName" => $user->name. " ".$user->surname,
                "email" => $user->email,
                "logged_in" => true
            ];
            $this->session->set_userdata($user_credentials);
            $this->twig->addGlobal('user_session',$user_credentials["user_session"]);
            redirect('dashboard');
        }
        else{
            $this->session->set_flashdata('loginError',true);
            redirect('login');
        }
        /*$this->load->library('passhass');

        $this->passhass->check_password($email);*/
    }
}
