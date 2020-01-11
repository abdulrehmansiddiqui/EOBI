<?php
require_once getcwd().'/application/libraries/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Members_ship extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->model('invoice_model');
        $this->load->helper('user_helper');
    }

    public function index()
    {
        if (!islogged()) {
            redirect('login/login_form');
        }

        if($_POST){
            $data = $this->input->post();
            $answer = $this->invoice_model->membersship_insert($data);
        }
        $data["error_message"] = $this->session->flashdata('error');
        $this->load->view('members_ship');

    }
    public function membersship_rec()
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url() . "edit_voucher/members_hip";
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';	
        $config["first_link"] = "First";
        $config["first_tag_open"] = "<li>";
        $config["first_tag_close"] = "</li>";
        $config["last_link"] = "Last";
        $config["last_tag_open"] = "<li>";
        $config["last_tag_close"] = "</li>";
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '<li>';
        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '<li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['num_links'] = 10;
        $config["total_rows"] = $this->invoice_model->ms_record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["detail"] = $this->invoice_model->get_ms($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        
        $this->load->view('members_ship_rec', $data);
    }
    public function membersship_form()
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        $this->load->view('members_ship_form', $data);
    }
    public function membersship_search()
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        if($_POST){
            $search = $this->input->post('search');

            if($search == " "){
                redirect('members_ship/membersship_rec');
            }
            else{
                $data['detail'] = $this->invoice_model->ms_seacrh($search);
                $this->load->view('members_ship_search', $data);
            }

                
        }
        if(!$_POST){
            redirect('members_ship/membersship_rec');
        }

    }
}