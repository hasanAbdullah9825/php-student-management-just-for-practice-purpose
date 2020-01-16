<?php
include_once 'config.php';
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
	throw new Exception('Database did not conect');
}
else{
  
	function dataCollect($user_id){
    global $connection;
    $query="SELECT * FROM users WHERE id='{$user_id}'";
    $result=mysqli_query($connection,$query);
    $data=mysqli_fetch_assoc($result);
    return $data;

}

function toptenStudents(){
global $connection;
$query="SELECT name,cgpa FROM users ORDER BY cgpa DESC LIMIT 10";
$result=mysqli_query($connection,$query);
$_data=array();
while($data=mysqli_fetch_assoc($result)){
	array_push($_data, $data);
}
return $_data;
}


function toptenMaleStudents(){
global $connection;
$query="SELECT name,cgpa FROM users WHERE gender='Male' ORDER BY cgpa DESC LIMIT 10";
$result=mysqli_query($connection,$query);
$_data=array();
while($data=mysqli_fetch_assoc($result)){
	array_push($_data, $data);
}
return $_data;
}

function toptenFemaleStudents(){
global $connection;
$query="SELECT name,cgpa FROM users WHERE gender='Female' ORDER BY cgpa DESC LIMIT 10";
$result=mysqli_query($connection,$query);
$_data=array();
while($data=mysqli_fetch_assoc($result)){
	array_push($_data, $data);
}
return $_data;
}


function isAdmin($id){
 global $connection;
 $query="SELECT status FROM users WHERE id='{$id}'";
 $result=mysqli_query($connection,$query);
 $data=mysqli_fetch_assoc($result);
 if($data['status']==1){
 	return true;
 }
return false;
  
}

function isSupperAdmin($id){
global $connection;
 $query="SELECT status FROM users WHERE id='{$id}'";
 $result=mysqli_query($connection,$query);
 $data=mysqli_fetch_assoc($result);
 if($data['status']==2){
 	return true;
 }
return false;
}

}