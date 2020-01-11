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
    <h1>Invoice</h1>
</section>
<form style="form-inline" id="supplierbill" method="post" action="<?= base_url() ?>invoice/add_sales">
    <!--  FLAME's 🔥 Code  -->
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" name="date" id="date" class="form-control datepicker" >
                    </div>
                    <div class="form-group">
                        <label for="received_from">Received From</label>
                        <select name="received_from" id="received_from" class="form-control select2">
                            <option value="">Select Account</option>
                            <?php foreach($account as $v): ?>
                                <option value="<?= $v->account_id ?>"><?= $v->account_title ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rs">Rs</label>
                        <input type="number" name="rs" id="rs" class="form-control" placeholder="Rs." >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sent_to">On Account Of</label>
                        <select name="sent_to" id="sent_to" class="form-control select2">
                            <option value="">Select Account</option>
                            <?php foreach($account as $v): ?>
                                <option value="<?= $v->account_id ?>"><?= $v->account_title ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="by_cheque_num">By Cheque Number</label>
                        <input type="text" name="by_cheque_num" id="by_cheque_num" class="form-control" placeholder="By Cheque Number" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="brv_num">BRV #</label>
                        <input type="text" name="brv_num" id="brv_num" class="form-control" placeholder="BRV #" >
                    </div>
                    <div class="form-group">
                        <label for="brv_date">BRV Date</label>
                        <input type="text" name="brv_date" id="brv_date" class="form-control datepicker" >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box box-default">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table w-100">
                    <thead>
                    <tr>
                        <th>Account Code Number</th>
                        <th>Name</th>
                        <th>Narration</th>
                        <th>Debit</th>
                        <th>Credit</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody id="addItemsDiv" >
                    <tr id="item_1" >
                        <td>
                            <input type="text" name="details[account_code_num][]" id="account_code_num1"
                                   class="form-control" placeholder="Account Code Number">
                        </td>
                        <td>
                            <input type="text" name="details[name][]" id="name1" class="form-control" placeholder="Name">
                        </td>
                        <td>
                            <input type="text" name="details[narration][]" id="narration1" class="form-control" placeholder="Narration">
                        </td>
                        <td>
                            <input type="number" name="details[debit][]" id="debit1" class="form-control" placeholder="Debit">
                        </td>
                        <td>
                            <input type="number" name="details[credit][]" id="credit1" class="form-control" placeholder="Credit">
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="removeItem(1)" ><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" onclick="addMoreItem()" >Add Row</button>
                </div>
            </div>
        </div>
</div>
    <div class="box box-default">
        <div class="box-header">
            <h3 class="box-title">Checked in Audit Department</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="audit_department_verified_amount">Audit Department Verified Payment Amount</label>
                        <input type="number" name="audit_department_verified_amount" id="audit_department_verified_amount" class="form-control" placeholder="Rs" >
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <!--  FlAME's 🔥 Code End  -->
    <div class="row">
        <div class="col-md-1">
            <input type="submit" name="submit" value="Add Sale" class="btn btn-success">
        </div>
        &nbsp;
        <div class="col-md-1">
            <input type="submit" name="submit" value="Add & Print" class="btn btn-primary">
        </div>
    </div>
    <br>
</form>
<script>
    sevIndex = <?= (--$count !== null) ? --$count : 'null' ?>;
    invIndex = 0;


    let itemCounter = 1;
    addMoreItem = () => {
        itemCounter++;
        let html = `<tr id="item_${itemCounter}" >` +
            '<td>' +
            '<input type="text" name="details[account_code_num][]" id="account_code_num1" class="form-control" placeholder="Account Code Number">' +
            '</td>' +
            '<td>' +
            '<input type="text" name="details[name][]" id="name1" class="form-control" placeholder="Name">' +
            '</td>' +
            '<td>' +
            '<input type="text" name="details[narration][]" id="narration1" class="form-control" placeholder="Narration">' +
            '</td>' +
            '<td>' +
            '<input type="number" name="details[debit][]" id="debit1" class="form-control" placeholder="Debit">' +
            '</td>' +
            '<td>' +
            '<input type="number" name="details[credit][]" id="credit1" class="form-control" placeholder="Credit">' +
            '</td>' +
            '<td>' +
            `<a href="javascript:void(0)" onclick="removeItem(${itemCounter})" ><i class="fa fa-close"></i></a>` +
            '</td>' +
            '</tr>';
        $("#addItemsDiv").append(html);
    };

    removeItem = (id) => {
        document.getElementById('item_' + id).remove();
    };

    $(document).ready(function(){
        $(".select2").select2();
        $(".datepicker").datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
        })
    });

</script>


<?php $this->load->view("partial/footer"); ?>
