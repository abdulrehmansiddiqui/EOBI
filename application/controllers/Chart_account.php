<?php
require_once getcwd().'/application/libraries/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Chart_account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->model('items_model');
        $this->load->model('accounts_model');
        $this->load->helper('user_helper');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index()
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

            $sales_id = $this->accounts_model->char_insert($data);
        }

        $data["error_message"] = $this->session->flashdata('error');
        $data['detail'] = $this->items_model->get_characcount();
        $this->load->view('chart_account', $data);
    }
    public function delete_chart($id){
        if (!islogged()) {
            redirect('login/login_form');
        }
            $this->accounts_model->chartaccount_delete($id);
    }
}