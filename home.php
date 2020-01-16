<?php

session_name('au_session');
session_start();
include_once 'functions.php';
if(false==$_SESSION['loggedin']){
	header("Location:index.php");
}
include_once 'config.php';
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$connection){

	throw new Exception("Database did not conect");
	
}
else{

	$query="SELECT * FROM users";

	$result=mysqli_query($connection,$query);
	$_data=array();
	while($data=mysqli_fetch_assoc($result)){
		array_push($_data, $data);
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/design.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>Student Management | Home</title>
  </head>
  <body>
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  
	  <a href="home.php">Home</a>
	  <a href="about.php">About</a>
	  <a href="records.php">Records</a>
	  <a href="contact.php">Contact</a>
	  <a href="auth.php">Logout</a>
	</div>

	<br>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;" onclick="openNav()">&#9776; Menu</span>

	<section style="padding: 65px 0px;background: #072b54;margin-top: 20px;">
		<div class="container-fluid text-center" >
			<h1 style="color: #fff; ">  </h1>
			<h3 style="color: #fff; "> Banner Space</h3>
		</div>
	</section>
	

	<div class="container">
		<div class="row">
			<h2 style="margin: 0 auto; color: grey;font-weight: bold; padding: 70px 0px 30px 0px;">Our Student Details</h2>
		</div>
	</div>

	<div class="container-fluid" style="padding-bottom: 60px;">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
			
			</div>
			<div class="col-md-8 col-lg-8  col-sm-8 col-xs-8">
				<div class="table-responsive">
				  <table class="table table-bordered table-striped table-hover ">
				    <thead>
				      <tr style="background: grey;color: white">
				        <th scope="col">Id</th>
				        <th scope="col">Name</th>
				        <th scope="col">Gender</th>
				        <th scope="col">Cgpa</th>
				         <?php if(isAdmin($_SESSION['id']) || isSupperAdmin($_SESSION['id']) ){ ?>
				      <th scope="col">Action</th> 
				  <?php } ?>
				      </tr>
				    </thead>
				    <tbody>

				     
				      <?php foreach($_data as $row){?>


				       <tr>
				        <td><?php echo $row['id']; ?></td>
				        <td><?php echo $row['name']; ?></td>
				        <td><?php echo $row['gender']; ?></td>
				        <td><?php echo $row['cgpa']; ?></td>
				       
				        <?php if(isAdmin($_SESSION['id']) || isSupperAdmin($_SESSION['id']) ){?>
				        	<td>
				        	<a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>
				        	<a href="tasks.php?action=delete&&deleteid=<?php echo $row['id'] ?>"" class="btn btn-danger">Delete</a>
				        	   <?php if(isSupperAdmin($_SESSION['id'])){?>
				        	<a href="tasks.php?action=makeAdmin&&id=<?php echo $row['id']; ?>" class="btn btn-info">Mark as admin</a>
				        		<?php } ?>
				            </td>

				        	<?php } ?>



				        

				      </tr>

				      <?php } ?>
				      <!-- <tr>
				        <td>42</td>
				        <td>Sakib</td>
				        <td>Mail</td>
				        <td>3.86</td>
				        <td>
				        	<a href="#" class="btn btn-info">Edit</a>
				        	<a href="#" class="btn btn-danger">Delete</a>
				        	<a href="#" class="btn btn-success">Mark as admin</a>
				        </td>
				      </tr>  -->
				    </tbody>
				  </table>
				</div>
			</div>
			<div class="col-md-2 col-lg-2  col-sm-2 col-xs-2">
				
			</div>
		</div>
	</div>


	<div class="container-fluid text-center" style="background: #072b54;">
		<h1 style="margin:0 auto;  color: #fff; padding: 65px 0px;"> Footer</h1>
		<hr style="background: white; font-size: 3px;">
		<p style="margin-bottom: 0px;padding-bottom: 8px;color: white">Credit goes to <span style="font-weight: bold">Md. Hasan</span></p>
	</div>
	
	



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		}
	</script>
  </body>
</html>