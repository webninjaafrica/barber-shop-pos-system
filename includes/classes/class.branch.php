<?php

 include_once('autoload.php'); 

 class branch{

  
 var $primary_key; 
 function __construct($branch_id=''){ 
 $this->primary_key=$branch_id;
}

public function create_branch($branch_name,$address){
$q='insert into branch(branch_name,address) values(:branch_name,:address)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':branch_name',$branch_name);
$stmt->bindParam(':address',$address);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_branch($start='0',$limit='1000'){
$q='select * from branch limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function branch_constants(){$const=array('branch_id','branch_name','address','create_date');

 return $const;
}
 
 
public function update_branch($branch_name,$address){
 
$q='update branch set branch_name=:branch_name,address=:address where branch_id=:4767_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':branch_name',$branch_name);
$stmt->bindParam(':address',$address);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_branch(){
$q='delete from branch where branch_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_branch($col,$value,$start='0',$limit='1000'){
$q='select * from branch where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function get_branch($id){
$q='select * from branch where branch_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function check_between_dates_branch($date1,$date2){
$q='select * from branch where DATE(create_date) between :date1 and :date2 ';
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