<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("partial/header"); ?>
<script src="<?php echo base_url(); ?>assets/js/invoice.js"></script>
<section class="content-header">
    <?php if (isset($error_message)) { ?>
        <div class="alert alert-success alert-dismissable">
            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
            <?php echo $error_message; ?>
        </div>
    <?php } ?>
    <h1><a href="<?php echo base_url()."edit_voucher"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Cash Payment Vouchers</h1>
</section>
    <div class="box box-default">
        <div class="box-body">
        
        <div class="table-responsive">
                <table class="table w-100">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>On Account of</th>
                        <th>BPV #</th>
                        <th>Recived From</th>
                        <th>By Cheque Number</th>
                        <th>BPV Date</th>
                        <th>Rs</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($bpv as $post){ ?>
                    <tr>
                        <td><?php echo $post->date;?></td>
                        <td>
                        <?php foreach($account as $v){
                            if($post->sent_to == $v->account_id){
                                echo "$v->account_title";
                            }}
                        ?>
                        </td>
                        <td><?php echo $post->cpv_num;?></td>
                        <td>
                        <?php foreach($account as $v){
                            if($post->received_from == $v->account_id){
                                echo "$v->account_title";
                            }}
                        ?>
                        </td>
                        <td><?php echo $post->by_cheque_num;?></td>
                        <td><?php echo $post->cpv_date;?></td>
                        <td><?php echo $post->rs;?></td>
                        <td style="text-align:center">
                            <a class="btn btn-xs btn-success" href="<?php echo base_url()."edit_voucher/edit_cpv/$post->id"; ?>" title="Edit Item"><span class="fa fa-edit "></span></a>
                            <!-- <a class="btn btn-xs btn-danger" href="" title="Delete Item"><span class="glyphicon glyphicon-trash"></span></a> -->
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>

          <div class="row">
            <div class="col-lg-3 col-xs-6">
                
                

            </div><!-- ./col -->
          </div>
	    </div>
        </div>
    </div>

<?php $this->load->view("partial/footer"); ?>
