<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_Model extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function create($args){
        if($this->db->insert('tickets',$args))
            $this->session->set_flashdata('ticketSuccess',1);
        else
            $this->session->set_flashdata('ticketSuccess',-1);
        redirect('ticket/open');
    }
}
