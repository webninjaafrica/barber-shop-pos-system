<?php include_once('head.php'); ?>
<div class="container-fluid">
<div class="row bg-primary" style="margin-top: 0.059%;padding-top: 24px;padding-bottom: 25px;">
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<h4>FRON OFFICE: BARBER MS</h4>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<h5>DATE: <span id="dd"></span></h5>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<h5>TIME: <span id="tt"></span></h5>
		</div>
</div>

<div class="row" style="margin-top: 34px;">
		<div class="col-sm-12 col-md-12 col-sm-12 col-lg-12">
			<table style="width: 100%;" class="table" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<a href="javascript:open_page('add-barber_activities.php','ENTROLL CUSTOMER');" class="btn  btn-info btn-block btn-lg">
				<i class="fa fa-plus"></i><p>
					<b>ENROLL A CUSTOMER</b>
			</a>
					</td>

					<td>
						<a href="javascript:open_page('my-barber_activities.php','MY CLIENTS');" class="btn btn-info btn-block btn-lg">
				<i class="fa fa-briefcase"></i><p>
					<b>ALL CLIENTS</b>
			</a>
					</td>
					<td>
						<a href="logout.php" class="btn btn-danger btn-block btn-lg">
				<i class="fa fa-power-off"></i><p>
					<b>LOG OUT</b>
			</a>
					</td>
				</tr>
			</table>
			</div>
</div>


</div>
<?php include_once('foot.php'); ?>