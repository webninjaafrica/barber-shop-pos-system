<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-branch.php'><i class='fa fa-list'></i>&nbsp;&nbsp;branch</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;branch</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new branch($_GET['id']);
 echo $ss->update_branch($branch_name,$address); }
 else{ 
 $ss=new branch(); echo $ss->create_branch($branch_name,$address); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; BRANCH/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$branch_name=$address='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=branch::get_branch($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'>BRANCH NAME
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='branch_name' class='form-control' placeholder='branch_name' value='<?php

 echo $branch_name; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>ADDRESS
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='address' class='form-control' placeholder='address' value='<?php

 echo $address; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 
  </div>

 <div class='card-footer'><button type='submit' name='save' class='btn btn-primary'><i class='fa fa-save'></i> OKAY</button>
 
  </div>

 
  </div>
</form>
 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
  ?>