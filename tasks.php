<?php
include_once 'config.php';

session_name('au_session');
session_start();


$action=$_REQUEST['action']??'';
$user_id=$_GET['editid']??'';
$user_id_delete=$_GET['deleteid']??'';
$user_id_makeAdmin=$_GET['id']??'';







$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connection){
    throw new Exception("Database did not conect");

}

else
{
    if('registration'==$action){

     $name=filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
     $email=filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
     $password=filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);
     $cgpa=filter_input(INPUT_POST, 'cgpa',FILTER_SANITIZE_STRING);
     $gender=filter_input(INPUT_POST, 'gender',FILTER_SANITIZE_STRING);

        // echo $name;
        // echo $email;

        // echo $password;
        // echo $gender;

     $_password=password_hash($password, PASSWORD_BCRYPT);

     if($name&&$email&&$password&&$cgpa&&$gender){
        $query="INSERT INTO users (name,email,password,cgpa,gender) VALUES ('{$name}','{$email}','{$_password}','{$cgpa}','{$gender}')";


        mysqli_query($connection,$query);
        
        header("Location:index.php?registration=success");
    }
}elseif ('login'==$action) {

 $email=filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
 $password=filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);



 if($email && $password){
     

    $query="SELECT id,password FROM users WHERE email='{$email}'";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        $data=mysqli_fetch_assoc($result);
        $_password=$data['password'];
        if(password_verify($password, $_password)){
            $_SESSION['loggedin']=true;
            $_SESSION['id']=$data['id'];
            header("Location:home.php");

        }else
        {
             header("Location:index.php?error=login");
        }

    }
}
}
elseif('edit'==$action){

   $name=filter_input(INPUT_POST, 'name',FILTER_SANITIZE_STRING);
   $email=filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);

   $cgpa=filter_input(INPUT_POST, 'cgpa',FILTER_SANITIZE_STRING);
   $gender=filter_input(INPUT_POST, 'gender',FILTER_SANITIZE_STRING);


   if($name && $email && $cgpa && $gender){
    $query= "UPDATE users SET name='{$name}', email='{$email}', cgpa='{$cgpa}', gender='{$gender}' WHERE id='{$user_id}'";
    mysqli_query($connection,$query);
    header("Location:home.php");

}

}

elseif('delete'==$action){
    $query="DELETE FROM users WHERE id='{$user_id_delete}' ";
   
    mysqli_query( $connection, $query );
    header("Location:home.php");
}

elseif('makeAdmin'==$action){
    $query="UPDATE users SET status='1' WHERE id='{$user_id_makeAdmin}' ";
     mysqli_query( $connection, $query );
     header("Location:home.php");
}



}

