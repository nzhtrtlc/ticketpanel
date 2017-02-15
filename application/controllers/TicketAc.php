<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TicketAc extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ticketgonder_model');
        $ticketSuccess = isset($this->session->userdata["ticketSuccess"]) ? $this->session->userdata["ticketSuccess"] : 2;
        $this->twig->addGlobal('ticketSuccess', $ticketSuccess);
    }
    public function index()
    {
        $this->twig->display('pages/ticketac');
    }
    public function gonder(){
        $args = [
            "ticket_from" => $this->session->user_session["user_id"],
            "ticket_to" => $this->input->post('ticket_to'),
            "ticket_subject" => $this->input->post('ticket_subject'),
            "ticket_content" => $this->input->post('ticket_content'),
            "ticket_priority" => $this->input->post('ticket_priority')
        ];
        $this->ticketgonder_model->gonder($args);
    }
}
