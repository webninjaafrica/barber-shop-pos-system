<?php

 include_once('autoload.php'); 

 class users{

  
 var $primary_key; 
 function __construct($user_id=''){ 
 $this->primary_key=$user_id;
}

public function create_users($names,$username,$password,$role,$branch){
$q='insert into users(names,username,password,role,branch) values(:names,:username,:password,:role,:branch)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':names',$names);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':role',$role);
$stmt->bindParam(':branch',$branch);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_users($start='0',$limit='1000'){
$q='select * from users limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function users_constants(){$const=array('user_id','names','username','password','join_date','role','branch');

 return $const;
}
 
 
public function update_users($names,$username,$password,$role,$branch){
 
$q='update users set names=:names,username=:username,password=:password,role=:role,branch=:branch where user_id=:4767_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':names',$names);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':role',$role);
$stmt->bindParam(':branch',$branch);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_users(){
$q='delete from users where user_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_users($col,$value,$start='0',$limit='1000'){
$q='select * from users where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function get_users($id){
$q='select * from users where user_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function login_users($username,$password){ 
$q='select * from users where username=:username and password=:password';
 $data=array();

 $stmt=DB::connect()->prepare($q); 
$stmt->bindParam(':username',$username); 
$stmt->bindParam(':password',$password); 

 $stmt->execute(); 
 $data['rows']=$stmt->fetch(PDO::FETCH_ASSOC); 
 $data['row_count']=$stmt->rowCount(); 
 return $data; 
 } 
 
 static function check_between_dates_users($date1,$date2){
$q='select * from users where DATE(join_date) between :date1 and :date2 ';
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