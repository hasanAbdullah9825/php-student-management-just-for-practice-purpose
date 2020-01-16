<?php
include_once "functions.php";
$topTenStudents=toptenStudents();
$topTenMaleStudents=toptenMaleStudents();
$topTenFemaleStudents=toptenFemaleStudents();
// print_r($topTenFemaleStudents);

session_name('au_session');
session_start();

	if(false==$_SESSION['loggedin']){
		header("Location:index.php");
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
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <title>Student Management | Home</title>

  </head>
  <body>
    <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="home.php">Home</a>
	  <a href="about.php">About</a>
	  <a href="record.php">Records</a>
	  <a href="contact.php">Contact</a>
	  <a href="auth.php">Logout</a>
	</div>

	<br>
	<span style="padding-left: 45%;font-size:30px;cursor:pointer;font-weight: bold;" onclick="openNav()">&#9776; Menu</span>
	
	
	<div class="container" style="padding-bottom: 60px;">
			<!-- <h2 style="margin: 0 auto; color: grey; padding: 40px 0px 25px 0px;"> Some Information about out students</h2> --> 
	    <div class="row" > 
	    	<div class="col-md-8"  style="margin: 0 auto; color: gray; text-align: center;" id="introduction">
	 			  				<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  				</h5>
			    
	 		</div>
	 		<div class="col-md-8" id="top10cgpa">
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Cgpa</th>
			      </tr>
			    </thead>

			    <tbody>
			    	<?php foreach($topTenStudents as $student){?>
			      <tr>
			      		<td><?php echo $student['name'];  ?></td>
			        	<td><?php echo $student['cgpa']; ?></td>
			      </tr>
			  <?php }?>
			     
			      
			    </tbody>
			  </table>
	 		</div>

	 		<div class="col-md-8" id="top10Malecgpa">
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Cgpa</th>
			      </tr>
			    </thead>

			    <tbody>
			    	<?php foreach($topTenMaleStudents as $student){?>
			      <tr>
			      		<td><?php echo $student['name'];  ?></td>
			        	<td><?php echo $student['cgpa']; ?></td>
			      </tr>
			  <?php }?>
			     
			      
			    </tbody>
			  </table>
	 		</div>

	 		<div class="col-md-8" id="top10Femalecgpa">
	 			<table class="table table-bordered" style="border: 2px solid grey;">
			    <thead>
			      <tr style="background: grey;color:white;">
			        <th>Name</th>
			        <th>Cgpa</th>
			      </tr>
			    </thead>

			    <tbody>
			    	<?php foreach($topTenFemaleStudents as $student){?>
			      <tr>
			      		<td><?php echo $student['name'];  ?></td>
			        	<td><?php echo $student['cgpa']; ?></td>
			      </tr>
			  <?php }?>
			     
			      
			    </tbody>
			  </table>
	 		</div>


	 		<div class="col-md-4 "  style="padding-left: 10%;" >
			    		<ul class="list-group list-hover">
    						<li  class="list-group-item list-group-item-success" id="top10cgpabutton"> <a href="#"> Top 10 cgpa holder</a></li>
    						<li  class="list-group-item list-group-item-info" id="top10Malecgpabutton"><a href="#">Top 10 Male Students List</a></li>
   							<li  class="list-group-item list-group-item-warning" id="top10Femalecgpabutton"><a href="#">Top 10 Female Students List</a></li>
   							<!-- <li  class="list-group-item list-group-item-danger"><a href="#">Top 5 male students</a></li>
   							<li  class="list-group-item list-group-item-success"><a href="#">Top 3 female students</a></li> -->
 				 		</ul>
	 		 </div>
	    </div>	
	</div>	


	<footer style="margin-top:300px;">
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <h3> Hasan </h3>
                    <p style="padding-right:10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="col-lg-4 col-sm-2 col-xs-3">
                    <h3> Contact </h3>
                    <ul>
                        <li><a class="email"href="#"> hasan.techtomorrow@gmail.com </a></li>
                        <br/>
                        <li> <p> I am a web developer </p> </li>
                        <li> <p> I love to learn </p> </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-2 col-xs-3">
                	<h3>Menu</h3>
                    <ul>
                        <li> <h5> <a href="#" style=""> ABOUT Me</a> <h5></li>
                        <li> <h5><a href="github.com/hasanAbdullah9825"> Git HUB </a> <h5></li>
                        <li> <h5><a href="#"> Facebook </a> <h5></li>
                        <li> <h5><a href="#"> Linked in </a> <h5></li>
                    </ul>
                </div>
               
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
                          
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left copyright"> Copyright © Hasan. </p>
       
        </div>
    </div>
    <!--/.footer-bottom--> 

</footer>

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