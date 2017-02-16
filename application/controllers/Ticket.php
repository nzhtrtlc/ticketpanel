<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        
    }
    public function open(){
        //Open Ticket
        $ticketSuccess = isset($this->session->userdata["ticketSuccess"]) ? $this->session->userdata["ticketSuccess"] : 2;
        $this->twig->addGlobal('ticketSuccess', $ticketSuccess);
        $this->twig->display('pages/ticketac');
    }
    public function create(){
        $args = [
            "ticket_from" => $this->session->user_session["user_id"],
            "ticket_to" => $this->input->post('ticket_to'),
            "ticket_subject" => $this->input->post('ticket_subject'),
            "ticket_content" => $this->input->post('ticket_content'),
            "ticket_priority" => $this->input->post('ticket_priority')
        ];
        $this->load->model('ticketgonder_model');
        $this->ticketgonder_model->gonder($args);
    }
    public function show($ticket_id){
        //Show Ticket
    }
    public function edit($ticket_id){
        //Edit Ticket
    }
    public function delete($ticket_id){
        //Delete Ticket
    }
    public function all(){
        $this->twig->display('pages/acikticketlar');
    }
}
