<?php

 include_once('autoload.php'); 

 class barber_activities{

  
 var $primary_key; 
 function __construct($activity_id=''){ 
 $this->primary_key=$activity_id;
}

public function create_barber_activities($user_id,$customer_names,$customer_contacts,$service_id,$amount_charged){
$q='insert into barber_activities(user_id,customer_names,customer_contacts,service_id,amount_charged) values(:user_id,:customer_names,:customer_contacts,:service_id,:amount_charged)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':user_id',$user_id);
$stmt->bindParam(':customer_names',$customer_names);
$stmt->bindParam(':customer_contacts',$customer_contacts);
$stmt->bindParam(':service_id',$service_id);
$stmt->bindParam(':amount_charged',$amount_charged);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_barber_activities($start='0',$limit='1000'){
$q='select * from barber_activities limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 static function read_barber_activities_2($user_id,$start='0',$limit='1000'){
$q='select * from barber_activities where user_id=:user_id limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':user_id',$user_id);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
static function barber_activities_constants(){$const=array('activity_id','user_id','date','customer_names','customer_contacts','service_id','amount_charged');

 return $const;
}
 
 
public function update_barber_activities($user_id,$customer_names,$customer_contacts,$service_id,$amount_charged){
 
$q='update barber_activities set user_id=:user_id,customer_names=:customer_names,customer_contacts=:customer_contacts,service_id=:service_id,amount_charged=:amount_charged where activity_id=:4767_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':user_id',$user_id);
$stmt->bindParam(':customer_names',$customer_names);
$stmt->bindParam(':customer_contacts',$customer_contacts);
$stmt->bindParam(':service_id',$service_id);
$stmt->bindParam(':amount_charged',$amount_charged);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_barber_activities(){
$q='delete from barber_activities where activity_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_barber_activities($col,$value,$start='0',$limit='1000'){
$q='select * from barber_activities where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function get_barber_activities($id){
$q='select * from barber_activities where activity_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function check_between_dates_barber_activities($date1,$date2){
$q='select * from barber_activities where DATE(date) between :date1 and :date2 ';
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
 
 
 static function check_between_dates_barber_activities_2($date1,$date2,$user_id){
$q='select * from barber_activities where user_id=:user_id and DATE(date) between :date1 and :date2 ';
  $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':user_id',$user_id);
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