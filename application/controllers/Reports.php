<?php
require_once getcwd().'/application/libraries/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Reports extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->model('invoice_model');
        $this->load->model('items_model');
        $this->load->model('accounts_model');
        $this->load->model('m_supplier');
        $this->load->model('transaction_model');
        $this->load->helper('user_helper');
    }

    public function index()
    {
        if (!islogged()) {
            redirect('login/login_form');
        }

        $data["error_message"] = $this->session->flashdata('error');
        $this->load->view('reports', $data);
    }

    public function generalledger(){
        
        if($_POST){
            $ps = $this->input->post('periods');
            $pe = $this->input->post('periode');
            $chart_id = $this->input->post('char_id');
            
            $this->db->select('*');
            $this->db->from('chart_account_details');
            $this->db->where('date >=', $ps);
            $this->db->where('date <=', $pe);
            $this->db->where('chart_id',$chart_id);	
            $query = $this->db->get();
            $result = $query->result();

            $data["result"] = $result;

        }

        $data['detail'] = $this->items_model->get_characcount();
        $this->load->view('r_generalledger',$data);
    }
    public function trialbalance(){
        
        $this->db->select('*');
        $this->db->from('trail_balance');
        $query = $this->db->get();
        $result = $query->result();

        $data["result"] = $result;

        $this->load->view('r_trialbalance', $data);
    }
    public function incomestatement(){
        $this->load->view('r_incomestatement', $data);
    }
}