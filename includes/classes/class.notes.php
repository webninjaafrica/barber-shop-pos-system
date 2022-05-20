<?php

 include_once('autoload.php'); 

 class notes{

  
 var $primary_key; 
 function __construct($note_id=''){ 
 $this->primary_key=$note_id;
}

public function create_notes($subject,$content){
$q='insert into notes(subject,content) values(:subject,:content)';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':subject',$subject);
$stmt->bindParam(':content',$content);
$stmt->execute();
 $stmt=null;
 return 'ok'; }
 
 
static function read_notes($start='0',$limit='1000'){
$q='select * from notes limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function notes_constants(){$const=array('note_id','subject','content','date');

 return $const;
}
 
 
public function update_notes($subject,$content){
 
$q='update notes set subject=:subject,content=:content where note_id=:4767_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':subject',$subject);
$stmt->bindParam(':content',$content);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_notes(){
$q='delete from notes where note_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_notes($col,$value,$start='0',$limit='1000'){
$q='select * from notes where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function get_notes($id){
$q='select * from notes where note_id=:4767_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':4767_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function check_between_dates_notes($date1,$date2){
$q='select * from notes where DATE(date) between :date1 and :date2 ';
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