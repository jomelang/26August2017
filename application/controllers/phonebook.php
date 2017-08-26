<?php

class Phonebook extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('mdl_contacts');
    }

    public function index(){
        $d['contacts'] = $this->mdl_contacts->getallcontacts();
        $this->load->view("v_dashboard", $d);
    }

    public function aboutme(){
        $this->load->view("v_aboutme");
    }

    public function mycontact(){
        $this->load->view("v_mycontact");
    }

    public function addcontact(){
        $this->load->view("v_addcontact");
    }

    public function savecontact(){
        $data = array(
            "fullname" => $_POST['fullname'],
            "contactno" => $_POST['contactno'],
        );

        $this->mdl_contacts->addnewcontact($data);

        redirect(base_url());
    }
}