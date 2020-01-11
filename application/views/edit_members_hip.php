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
    <h1><a href="<?php echo base_url().""; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Members Ship List</h1>
</section>
<form style="form-inline" id="supplierbill" method="post" action="<?= base_url() ?>members_hip/edit">
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
                        <input type="text" name="Name" id="Name" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="FATHER">FATHER'S/HUSBAND'S NAME</label>
                        <input type="text" name="FATHER" id="FATHER" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="DESIGNATION">DESIGNATION</label>
                        <input type="text" name="DESIGNATION" id="DESIGNATION" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="DEPARTMENT">DEPARTMENT</label>
                        <input type="text" name="DEPARTMENT" id="DEPARTMENT" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="PLOT">PLOT CATEGORY</label>
                        <input type="text" name="PLOT" id="PLOT" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="RELATION">RELATION WITH MEMBER</label>
                        <input type="text" name="RELATION" id="RELATION" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="RELATIVE">RELATIVE/NOMINEE OF (MEMBERS' NAME)</label>
                        <input type="text" name="RELATIVE" id="RELATIVE" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pno">P. NO</label>
                        <input type="text" name="pno" id="pno" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cnicno">CNIC NO</label>
                        <input type="text" name="cnicno" id="cnicno" class="form-control" >
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
                        <input type="text" name="PLACEPOSTING" id="PLACEPOSTING" class="form-control" >
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ADDRESS">ADDRESS</label>
                        <input type="text" name="ADDRESS" id="ADDRESS" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cellno">CELL. NO</label>
                        <input type="text" name="cellno" id="cellno" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="PayOrder">Pay Order No</label>
                        <input type="text" name="PayOrder" id="PayOrder" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="BANKBRANCH">BANK/BRANCH NAME</label>
                        <input type="text" name="BANKBRANCH" id="BANKBRANCH" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Rs">Rs</label>
                        <input type="text" name="Rs" id="Rs" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="AMOUNT">AMOUNT</label>
                        <input type="text" name="AMOUNT" id="date" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dateAPPLICATI">DATE OF APPLICATION</label>
                        <input type="text" name="dateAPPLICATION" id="dateAPPLICATI" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nameNOMINEE">NAME OF NOMINEE</label>
                        <input type="text" name="nameNOMINEE" id="nameNOMINEE" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cnicNOMINEE">C.N.I.C OF NOMINEE</label>
                        <input type="text" name="cnicNOMINEE" id="cnicNOMINEE" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="REFUND">REFUND/UNDERTAKING</label>
                        <input type="text" name="REFUND" id="REFUND" class="form-control" >
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
