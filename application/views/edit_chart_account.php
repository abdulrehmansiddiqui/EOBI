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
    <h1><a href="<?php echo base_url()."edit_voucher/chart_account/0"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Edit Chart of account</h1>
</section>
<?php foreach($char as $row){ ?>
<form style="form-inline" id="supplierbill" method="post" action="<?= base_url() ?>edit_voucher/chart_account/<?php echo $row->chart_id;?>">
    <!--  FLAME's 🔥 Code  -->
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                   <h4 for="account">Account Code</h4>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="char_main">Main</label>
                        <input type="text" name="char_main" value="<?php echo $row->char_main;?>" id="char_main" class="form-control" placeholder="Main" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="char_sub">Sub</label>
                        <input type="text" name="char_sub" value="<?php echo $row->char_sub;?>" id="char_sub" class="form-control" placeholder="Sub" required />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="char_accounts">Name of Account</label>
                        <input type="text" name="char_accounts" value="<?php echo $row->char_accounts;?>" id="char_accounts" class="form-control" placeholder="Name of account" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Nature">Nature</label>
                        <select required name="char_nature" id="char_nature" class="form-control select2">
                            <option value="<?php echo $row->char_nature;?>" ><?php echo $row->char_nature;?></option>
                            <option value="Assets">Assets</option>
                            <option value="Liabilities">Liabilities</option>
                            <option value="Expensive">Expensive</option>
                            <option value="Accrual">Accrual </option>
                            <option value="Revenues">Revenues</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sub_nature">Sub Nature</label>
                        <input type="text" name="sub_nature" value="<?php echo $row->sub_nature;?>" id="sub_nature" class="form-control" placeholder="Sub Nature" >
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!--  FlAME's 🔥 Code End  -->
    <div class="row">
        <div class="col-md-1">
            <input type="submit" name="submit" value="Update" class="btn btn-success">
        </div>
    </div>
    <br>
</form>

<?php } ?>
<?php $this->load->view("partial/footer"); ?>
