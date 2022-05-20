<?php

 include_once('autoload.php'); 

 class expenses{

  
 var $primary_key; 
 function __construct($expense_id=''){ 
 $this->primary_key=$expense_id;
}

public function create_expenses($debit,$credit,$particulars,$refference_number){
$q='insert into expenses(debit,credit,particulars,refference_number) values(:debit,:credit,:particulars,:refference_number)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':debit',$debit);
$stmt->bindParam(':credit',$credit);
$stmt->bindParam(':particulars',$particulars);
$stmt->bindParam(':refference_number',$refference_number);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_expenses($start='0',$limit='1000'){
$q='select * from expenses limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function expenses_constants(){$const=array('expense_id','date','debit','credit','particulars','refference_number');

 return $const;
}
 
 
public function update_expenses($debit,$credit,$particulars,$refference_number){
 
$q='update expenses set debit=:debit,credit=:credit,particulars=:particulars,refference_number=:refference_number where expense_id=:4767_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':debit',$debit);
$stmt->bindParam(':credit',$credit);
$stmt->bindParam(':particulars',$particulars);
$stmt->bindParam(':refference_number',$refference_number);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_expenses(){
$q='delete from expenses where expense_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_expenses($col,$value,$start='0',$limit='1000'){
$q='select * from expenses where '.$col.' like :col limit'.' '.$start.','.$limit;
 $value='%'.$value.'%'; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function get_expenses($id){
$q='select * from expenses where expense_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function check_between_dates_expenses($date1,$date2){
$q='select * from expenses where DATE(date) between :date1 and :date2 ';
  $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':date1',$date1);
$stmt->bindParam(':date2',$date2);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 


 } 
 
  ?>