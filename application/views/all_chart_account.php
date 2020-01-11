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
    <h1><a href="<?php echo base_url()."edit_voucher"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Chart of Accounts</h1>
</section>
    <div class="box box-default">
        <div class="box-body">
        
        <div class="table-responsive">
                <table class="table w-100">
                    <thead>
                    <tr>
                        <th>Account</th>
                        <th>Main</th>
                        <th>Sub</th>
                        <th>Nature</th>
                        <th>Sub Nature</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($bpv as $post){ ?>
                    <tr>
                        <td><?php echo $post->char_accounts;?></td>
                        <td><?php echo $post->char_main;?></td>
                        <td><?php echo $post->char_sub;?></td>
                        <td><?php echo $post->char_nature;?></td>
                        <td><?php echo $post->sub_nature;?></td>
                        <td style="text-align:center">
                            <a class="btn btn-xs btn-success" href="<?php echo base_url()."edit_voucher/edit_chart_account/$post->chart_id"; ?>" title="Edit Item"><span class="fa fa-edit "></span></a>
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
