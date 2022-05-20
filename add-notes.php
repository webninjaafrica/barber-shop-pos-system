<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-notes.php'><i class='fa fa-list'></i>&nbsp;&nbsp;notes</a></li> <li><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;notes</a></li> </ul>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){ 
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new notes($_GET['id']);
 echo $ss->update_notes($subject,$content); }
 else{ 
 $ss=new notes(); echo $ss->create_notes($subject,$content); 
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form'>
 <div class='card'>
 <div class='card-header'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; NOTES/ info</h3>
 
  </div>

 <div class='card-body'><?php

 
$subject=$content='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=notes::get_notes($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row form-group'>
 <div class='col-12 col-sm-3'>SUBJECT
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='subject' class='form-control' placeholder='subject' value='<?php

 echo $subject; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>

 <div class='row form-group'>
 <div class='col-12 col-sm-3'>CONTENT
 
  </div>


 <div class='col-12 col-sm-9'><input type='text' name='content' class='form-control' placeholder='content' value='<?php

 echo $content; 
 
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