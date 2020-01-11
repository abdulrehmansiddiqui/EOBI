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
    <h1><a href="<?php echo base_url()."members_ship"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Members Ship List</h1>
</section>
<form style="form-inline" id="supplierbill" method="post" action="<?= base_url() ?>members_hip/index">
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mno">M.NO.</label>
                        <input type="text" name="mno" id="mno" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" id="Name" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="FATHER">FATHER'S/HUSBAND'S NAME</label>
                        <input type="text" name="father_husband" id="FATHER" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="DESIGNATION">DESIGNATION</label>
                        <input type="text" name="designation" id="DESIGNATION" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="DEPARTMENT">DEPARTMENT</label>
                        <input type="text" name="department" id="DEPARTMENT" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="PLOT">PLOT CATEGORY</label>
                        <input type="text" name="plot_cat" id="PLOT" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="RELATION">RELATION WITH MEMBER</label>
                        <input type="text" name="relation_member" id="RELATION" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="RELATIVE">RELATIVE/NOMINEE OF (MEMBERS' NAME)</label>
                        <input type="text" name="relative_member" id="RELATIVE" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pno">P. NO</label>
                        <input type="text" name="p_no" id="pno" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cnicno">CNIC NO</label>
                        <input type="text" name="cnic" id="cnicno" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dob">DATE OF BIRTH</label>
                        <input type="text" name="dob" id="dob" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="PLACEPOSTING">PLACE OF POSTING</label>
                        <input type="text" name="palceofposting" id="PLACEPOSTING" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ADDRESS">ADDRESS</label>
                        <input type="text" name="address" id="ADDRESS" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cellno">CELL. NO</label>
                        <input type="text" name="cell_no" id="cellno" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="PayOrder">Pay Order No</label>
                        <input type="text" name="pay_order" id="PayOrder" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="BANKBRANCH">BANK/BRANCH NAME</label>
                        <input type="text" name="bank_branch_name" id="BANKBRANCH" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Rs">Rs</label>
                        <input type="text" name="rs" id="Rs" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="AMOUNT">AMOUNT</label>
                        <input type="text" name="amount" id="date" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dateAPPLICATI">DATE OF APPLICATION</label>
                        <input type="text" name="dateofapplication" id="dateAPPLICATI" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nameNOMINEE">NAME OF NOMINEE</label>
                        <input type="text" name="name_nominee" id="nameNOMINEE" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cnicNOMINEE">C.N.I.C OF NOMINEE</label>
                        <input type="text" name="cninc_nominee" id="cnicNOMINEE" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="REFUND">REFUND/UNDERTAKING</label>
                        <input type="text" name="refund_undertaking" id="REFUND" class="form-control" >
                    </div>
                </div>
            </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" value="Add" class="btn btn-primary" />
                    </div>
                </div>
        </div>
    </div>
    <br>
</form>

<?php $this->load->view("partial/footer"); ?>
