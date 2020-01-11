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
    <h1><a href="<?php echo base_url().""; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Edit Your Voucher</h1>
</section>
    <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4>Bank Payment Voucher</h4>
                  <p>Click Below to Edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-university"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher/bank_payment/0" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4>Bank Receipt</h4>
                  <p>Click Below to Edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher/bank_receipt/0" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h4>Cash Payment Voucher</h4>
                  <p>Click Below to Edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-o"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher/cash_payment/0" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h4>Cash Receipt Voucher</h4>
                  <p>Click Below to Edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar-plus-o"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher/cash_receipt/0" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Journal Voucher</h4>
                  <p>Click Below to Edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher/journal_voucher/0" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h4>Chart Of Accounts</h4>
                  <p>Click Below to Edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-area-chart"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher/chart_account/0" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4>Membership List</h4>
                  <p>Click Below to Edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher/members_hip" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
	    </div>
        </div>
    </div>

<?php $this->load->view("partial/footer"); ?>
