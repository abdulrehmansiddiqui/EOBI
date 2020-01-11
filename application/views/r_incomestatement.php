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
    <h1><a href="<?php echo base_url()."reports"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Income Statement</h1>
</section>
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-3">

                

                </div>
            </div>
        </div>
    </div>


<?php $this->load->view("partial/footer"); ?>
