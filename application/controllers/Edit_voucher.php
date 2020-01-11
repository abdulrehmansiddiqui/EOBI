<?php
require_once getcwd().'/application/libraries/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Edit_voucher extends CI_Controller
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
        $data['inv_items'] = $this->items_model->inv_items();
        $data['serv_items'] = $this->items_model->serv_items();
        $data['customer'] = $this->accounts_model->get_customers();
        $data['accounts'] = $this->accounts_model->get_bankgeneral_accounts();
        $data['broker'] = $this->accounts_model->get_brokers();
        $data['account'] = $this->accounts_model->get_accounts();
        $data['get_fixed'] = $this->items_model->get_fixed();
        $this->load->view('edit_voucher', $data);

    }
    public function bank_payment($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        if($_POST){
            $sales_data = $this->input->post();
            $sales_data['date'] = date('Y-m-d',strtotime($sales_data['date']));
            $sales_data['bpv_date'] = date('Y-m-d',strtotime($sales_data['bpv_date']));
            $details = array();
            foreach($sales_data['details'] as $k=>$v){
                for($i=0;$i<count($v);$i++){
                    $details[$i][$k] = $v[$i];
                }
            }
            $sales_data['details'] = json_encode($details);
            $insert_type = $sales_data['submit'];
            unset($sales_data['submit']);
            $this->invoice_model->bpv_insert($sales_data);
            $this->invoice_model->delete_bpv($id);
            $data['error_message'] = 'You have successfull updated';
        }

        $data['account'] = $this->accounts_model->get_accounts();
        $data['bpv'] = $this->invoice_model->get_bpv();
        $this->load->view('all_bank_payment', $data);
    }
    public function bank_receipt($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        if($_POST){
            $sales_data = $this->input->post();
            $sales_data['date'] = date('Y-m-d',strtotime($sales_data['date']));
            $sales_data['brv_date'] = date('Y-m-d',strtotime($sales_data['brv_date']));
            $details = array();
            foreach($sales_data['details'] as $k=>$v){
                for($i=0;$i<count($v);$i++){
                    $details[$i][$k] = $v[$i];
                }
            }
            $sales_data['details'] = json_encode($details);
            $insert_type = $sales_data['submit'];
            unset($sales_data['submit']);
            $this->invoice_model->brv_insert($sales_data);
            $this->invoice_model->delete_brv($id);
            $data['error_message'] = 'You have successfull updated';
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['brv'] = $this->invoice_model->get_brv();
        $this->load->view('all_bank_receipt', $data);
    }
    public function cash_payment($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        if($_POST){
            $sales_data = $this->input->post();
            $sales_data['date'] = date('Y-m-d',strtotime($sales_data['date']));
            $sales_data['cpv_date'] = date('Y-m-d',strtotime($sales_data['cpv_date']));
            $details = array();
            foreach($sales_data['details'] as $k=>$v){
                for($i=0;$i<count($v);$i++){
                    $details[$i][$k] = $v[$i];
                }
            }
            $sales_data['details'] = json_encode($details);
            $insert_type = $sales_data['submit'];
            unset($sales_data['submit']);
            $this->invoice_model->cpv_insert($sales_data);
            $this->invoice_model->delete_cpv($id);
            $data['error_message'] = 'You have successfull updated';
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['bpv'] = $this->invoice_model->get_cpv();
        $this->load->view('all_cash_payment', $data);
    }
    public function cash_receipt($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        if($_POST){
            $sales_data = $this->input->post();
            $sales_data['date'] = date('Y-m-d',strtotime($sales_data['date']));
            $sales_data['crv_date'] = date('Y-m-d',strtotime($sales_data['crv_date']));
            $details = array();
            foreach($sales_data['details'] as $k=>$v){
                for($i=0;$i<count($v);$i++){
                    $details[$i][$k] = $v[$i];
                }
            }
            $sales_data['details'] = json_encode($details);
            $insert_type = $sales_data['submit'];
            unset($sales_data['submit']);
            $this->invoice_model->crv_insert($sales_data);
            $this->invoice_model->delete_crv($id);
            $data['error_message'] = 'You have successfull updated';
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['bpv'] = $this->invoice_model->get_crv();
        $this->load->view('all_cash_receipt', $data);
    }
    public function chart_account($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }

        if($_POST){
            $data = array(
                'char_accounts'=> $this->input->post('char_accounts'),
                'char_main'=> $this->input->post('char_main'),
                'char_sub'=> $this->input->post('char_sub'),
                'char_nature'=> $this->input->post('char_nature'),
                'sub_nature'=> $this->input->post('sub_nature')
            );

            $this->invoice_model->delete_char($id);
            $this->accounts_model->char_insert($data);
            $data['error_message'] = 'You have successfull update chart Account';
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['bpv'] = $this->invoice_model->get_chart_account();
        $this->load->view('all_chart_account', $data);
    }
    public function journal_voucher($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        if($_POST){
            $sales_data = $this->input->post();
            $sales_data['date'] = date('Y-m-d',strtotime($sales_data['date']));
            $sales_data['jv_date'] = date('Y-m-d',strtotime($sales_data['jv_date']));
            $details = array();
            foreach($sales_data['details'] as $k=>$v){
                for($i=0;$i<count($v);$i++){
                    $details[$i][$k] = $v[$i];
                }
            }
            $sales_data['details'] = json_encode($details);
            $insert_type = $sales_data['submit'];
            unset($sales_data['submit']);
            $this->invoice_model->jv_insert($sales_data);
            $this->invoice_model->delete_jv($id);
            $data['error_message'] = 'You have successfull updated';
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['bpv'] = $this->invoice_model->get_jv();
        $this->load->view('all_journal_voucher', $data);
    }
    public function edit_bpv($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['bpv'] = $this->invoice_model->edit_bpv($id);
        $this->load->view('edit_bank_payment', $data);
    }
    public function edit_brv($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }

        $data['account'] = $this->accounts_model->get_accounts();
        $data['brv'] = $this->invoice_model->edit_brv($id);
        $this->load->view('edit_bank_receipt', $data);
    }
    public function edit_cpv($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['cpv'] = $this->invoice_model->edit_cpv($id);
        $this->load->view('edit_cash_payment', $data);
    }
    public function edit_crv($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['crv'] = $this->invoice_model->edit_crv($id);
        $this->load->view('edit_cash_receipt', $data);
    }
    public function edit_jv($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }
        
        $data['account'] = $this->accounts_model->get_accounts();
        $data['jv'] = $this->invoice_model->edit_jv($id);
        $this->load->view('edit_journal_voucher', $data);
    }
    public function edit_chart_account($id)
    {
        if (!islogged()) {
            redirect('login/login_form');
        }

        $data['account'] = $this->accounts_model->get_accounts();
        $data['char'] = $this->invoice_model->edit_char($id);
        $this->load->view('edit_chart_account', $data);
    }
}