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
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('add-users.php','ADD USERS');" class="btn btn-primary btn btn-block btn-app btn-lg">
				<i class="fa fa-plus"></i><p>
					<b>ADD NEW BARBER</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('all-users.php','ALL BARBERS');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-user-o"></i><p>
					<b>CURRENT BARBERS</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('','');" class=" btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-"></i><p>
					<b>BARBER ACTIVITIES</b>
			</a>
		</div>
	</div>

	<div class="row" style="margin-top: 34px;">
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('add-service_catalogue.php','ADD TO CATALOGUE');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-briefcase"></i><p>
					<b>ADD MORE SERVICES</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('add-branch.php','REGISTER A BRANCH');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-plus"></i><p>
					<b>ADD BRANCHES</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('all-branch.php','ALL BRANCHES');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-home"></i><p>
					<b>ALL BRANCHES</b>
			</a>
		</div>
	</div>


	<div class="row" style="margin-top: 34px;">
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('add-expenses.php','ADD EXPENSE');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-book"></i>  <i class="fa fa-plus"></i><p>
					<b>ADD EXPENSE</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('all-expenses.php','EXPENSES');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-list"></i><p>
					<b>PREVIOUS EXPENSES</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('barber-analysis.php','EMPLOYEE PERFORMANCE');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-tachometer"></i><p>
					<b>EMPLOYEE PERFORMANCE</b>
			</a>
		</div>
	</div>



	<div class="row" style="margin-top: 34px;">
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('add-notes.php','ADD NOTES');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-book"></i>  <i class="fa fa-plus"></i><p>
					<b>ADD NOTES</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="javascript:open_page('all-notes.php','NOTES');" class="btn btn-primary btn btn-block btn btn-lg">
				<i class="fa fa-list"></i><p>
					<b>PREVIOUS NOTES</b>
			</a>
		</div>
		<div class="col-sm-4 col-md-4 col-sm-4 col-lg-4">
			<a href="logout.php" class="btn btn-danger btn btn-block btn btn-lg">
				<i class="fa fa-power-off"></i><p>
					<b>LOGOUT</b>
			</a>
		</div>
	</div>

</div>
<?php include_once('foot.php'); ?>