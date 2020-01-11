<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view("partial/header"); ?>
<script src="<?php echo base_url()?>/plugins/jqvalidation/jquery.validate.min.js"></script>

<script>
function showCustomer(str) {
  var xhttp;
  var url="http://www.localhost/eobi/abcd.php";
  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "error";

    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", url+str, true);
  xhttp.send();
}
</script>

<div id="container">
	<div class="page-header">
		<h1>Welcome to "<?php echo $config->company_name;?>" ERP System </h1>
    </div>
    <!-- <button onclick="showCustomer(1)" >asdasdasdas</button>
    
    <span id="txtHint">
    </span> -->

	<div class="divider"></div>
	<div id="body">
    <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4>Bank Payment Voucher</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-university"></i>
                </div>
                <a href="<?php echo site_url()?>bank_vouchers" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4>Bank Receipt</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list"></i>
                </div>
                <a href="<?php echo site_url()?>bank_receipt" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h4>Cash Payment Voucher</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-o"></i>
                </div>
                <a href="<?php echo site_url()?>cash_payment" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h4>Cash Receipt Voucher</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar-plus-o"></i>
                </div>
                <a href="<?php echo site_url()?>cash_receipt" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Journal Voucher</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="<?php echo site_url()?>journal_voucher" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h4>Chart Of Accounts</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-area-chart"></i>
                </div>
                <a href="<?php echo site_url()?>chart_account" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4>Membership List</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo site_url()?>members_ship" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <h4>Reports</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-flag"></i>
                </div>
                <a href="<?php echo site_url()?>reports" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h4>Edit</h4>
                  <p>Click Below to Manage</p>
                </div>
                <div class="icon">
                  <i class="fa fa-pencil"></i>
                </div>
                <a href="<?php echo site_url()?>edit_voucher" class="small-box-footer">Click to View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
          <!--
          <div class="row">
          	<div class="col-md-6">
            	<div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart 1</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
				<div class="box-body">
                  <div class="chart">
                    <canvas id="lineChart" style="height:250px"></canvas>
                  </div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            	<div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart 2</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
            </div>
        </div> <!--end of row-->

	</div>
</div>
<!--
<script>
	        var areaChartData = {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };
		
		var areaChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: false,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: false,
          //Number - Radius of each point dot in pixels
          pointDotRadius: 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        var lineChartOptions = areaChartOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(areaChartData, lineChartOptions);
		

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        var lineChartOptions = areaChartOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(areaChartData, lineChartOptions);
		
		
		
</script>
-->

<?php $this->load->view("partial/footer"); ?>