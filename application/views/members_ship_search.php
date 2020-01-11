<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view("partial/header"); ?>
<script src="<?php echo base_url(); ?>assets/js/invoice.js"></script>
<section class="content-header">
    <?php if (isset($error_message)) { ?>
        <div class="alert alert-danger alert-dismissable">
            <button class="close" aria-hidden="true" data-dismiss="alert" type="button">Ã—</button>
            <?php echo $error_message; ?>
        </div>
    <?php } ?>
    <h1><a href="<?php echo base_url()."members_ship"; ?>" title="Go Back"><span style="color:#000;" class="fa fa-arrow-left "></span></a> Members Ship List</h1>
</section>

<div class="box box-default">
    <div class="box-body">
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <form style="form-inline" method="post" action="<?php echo base_url()?>members_ship/membersship_search">
                        <label for="Search">Search</label>
                        <input type="text" name="search" id="Search" class="form-control" placeholder="Name / Designation / Department / CNIC" required />
                        <input type="submit" name="Search" Value="Search" class="btn btn-primary" >
                    </form>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table w-100">
                <thead>
                <tr>
                    <th>M.NO</th>
                    <th>NAME</th>
                    <th>FATHER'S/HUSBAND'S NAME</th>
                    <th>DESIGNATION</th>
                    <th>DEPARTMENT</th>
                    <th>PLOT CATEGORY</th>
                    <th>RELATION WITH MEMBER</th>
                    <th>RELATIVE/NOMINEE OF (MEMBERS' NAME)</th>
                    <th>P. NO.</th>
                    <th>CNIC NO.</th>
                    <th>DATE OF BIRTH</th>
                    <th>PLACE OF POSTING</th>
                    <th>ADDRESS</th>
                    <th>CELL. NO.</th>
                    <th>Pay Order No</th>
                    <th>BANK/BRANCH NAME</th>
                    <th>RS</th>
                    <th>AMOUNT</th>
                    <th>DATE OF APPLICATION</th>
                    <th>NAME OF NOMINEE</th>
                    <th>C.N.I.C OF NOMINEE/th>
                    <th>REFUND/UNDERTAKING</th>
                    <th>Edit/Delete</th>
                </tr>
                </thead>
                <tbody>

        <?php foreach($detail as $post){ ?>
        <tr>
                <td><?php echo $post->m_no;?></td>
                <td><?php echo $post->name;?></td>
                <td><?php echo $post->father_husband;?></td>
                <td><?php echo $post->designation;?></td>
                <td><?php echo $post->deparment;?></td>
                <td><?php echo $post->plot_cat;?></td>
                <td><?php echo $post->relation_member;?></td>
                <td><?php echo $post->relative_member;?></td>
                <td><?php echo $post->p_no;?></td>
                <td><?php echo $post->cnic;?></td>
                <td><?php echo $post->dob;?></td>
                <td><?php echo $post->palceofposting;?></td>
                <td><?php echo "$post->address $post->ad2 $post->ad3 $post->ad4 $post->ad5";?></td>
                <td><?php echo $post->cell_no;?></td>
                <td><?php echo $post->pay_order;?></td>
                <td><?php echo $post->bank_branch_name;?></td>
                <td><?php echo $post->rs;?></td>
                <td><?php echo $post->amount;?></td>
                <td><?php echo $post->dateofapplication;?></td>
                <td><?php echo $post->name_nominee;?></td>
                <td><?php echo $post->cninc_nominee;?></td>
                <td><?php echo $post->refund_undertaking;?></td>
                <td><a href="<?php echo base_url()."chart_account/delete_chart/$post->id"; ?>"><i class="fa fa-times"></i></a></td>
        </tr>
            <?php } ?>
                </tbody>
            </table>
        </div>
   <center><?php echo $links; ?></center>
    </div>
</div>


<?php $this->load->view("partial/footer"); ?>
