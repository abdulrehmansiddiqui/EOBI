<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        div.two {
            border-style: solid;
            border-width: medium;
        }
        @media print{
            button{
                display: none !important;
            }
        }
    </style>

</head>
<body>
<div class="container" style="margin-top: 100px">
    <h4 style="text-align: center"> EMPLOYEES OLD AGE BENEFITS INSTITUTION </h4>
    <h4 style="text-align: center;"> EMPLOYEES CO-OPERATIVE HOUSING SOCIETY </h4><br>
    <p style="text-align: center;"><strong style="text-decoration: underline;" >Bank Receipt Voucher</strong></p>

    <div class="row">
        <div class="col-md-offset-8" style="width: 16.6%;float:left;" >
            <p><strong>BPV#</strong></p>
            <p><strong>Date</strong></p>
        </div>
        <div style="width: 16.6%;float: right;">
            <p><?= $details['brv_num'] ?></p>
            <p><?= date('d-M-Y',strtotime($details['brv_date'])) ?></p>
        </div>
    </div>
    <div>
        <div style="margin-left: 10px">
        <table class="table table-striped  table-borderless">
                <tr>
                    <td><strong>Received From</strong></td>
                    <td style="text-decoration: underline"><?= number_format($details['received_from']) ?></td>
                </tr>
                <tr>
                    <td><strong>Rs</strong></td>
                    <td style="text-decoration: underline"><?= number_format($details['rs']) ?></td>
                </tr>
                <tr>
                    <td><strong>On Account of</strong></td>
                    <td style="text-decoration: underline"><?= $sent_to[0]->account_title ?></td>
                </tr>
                <tr>
                    <td><strong>By Cheque Number</strong></td>
                    <td style="text-decoration: underline"><?= $details['by_cheque_num'] ?></td>
                </tr>
                <tr>
                    <td><strong>Dated:</strong></td>
                    <td style="text-decoration: underline"><?= $details['date'] ?></td>
                </tr>
                <tr>
                    <td><strong>Member Account Number:</strong></td>
                    <td style="text-decoration: underline"><?= $details['member_account'] ?></td>
                </tr>
                <tr>
                    <td><strong>P. Number:</strong></td>
                    <td style="text-decoration: underline"><?= $details['p_num'] ?></td>
                </tr>
                <tr>
                    <td><strong>Total Debit:</strong></td>
                    <td style="text-decoration: underline">
                        <?php
                        $stack = array();
                        foreach(json_decode($details['details'],true) as $k=>$v): 
                            array_push($stack, $v['debit']);
                        endforeach; 
                            echo array_sum($stack);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Total Credit:</strong></td>
                    <td style="text-decoration: underline">
                        <?php
                        $stack = array();
                        foreach(json_decode($details['details'],true) as $k=>$v): 
                            array_push($stack, $v['credit']);
                        endforeach; 
                            echo array_sum($stack);
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div style="width: 45%;height:200px;border:1px solid black;float: left;">
                    <p><b> Checked in Audit Department </b></p>
                    <p>Amount verified for payment of Rs. <?= number_format($details['audit_department_verified_amount']) ?></p>
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div style="margin-left: 1px;height:50px; width:50px" class="col-sm-4">
                                <p>____________</p>
                                <p> (Audit)</p>
                            </div>
                            <div style="height:50px; width:50px; margin-left: 130px" class="col-sm-8"><p>
                                    _____________</p>
                                <p>DD/Director/DDG(Audit)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div style="width: 45%;height:200px; border:1px solid black;float: right;">
                    <p> Received cheque of Rs. <u style="margin-left:30px"> <?= number_format($details['rs']) ?></u></p><br>
                    <br>
                    <p style="margin-left: 80px">___________</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th style="width: 9%;text-align: center">Account Code No.</th>
                <th style="width: 40%;text-align: center">Name</th>
                <th style="width: 20%;text-align:center">Narration</th>
                <th style="width: 15%; text-align: center "> Debit</th>
                <th style="width: 15%; text-align: center"> Credit</th>
            </tr>
            <?php foreach(json_decode($details['details'],true) as $k=>$v): ?>
                <tr align="center">
                    <td><?= $v['account_code_num'] ?></td>
                    <td><?= $v['name'] ?></td>
                    <td><?= $v['narration'] ?></td>
                    <td><?= $v['debit'] ?></td>
                    <td><?= $v['credit'] ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <th style="width: 9%;text-align: center"></th>
                <th style="width: 40%;text-align: center"></th>
                <th style="width: 20%;text-align:center">Total</th>
                <th style="width: 15%; text-align: center ">
                <?php
                $stack = array();
                foreach(json_decode($details['details'],true) as $k=>$v): 
                    array_push($stack, $v['debit']);
                endforeach; 
                    echo array_sum($stack);
                ?>
                  </th>
                <th style="width: 15%; text-align: center">
                <?php
                $stack = array();
                foreach(json_decode($details['details'],true) as $k=>$v): 
                    array_push($stack, $v['credit']);
                endforeach; 
                    echo array_sum($stack);
                ?>
                </th>
            </tr>
        </table>
        <br>
        <br>

        <div class="container-fluid">

            <div class="row">

            <div style="margin-left: 10px;height:200px; width:350px" class="col-sm-4">
                <p> Prepared by :_______________</p><br>
                </div>
                <div style="margin-left: 10px;height:200px; width:350px" class="col-sm-4">
                <p> Checked by :_______________</p>
                </div>
                <div style="margin-left: 10px;height:200px; width:350px" class="col-sm-4">
                <p> Authorized by :_______________</p>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" onclick="window.print()" >Print</button>
    </div>
</div>


</body>
</html>
