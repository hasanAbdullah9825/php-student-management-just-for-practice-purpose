

<?php

include_once 'functions.php';
session_name('au_session');
session_start();

	if(false==$_SESSION['loggedin']){
		header("Location:index.php");
	}

$user_id=$_GET['id']??'';
$user_information=dataCollect($user_id);

$f='';
$m='';

if('Male'==$user_information['gender']){
$m=true;
}

if('Female'==$user_information['gender']){
	$f=true;
}


 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/design.css">
    

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
  <body >
    

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-lg-4 col-sm-2 col-xs-2">
		
		</div>
		<div class="col-md-6 col-lg-4  col-sm-8 col-xs-8">
			<div class="card">
			  <!-- <div class="card-header">
			  	
			  </div> -->
			  <div class="card-body">
			  	
				<form action="tasks.php?editid=<?php echo $user_id; ?>" method="POST" id="form02">
					<h2 style="color: white;font-weight: bold;">Edit your data! </h2>
					<hr style="background: #fff">

				  
				  <div class="input-group mb-3"">
				    <div class="input-group-prepend">
				    </div>
				    <input type="text" class="form-control" name="name" placeholder="Enter your name"  value="<?php echo $user_information['name']; ?>">
				  </div>

				  <div class="input-group mb-3">
				    <div class="input-group-prepend">
				    </div>
				    <input type="email" class="form-control" name="email" placeholder="Enter email"   value="<?php echo $user_information['email']; ?>">
				  </div>

				  <div class="input-group mb-3">
					    <div class="input-group-prepend">
					    </div>
					   <!--  <input type="password" class="form-control" placeholder="Enter a Password"  minlength="8"> -->
				  </div>

				  <div class="input-group mb-3" >
					    <div class="input-group-prepend">
					    </div>
					    <input type="number" class="form-control" step="any" name="cgpa" placeholder="Enter your cgpa"  value="<?php echo $user_information['cgpa']; ?>"  >
				  </div>

				  <div class="form-group radio-btn">
			            <label class="form-check-label" for="radio1" style="color: white;display: inline-block;">
					        <input type="radio" class="form-check-input"  name="gender" value="Male" <?php if($m){echo "checked=checked";} ?> >Male <br>
					        <input type="radio" class="form-check-input"  name="gender" value="Female"  <?php if($f){echo "checked=checked";} ?>  >Female <br>
					         
				      </label>
			     </div>
					
				  
			       <input type="hidden" name="action" value="edit" id="action">
			     <input type="submit" name="submit"  value="Submit" class="btn btn-primary btn-block">

	
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
    
  </body>
</html>