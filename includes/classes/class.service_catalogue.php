<?php

 include_once('autoload.php'); 

 class service_catalogue{

  
 var $primary_key; 
 function __construct($service_id=''){ 
 $this->primary_key=$service_id;
}

public function create_service_catalogue($service_category,$service_name,$charges){
$q='insert into service_catalogue(service_category,service_name,charges) values(:service_category,:service_name,:charges)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':service_category',$service_category);
$stmt->bindParam(':service_name',$service_name);
$stmt->bindParam(':charges',$charges);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_service_catalogue($start='0',$limit='1000'){
$q='select * from service_catalogue limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function service_catalogue_constants(){$const=array('service_id','service_category','service_name','charges','create_date');

 return $const;
}
 
 
public function update_service_catalogue($service_category,$service_name,$charges){
 
$q='update service_catalogue set service_category=:service_category,service_name=:service_name,charges=:charges where service_id=:4767_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':service_category',$service_category);
$stmt->bindParam(':service_name',$service_name);
$stmt->bindParam(':charges',$charges);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_service_catalogue(){
$q='delete from service_catalogue where service_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_service_catalogue($col,$value,$start='0',$limit='1000'){
$q='select * from service_catalogue where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function get_service_catalogue($id){
$q='select * from service_catalogue where service_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function check_between_dates_service_catalogue($date1,$date2){
$q='select * from service_catalogue where DATE(create_date) between :date1 and :date2 ';
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