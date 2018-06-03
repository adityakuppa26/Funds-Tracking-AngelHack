<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class organization extends CI_Controller {

	var $site_name;
    var $site_config = array();
	var $data = array();
    var $id;

    function construct(){
        parent::__construct();
        $this->load->model("organizations_model");
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->config->load('site_settings', TRUE);

		$this->site_config = $this->config->item('site_settings');
		$this->site_name = $this->site_config['site_name'];
		$this->page_data['site_name'] = $this->site_name;
    }
    function all_org(){
        $this->page_data['title'] = "organizations|" . $this->site_name;
        $this->load->view('templates/header',$this->page_data); 
		$this->load->view('pages/home_page', $this->page_data);
		$this->load->view('templates/footer',$this->page_data); 

    } 
    function user_org($org_id=""){
        $this->load->model("organizations_model");
        if($org_id=="2") $this->speak_for_change();
        if($org_id=="3") $this->splash();
        if($org_id=="4") $this->mamas_children();
    }
    function speak_for_change(){
        $this->load->model("organizations_model");
        $this->page_data['title']="speak_for_change|" . $this->site_name;
        $this->page_data['tranx']=$this->organizations_model->get_org_data(2);
        $this->load->view('templates/header',$this->page_data); 
        $this->load->view('pages/speak',$this->page_data);
        $this->load->view('templates/footer',$this->page_data); 
    }
    function splash(){
        $this->load->model("organizations_model");
        $this->page_data['title']="splash|" . $this->site_name;
        $this->page_data['tranx']=$this->organizations_model->get_org_data(3);
        $this->load->view('templates/header',$this->page_data); 
        $this->load->view('pages/splash',$this->page_data);
        $this->load->view('templates/footer',$this->page_data); 

    }

    function mamas_children(){
        $this->load->model("organizations_model");  
        $this->page_data['title']="mama's children|" . $this->site_name;
        $this->page_data['tranx']=$this->organizations_model->get_org_data(4);
        $this->load->view('templates/header',$this->page_data); 
        $this->load->view('pages/mama',$this->page_data);
        $this->load->view('templates/footer',$this->page_data); 
    }

    function add_transaction(){
        $this->load->helper('url');
        $this->load->helper('form');
        $this->page_data['title']="Add transaction|" . $this->site_name;
        
        $this->load->view('templates/header',$this->page_data); 
        $this->load->view('pages/add_transaction');
        $this->load->view('templates/footer',$this->page_data); 
    }
    function transactions(){
        $this->load->helper('url');
        $this->load->helper('form');
        

    }
}