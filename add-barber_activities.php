<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-barber_activities.php'><i class='fa fa-list'></i>&nbsp;&nbsp;barber_activities</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;NEW&nbsp;SERVICE</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new barber_activities($_GET['id']);
 #echo $ss->update_barber_activities($user_id,$customer_names,$customer_contacts,$service_id,$amount_charged);
 echo "<div class='alert alert-danger'>EDIT IS NOT ALLOWED </div>"; }
 else{ 
 $ss=new barber_activities(); echo $ss->create_barber_activities($_SESSION['user_id'],$customer_names,$customer_contacts,$service_id,$amount_charged); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; BARBER ACTIVITIES/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$user_id=$customer_names=$customer_contacts=$service_id=$amount_charged='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=barber_activities::get_barber_activities($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'>USER ID
 
  </div>

 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>CUSTOMER NAMES
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='customer_names' class='form-control' placeholder='customer_names' value='<?php

 echo $customer_names; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>CUSTOMER CONTACTS
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='customer_contacts' class='form-control' placeholder='customer_contacts' value='<?php

 echo $customer_contacts; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>SERVICE ATTENDED
 
  </div>


 <div class='col-12 col-sm-9'>
  <select name='service_id' class='form-control' placeholder='service_id' required='required'>
    <option>SELECT SERVICE</option>
    <?php
$data=service_catalogue::read_service_catalogue();
for ($i=0; $i <count($data); $i++) { 
  echo "<option value='".$data[$i]["service_id"]."'>".$data[$i]["service_name"]."</option>";
}

 
  ?>
  </select>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>AMOUNT CHARGED
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='amount_charged' class='form-control' placeholder='amount_charged' value='<?php

 echo $amount_charged; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 
  </div>

 <div class='card-footer'><button type='submit' name='save' class='btn btn-primary btn-block'><i class='fa fa-save'></i> OKAY</button>
 
  </div>

 
  </div>
</form>
 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
  ?>