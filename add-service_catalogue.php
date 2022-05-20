<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-service_catalogue.php'><i class='fa fa-list'></i>&nbsp;&nbsp;service_catalogue</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;service_catalogue</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new service_catalogue($_GET['id']);
 echo $ss->update_service_catalogue($service_category,$service_name,$charges); }
 else{ 
 $ss=new service_catalogue(); echo $ss->create_service_catalogue($service_category,$service_name,$charges); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; SERVICE CATALOGUE/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$service_category=$service_name=$charges='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=service_catalogue::get_service_catalogue($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'>SERVICE CATEGORY
 
  </div>


 <div class='col-12 col-sm-9'><select name='service_category' class='form-control' placeholder='service_category'required='required'>
  <option>CHOOSE CATEGORY</option>
  <?php $data=service_category::read_service_category(); for ($i=0; $i <count($data); $i++) { 
     ?>
     <option value="<?php echo $data[$i]['category_id']; ?>"><?php echo $data[$i]['category_name']; ?></option>
<?php } ?>
</select>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>SERVICE NAME
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='service_name' class='form-control' placeholder='service_name' value='<?php

 echo $service_name; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>CHARGES (KSH)
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='charges' class='form-control' placeholder='charges' value='<?php

 echo $charges; 
 
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