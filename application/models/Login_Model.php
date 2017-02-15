<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    public function checkPassword($userEmail,$userPass)
    {
        $this->db->select('user_id,name,surname,email,pass');
        $this->db->from('users');
        $this->db->where('email',$userEmail);
        $query = $this->db->get()->row();
        if($query){
            if($this->passhass->check_password($query->pass,$userPass)){
                return $query;
            }
        }
        else{
            return false;
        }
        return false;
    }
}
