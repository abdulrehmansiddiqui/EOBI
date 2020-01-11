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
    <h1><a href="<?php echo base_url()."reports"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> General Ledger</h1>
</section>

<form style="form-inline" id="supplierbill" method="post" action="<?= base_url() ?>reports/generalledger">
    <!--  FLAME's 🔥 Code  -->
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="account">Title of Account</label>
                        <select name="char_id" id="account" class="form-control select2">
                            <option value="" style="display:none">Select Account</option>
                            <?php foreach($detail as $post){ ?>
                            <?php echo "<option value='$post->chart_id'>$post->char_accounts</option>";?>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="char_main">Account Code Main</label>
                        <input type="text" id="char_main" class="form-control" placeholder="Main" disabled />
                    </div>
                    <div class="form-group">
                        <label for="char_main">Nature</label>
                        <input type="text" id="char_main" class="form-control" placeholder="Nature" disabled />
                    </div>
                    <div class="form-group">
                        <label for="periods">Period Start</label>
                        <input type="date" name="periods" id="periods" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="char_sub">Account Code Sub</label>
                        <input type="text" name="char_sub" id="char_sub" class="form-control" placeholder="Sub" disabled />
                    </div>
                    <div class="form-group">
                        <label for="char_main">Sub Nature</label>
                        <input type="text" id="char_main" class="form-control" placeholder="Sub Nature" disabled />
                    </div>
                    <div class="form-group">
                        <label for="periode">Period End</label>
                        <input type="date" name="periode" id="periode" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <input type="submit" name="submit" value="Search" class="btn btn-success">
            </div>
        </div>
    </div>
</form>

    <div class="box box-default">
        <div class="box-body">
        <div class="table-responsive">
                <table class="table w-100">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Particulars</th>
                        <th>Member Ship No.</th>
                        <th>Deposit Slip No.</th>
                        <th>V #</th>
                        <th>Ref</th>
                        <th>Code</th>
                        <th>Sub Code</th>
                        <th>Chq. No.</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Balance</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($result as $post){?>
                    <tr>
                        <td><?php echo $post->date;?></td>
                        <td><?php echo $post->particulars;?></td>
                        <td><?php echo $post->member_ship;?></td>
                        <td><?php echo $post->deposit_slip;?></td>
                        <td><?php echo $post->v_no;?></td>
                        <td><?php echo $post->ref;?></td>
                        <td><?php echo $post->code;?></td>
                        <td><?php echo $post->sub_code;?></td>
                        <td><?php echo $post->chq_no;?></td>
                        <td><?php echo $post->debit;?></td>
                        <td><?php echo $post->credit;?></td>
                        <td><?php echo $post->balance;?></td>
                    </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
	    </div>
        </div>
    </div>

<?php $this->load->view("partial/footer"); ?>
