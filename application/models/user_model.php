<?php
class User_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function register_user($pwd){
        $userdata = array(
            'CreatedOn' => date('Y-m-d H:i:s'),
            'user_name' => $this->input->post('email'),
            'org_id' => $this->input->post('organization'),
            'Password' => md5($pwd),
        );
        $this->db->insert('user', $userdata);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function get_user_data($EmailID){
        $this->db->where('user_name', "$EmailID");
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function get_user_data_item($EmailID,$item){
        $user_data = $this->get_user_data($EmailID);
        return $user_data[$item];
    }

    public function check_email_exists($EmailID)
    {
        $this->db->where('user_name', "$EmailID");
        $query = $this->db->get('user');
        if ($query->num_rows() == 1)
            return true;
        else
            return false;
    }

    function check_credentials($EmailID, $password)
    {
        $this->db->where('user_name', "$EmailID");
        $this->db->where('Password', md5($password));
        $query = $this->db->get('user');
        if ($query->num_rows() == 1)
            return true;
        else
            return false;
    }

}

/**
 * Added By : Manish Kumar Sadhu
 * 20180602
 */