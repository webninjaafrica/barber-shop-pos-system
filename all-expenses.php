<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>
 <div class='row' id='row' style='margin-top:24px;padding:4px;'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li><a href='all-expenses.php'><i class='fa fa-list'></i>&nbsp;&nbsp;All EXPENSES</a></li> </ul>
 
  </div>

 
  </div>
 <style>#row{margin-top:24px;}</style>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <div class='btn-group'><a href='add-expenses.php' class='btn btn-info'><i class='fa fa-plus'></i> ADD NEW</a><a class='btn btn-primary' href='all-expenses.php' class='btn btn-default'><i class='fa fa-refresh'></i> expenses List</a>
 
  </div>

 
  </div></div>

 <div class='row' id='row'><div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><form class='form-inline'><i class='fa fa-calendar'> Search Between Dates: </i>
 <div class='input-group'><input type='date' name='date1' class='form-control' required='required'><input type='date' name='date2' class='form-control' required='required'><button type='submit' class='btn btn-default'>&nbsp;<i class='fa fa-search'></i>&nbsp;&nbsp;SEARCH</button>
 
  </div>
</form>
 
  </div></div>

 <div class='row' id='row'><div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <form class='form-inline'>
 <div class='input-group'><select name='type' class='form-control' required='required'><option value='debit'>DEBIT</option><option value='credit'>CREDIT</option><option value='particulars'>PARTICULARS</option><option value='refference_number'>REFFERENCE NUMBER</option></select><input type='text' name='query' class='form-control' required='required'><button style='margin-left:4px;border:1px solid lightgrey;' name='check' type='submit' class='btn btn-info'><i class='fa fa-search'></i> SEARCH</button>
 
  </div>
</form>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
<?php

 if(isset($_GET['id'])){ $r=new expenses($_GET['id']); 
 $r->delete_expenses();
 echo '<script>alert("ITEM WAS DELETED!"); window.location.href="all-expenses.php";</script>
';  } 
 $alldata=expenses::read_expenses(); $column=expenses::expenses_constants(); 
 if(isset($_GET['check']) && isset($_GET['type']) && isset($_GET['query'])){ 
 if(in_array($_GET['type'],$column)){ 
 $alldata=expenses::search_expenses($_GET['type'],$_GET['query']); }
 else{
 $alldata=expenses::read_expenses();
} 
 if(isset($_GET['date1']) && isset($_GET['date2'])){
 extract($_GET); 
  $alldata= expenses::check_between_dates_expenses($date1,$date2); 
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
<tr><th class="date">DATE</th><th class='debit'>DEBIT (KSH)</th><th class='credit'>CREDIT(KSH)</th><th class='particulars'>PARTICULARS</th><th class='refference_number'>REFFERENCE NUMBER</th><td class='Edit'>Edit</td><td class='Delete'>Delete</td></tr>
</thead><tbody>
 <?php
$dbt=0;
$ct=0;
 
 for($i=0; $i<count($alldata); $i++){ 
 $raw=$alldata[$i]; 
 
  ?><tr>
<td class='date'><?php

 echo $raw['date']; 
 
  ?></td>

    <td class='debit'><?php

 echo $raw['debit']; 
 $dbt+=$raw['debit'];
  ?></td><td class='credit'><?php

 echo $raw['credit']; 
 $ct+= $raw['credit'];
  ?></td><td class='particulars'><?php

 echo $raw['particulars']; 
 
  ?></td><td class='refference_number'><?php

 echo $raw['refference_number']; 
 
  ?></td><td class='Edit'><!--<a href='add-expenses.php?id=<?php

 echo $raw['expense_id']; 
 
  ?>' class='btn btn-success'><i class='fa fa-edit'></i> EDIT</a>--></td><td class='Delete'><!--<a href='all-expenses.php?id=<?php

 echo $raw['expense_id']; 
 
  ?>' class='btn btn-danger'><i class='fa fa-trash'></i> TRASH</a> --></td>  <tr><?php

 } 
 
  ?>
  <tr>
    <td>TOTALS</td> <td><?php echo $dbt; ?></td> <td><?php echo $ct; ?></td> <td></td> <td></td> <td></td> <td></td>
  </tr>
</tbody></table>
</div> 
  </div>

 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
   ?>