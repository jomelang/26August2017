<?php

class Mdl_contacts extends CI_Model{
    
    //this is the code for adding record to database
    function addnewcontact($data){
        $this->db->insert('tblcontacts', $data);
    }

    public function getallcontacts(){
        $q = $this->db->get('tblcontacts');
        return $q->result();
    }
}