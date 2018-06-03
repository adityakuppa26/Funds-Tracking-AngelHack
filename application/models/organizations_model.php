<?php
class Organizations_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_org_data($id=""){
        $this->db->select("transaction_id,bank_account.account_name acnt_name,bank_account.account_number acnt_num,bank.bank_name bnk_name,bank_book.balance bb_bal,bank_book.last_updated_date last_date")
        ->from('bank_book')
        ->join('bank_account','bank_account.bank_account_id = bank_book.bank_account_id')
        ->join('bank','bank.bank_id = bank_book.bank_id')
        ->where("bank_account.org_id",$id)
        ->order_by('last_date','DESC');
        $resource=$this->db->get();
        //echo $this->db->last_query();
        return $resource->result();
        
    }

    function add_transaction(){
        $transaction_data = array(
            'date' => $this->input->post('date'),
            'bank_id'=>$this->input->post('bank'),
            'project_id' =>$this->input->post('project_name'),
            'transaction_amount' => $this->input->post('transaction_amount')
        );
        $this->db->insert('bank_book', $transaction_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}