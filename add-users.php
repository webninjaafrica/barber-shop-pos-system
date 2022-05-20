<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-users.php'><i class='fa fa-list'></i>&nbsp;&nbsp;users</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;users</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new users($_GET['id']);
 echo $ss->update_users($names,$username,$password,$role,$branch); }
 else{ 
 $ss=new users(); echo $ss->create_users($names,$username,$password,$role,$branch); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; USERS/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$names=$username=$password=$role=$branch='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=users::get_users($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'>NAMES
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='names' class='form-control' placeholder='names' value='<?php

 echo $names; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>USERNAME
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='username' class='form-control' placeholder='username' value='<?php

 echo $username; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>PASSWORD
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='password' class='form-control' placeholder='password' value='<?php

 echo $password; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>ROLE
 
  </div>


 <div class='col-12 col-sm-9'><select name='role' class='form-control' placeholder='role' required='required'>
  <option>SELECT ROLE</option>
  <option value="admin">ADMIN</option>
  <option value="barber">BARBER</option>
</select>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>BRANCH
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='branch' class='form-control' placeholder='branch' value='<?php

 echo $branch; 
 
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