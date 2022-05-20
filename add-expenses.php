<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-expenses.php'><i class='fa fa-list'></i>&nbsp;&nbsp;expenses</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;expenses</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new expenses($_GET['id']);
 #echo $ss->update_expenses($debit,$credit,$particulars,$refference_number);
 echo "<script>alert('EDIT FEATURE IS NOT ACTIVE');</script>"; }
 else{ 
 $ss=new expenses(); echo $ss->create_expenses($debit,$credit,$particulars,$refference_number); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; EXPENSES/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$debit=$credit=$particulars=$refference_number='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=expenses::get_expenses($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'>DEBIT
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='debit' class='form-control' placeholder='debit' value='<?php

 echo $debit; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>CREDIT
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='credit' class='form-control' placeholder='credit' value='<?php

 echo $credit; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>PARTICULARS
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='particulars' class='form-control' placeholder='particulars' value='<?php

 echo $particulars; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>REFFERENCE NUMBER
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='refference_number' class='form-control' placeholder='refference_number' value='<?php

 echo $refference_number; 
 
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