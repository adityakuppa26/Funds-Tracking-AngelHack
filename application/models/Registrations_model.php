<?php
class Registrations_model extends CI_Model 
{
	function __construct() 
	{
        parent::__construct();
    }
	
	function add_applicant()
	{
		$applicant_data = array();
        if($this->input->post('name')){
            $applicant_data['name'] = $this->input->post('name');
        }
        if($this->input->post('hall_ticket')){
            $applicant_data['hall_ticket'] = $this->input->post('hall_ticket');
        }
        if($this->input->post('phone_number')){
            $applicant_data['phone_number'] = $this->input->post('phone_number');
        }
        if($this->input->post('branch')){
            $applicant_data['branch'] = $this->input->post('branch');
        }
        if($this->input->post('vechicletype')){
            $applicant_data['vechicletype'] = $this->input->post('vechicletype');
        }
        if($this->input->post('vechiclenumber')){
            $applicant_data['vechiclenumber'] = $this->input->post('vechiclenumber');
        }
        
            $applicant_data['idcardpath'] = 'idcardpath';
            $applicant_data['aadharpath'] = 'aadharpath';
            $applicant_data['licensepath'] = 'licensepath';
            $applicant_data['rcpath'] = 'rcpath';
            $applicant_data['status'] = 'Verification Under progress';
		$this->db->insert('registrations', $applicant_data);
	}
	function get_registrations()
	{
		$query = $this->db->query("SELECT * FROM registrations");
		return $query->result();
	}
}