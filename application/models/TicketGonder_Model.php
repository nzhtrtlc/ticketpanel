<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketGonder_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function gonder($args)
    {
        if($this->db->insert('tickets',$args))
            $this->session->set_flashdata('ticketSuccess',1);
        else
            $this->session->set_flashdata('ticketSuccess',-1);
        redirect('ticket/open');

    }
}
