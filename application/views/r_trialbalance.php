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
    <h1><a href="<?php echo base_url()."reports"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Trial Balance</h1>
</section>


<div class="box box-default">
        <div class="box-body">
        <div class="table-responsive">
                <table class="table w-100">
                    <thead>
                    <tr>
                        <th>Head Of Accounts</th>
                        <th>Code</th>
                        <th>Sub Code</th>
                        <th>Nature of A/c.</th>
                        <th>Debit</th>
                        <th>Credit</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($result as $post){?>
                    <tr>
                        <td><?php echo $post->char_accounts;?></td>
                        <td><?php echo $post->char_main;?></td>
                        <td><?php echo $post->char_sub;?></td>
                        <td><?php echo $post->char_nature;?></td>
                        <td><?php echo $post->debit;?></td>
                        <td><?php echo $post->credit;?></td>
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
	    </div>
        </div>
    </div>



<?php $this->load->view("partial/footer"); ?>
