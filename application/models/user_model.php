<?php
class User_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    public function get_user_data($EmailID){
        $this->db->where('EmailID', "$EmailID");
        $query = $this->db->get('user');
        return $query->row_array();
    }

    public function get_user_data_item($EmailID,$item){
        $user_data = $this->get_user_data($EmailID);
        return $user_data[$item];
    }

    public function check_email_exists($EmailID)
    {
        $this->db->where('EmailID', "$EmailID");
        $query = $this->db->get('user');
        if ($query->num_rows() == 1)
            return true;
        else
            return false;
    }

    function check_credentials($EmailID, $password)
    {
        $this->db->where('EmailID', "$EmailID");
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