<?php

include_once('head.php'); 
$user="";
$link="";
if (isset($_GET['user'])) {
  extract($_GET);
  $link="?user=".$user;
}
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <style>#row{margin-top:24px;}</style>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
  <form class="form-inline">
    <select name="user" class="form-control">
      <option>SELECT EMPLOYEE</option>
      <?php $data=users::read_users();
      for ($i=0; $i <count($data); $i++) { 
          ?>
          <option value="<?php echo $data[$i]['user_id']; ?>"><?php echo $data[$i]['names']; ?></option>
        <?php } ?>
    </select>
  </form>
 </div>
</div>
 

 <div class='row' id='row'><div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><form class='form-inline' action="<?php echo $link; ?>"><i class='fa fa-calendar'> Search Between Dates: </i>
 <div class='input-group'><input type='date' name='date1' class='form-control' required='required'><input type='date' name='date2' class='form-control' required='required'><button type='submit' class='btn btn-default'>&nbsp;<i class='fa fa-search'></i>&nbsp;&nbsp;SEARCH</button>
 
  </div>
</form>
 
  </div></div>

 

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
<?php

 if(isset($_GET['id'])){ $r=new barber_activities($_GET['id']); 
 #$r->delete_barber_activities();
 echo '<script>alert("ITEM WAS DELETED!"); window.location.href="all-barber_activities.php";</script>
';  } 
 $alldata=barber_activities::read_barber_activities_2($user); $column=barber_activities::barber_activities_constants(); 
 if(isset($_GET['check']) && isset($_GET['type']) && isset($_GET['query'])){ 
 if(in_array($_GET['type'],$column)){ 
 $alldata=barber_activities::search_barber_activities($_GET['type'],$_GET['query']); }
 else{
 $alldata=barber_activities::read_barber_activities();
} 
 if(isset($_GET['date1']) && isset($_GET['date2'])){
 extract($_GET); 
  $alldata= barber_activities::check_between_dates_barber_activities_2($date1,$date2,$user); 
 } 
 } 
  ?>
<center><b><?php

 echo count($alldata); 
 
  ?> Records Found. <?php

 if(isset($_GET['type']) && isset($_GET['query'])){ echo 'search results for: '.$_GET['type'].' / '.$_GET['query']; }
 
  ?></b></center><p><hr><p>
 <div class='table-responsive'>

<div class='table-responsive'>
<table id='table' style='width:100%;' border='1' cellpadding='2' class='table table-striped table-responsive table-hoverable table-bordered' id='table'>
 <thead>
<tr><th class="date">DATE</th><th class='user_id'>BARBER DETAILS</th><th class='customer_names'>CUSTOMER NAMES</th><th class='customer_contacts'>CUSTOMER CONTACTS</th><th class='service_id'>SERVICE ID</th><th class='amount_charged'>AMOUNT CHARGED</th><td class='Edit'>Edit</td><td class='Delete'>Delete</td></tr>
</thead><tbody>
 <?php

 
 for($i=0; $i<count($alldata); $i++){ 
 $raw=$alldata[$i]; 
 
  ?><tr>
<td class='date'><?php

 echo $raw['date']; 
 
  ?></td>

  	<td class='user_id'><?php
  $de=users::get_users($raw['user_id']);

 echo $de['names']." (id: ".$de['user_id'].")"; 
 
  ?></td><td class='customer_names'><?php

 echo $raw['customer_names']; 
 
  ?></td><td class='customer_contacts'><?php

 echo $raw['customer_contacts']; 
 
  ?></td><td class='service_id'><?php

 echo $raw['service_id']; 
 
  ?></td><td class='amount_charged'><?php

 echo $raw['amount_charged']; 
 
  ?></td><td class='Edit'><!--<a href='add-barber_activities.php?id=<?php

 echo $raw['activity_id']; 
 
  ?>' class='btn btn-success'><i class='fa fa-edit'></i> EDIT</a> --></td><td class='Delete'><!--<a href='all-barber_activities.php?id=<?php

 echo $raw['activity_id']; 
 
  ?>' class='btn btn-danger'><i class='fa fa-trash'></i> TRASH</a> --></td> <tr><?php

 } 
 
  ?>
</tbody></table>
</div> 
  </div>

 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
   ?>