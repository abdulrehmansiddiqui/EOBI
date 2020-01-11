<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("partial/header"); ?>
<script src="<?php echo base_url(); ?>assets/js/invoice.js"></script>
<section class="content-header">
    <?php if (isset($error_message)) { ?>
        <div class="alert alert-danger alert-dismissable">
            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
            <?php echo $error_message; ?>
        </div>
    <?php } ?>
    <h1><a href="<?php echo base_url().""; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Reports</h1>
</section>
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php base_url()?>reports/generalledger" class="btn btn-large btn-primary">General Ledger</a>
                </div>
                <div class="col-md-3">
                    <a href="<?php base_url()?>reports/trialbalance" class="btn btn-large btn-info">Trial Balance</a>
                </div>
                <div class="col-md-3">
                    <a href="<?php base_url()?>reports/incomestatement" class="btn btn-large btn-danger">Income Statement</a>
                </div>
                <div class="col-md-3">
                    <a href="" class="btn btn-large btn-success">Balance Sheet</a>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view("partial/footer"); ?>
