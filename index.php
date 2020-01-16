
<?php
session_name('au_session');
session_start();
if(isset($_SESSION['loggedin'])){
	if(true==$_SESSION['loggedin']){
	header("Location:home.php");
	die();
}}
	



include_once 'config.php';
$login_error=$_GET['error']??'';
$reg_success=$_GET['registration']??'';


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
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>Student Management</title>
    <style type="text/css">
    	.card{
          background: black;
          background-color: rgba(0,0,0,.7);
          margin-top: 20px;
         
        }
        .radio-btn{
        	margin-left: 25px;
        }
    </style>
  </head>
  <body style="background-image: url('assets/img/img1.jpg');">
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="about.php">About</a>
	  <a href="#" id="login" >Login</a>
	   <a href="#" id="registration">Sign Up</a> 
	  <a href="#">Contact</a>
	</div>

	<br>
	<h2 style="text-align: center;font-weight: bold;">This is a simple Student Management System</h2>
	<p style="text-align: center;">Click on the element below to open the side navigation menu.</p>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;" onclick="openNav()">&#9776; Menu</span>
	<?php if($reg_success){?>
<h5 class="text-danger text-center"  >you have registered successfully!!</h5>

     <?php } ?>
      

      <?php if($login_error){?>
<h5 class="text-danger text-center"  >you have entered an invalid email address or password. please try again !!</h5>

     <?php } ?>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-lg-4 col-sm-2 col-xs-2">
		
		</div>
		<div class="col-md-6 col-lg-4  col-sm-8 col-xs-8">
			<div class="card" id="log_reg">
			  <!-- <div class="card-header">
			  	
			  </div> -->
			  <div class="card-body">
			  	
				<form action="tasks.php" method="POST" id="form01">
					<h3 style="color: white;font-weight: bold;">Login </h3>
					<hr style="background: #fff">

				  
				  <div class="input-group mb-3" id="name">
				    <div class="input-group-prepend">
				    </div >
				    <input type="text" class="form-control" name="name" placeholder="Enter your name" >
				  </div>

				  <div class="input-group mb-3" id="email">
				    <div class="input-group-prepend">
				    </div>
				    <input type="email" class="form-control" name="email" placeholder="Enter email" >
				  </div>

				  <div class="input-group mb-3" id="password">
					    <div class="input-group-prepend">
					    </div>
					    <input type="password" class="form-control" name="password" placeholder="Enter a Password" minlength="8">
				  </div>

				  <div class="input-group mb-3" id="cgpa">
					    <div class="input-group-prepend">
					    </div>
					    <input type="number"  step="any" class="form-control" name="cgpa" placeholder="Enter your cgpa"  >
				  </div>

				  <div class="form-group radio-btn" id="sex">
			            <label class="form-check-label" for="radio1" style="color: white;display: inline-block;">
					        <input type="radio" class="form-check-input"  name="gender" value="Male"  >Male <br>
					        <input type="radio" class="form-check-input"  name="gender" value="Female"  >Female <br>
					         
				      </label>
			     </div>
					
				  
			     <input type="hidden" name="action" value="registration" id="action">
			     
			   <button type="Submit"  class="btn btn-primary btn-block">Submit</button>

			      
				</form>


			  </div>
			  
			</div>
		</div>
		<div class="col-md-3 col-lg-4  col-sm-2 col-xs-2">
			
		</div>
	</div>
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

  <script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/script.js"></script>

</html>