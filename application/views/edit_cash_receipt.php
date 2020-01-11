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
    <h1><a href="<?php echo base_url()."edit_voucher/cash_receipt/0"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Edit Cash Receipt Voucher</h1>
</section>

<?php foreach($crv as $post){ ?>
<form style="form-inline" id="supplierbill" method="post" action="<?= base_url()?>edit_voucher/cash_receipt/<?php echo $post->id;?>">
    <!--  FLAME's 🔥 Code  -->
    <div class="box box-default">
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" name="date" id="date" value="<?php echo $post->date;?>" class="form-control datepicker" >
                    </div>
                    <div class="form-group">
                        <label for="received_from">Received From</label>
                        <select name="received_from" id="received_from" class="form-control select2">
                            <?php foreach($account as $v){
                                if($post->received_from == $v->account_id){
                                    echo "<option value='$v->account_id'>$v->account_title</option>";
                                }}
                            ?>
                            <?php foreach($account as $v){
                                echo "<option value='$v->account_id'>$v->account_title</option>";
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rs">Rs</label>
                        <input type="number" name="rs" id="rs" value="<?php echo $post->rs;?>" class="form-control" placeholder="Rs." >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sent_to">On Account Of</label>
                        <select name="sent_to" id="sent_to" class="form-control select2">
                            <?php foreach($account as $v){
                                if($post->sent_to == $v->account_id){
                                    echo "<option value='$v->account_id'>$v->account_title</option>";
                                }}
                            ?>
                            <?php foreach($account as $v){
                                echo "<option value='$v->account_id'>$v->account_title</option>";
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="by_cheque_num">By Cheque Number</label>
                        <input type="text" name="by_cheque_num" id="by_cheque_num" value="<?php echo $post->by_cheque_num;?>" class="form-control" placeholder="By Cheque Number" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="crv_num">CPV #</label>
                        <input type="text" name="crv_num" id="crv_num" value="<?php echo $post->crv_num;?>" class="form-control" placeholder="CPV #" >
                    </div>
                    <div class="form-group">
                        <label for="crv_date">BRV Date</label>
                        <input type="text" name="crv_date" id="crv_date" value="<?php echo $post->crv_date;?>" class="form-control datepicker" >
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
                    <tr>
                    </tr>
                    <?php $decode_data = json_decode($post->details);
                        $i = 1;
                        foreach ($decode_data as $row)
                        {
                    ?>
                    <tr id="item_<?php echo $i;?>" >
                        <td>
                            <input type="text" value="<?php echo $row->account_code_num;?>" name="details[account_code_num][]" id="account_code_num1" class="form-control" placeholder="Account Code Number">
                        </td>
                        <td>
                            <input type="text" value="<?php echo $row->name;?>" name="details[name][]" id="name1" class="form-control" placeholder="Name">
                        </td>
                        <td>
                            <input type="text" value="<?php echo $row->narration;?>" name="details[narration][]" id="narration1" class="form-control" placeholder="Narration">
                        </td>
                        <td>
                            <input type="number" value="<?php echo $row->debit;?>" name="details[debit][]" id="debit1" class="form-control" placeholder="Debit">
                        </td>
                        <td>
                            <input type="number" value="<?php echo $row->credit;?>" name="details[credit][]" id="credit1" class="form-control" placeholder="Credit">
                        </td>
                        <td>
                            <a href="javascript:void(0)" onclick="removeItem(<?php echo $i;?>)" ><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
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
                        <input type="number" name="audit_department_verified_amount" id="audit_department_verified_amount" value="<?php echo $post->audit_department_verified_amount;?>" class="form-control" placeholder="Rs" >
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
<script>
    sevIndex = <?= (--$count !== null) ? --$count : 'null' ?>;
    invIndex = 0;

    let itemCounter = <?php echo $i;?>;
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
