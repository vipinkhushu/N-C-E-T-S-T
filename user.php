<?php
include('session.php');
if($user_check=="vipinkhushu@hotmail.com")
header("location: confAdmin.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Profile | RSTTMI 2016 [  YMCA Univeristy Of Science And Technology]</title>
    <meta name="description" content="National Conference On Emerging Trends in Science & Technology | YMCA University Of Science And Technology, Faridabad, India">
    <meta name="keywords" content="National,Conference,On,Emerging,Trends,in,Science,Technology,website,ymca,ymcaust,faridabad,india,mathura,road">
    <meta name="copyright" content="YMCA UST">
    <meta name="author" content="vipinkhushu@hotmail.com ">
    <link rel="icon" href="media/images/favicon.ico">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="style/ncoetisat.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://use.fonticons.com/1ddea501.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

	<script>
         function loadMap() {

            var mapOptions = {
               center:new google.maps.LatLng(28.3677046, 77.3170066),
               zoom:16,
               mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
			var marker = new google.maps.Marker({
          position: new google.maps.LatLng(28.3677046, 77.3170066),
          map: map,
       });
         }

         google.maps.event.addDomListener(window, 'load', loadMap);
      </script>

  </head>
  <body>
     <!-- Header -->
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
    <a class="navbar-brand hidden-lg hidden-md" href="">&nbsp;&nbsp;RSTTMI 2016</a>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;Home</a></li>
            <li><a href="aboutus.php"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;&nbsp;About Us</a></li>
           <?php if(isset($_COOKIE["vipin"])){ echo "<!--";}?> <li><a href="register.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Registration</a></li><?php if(isset($_COOKIE["vipin"])){ echo "-->";}?>
    <li><a href="topics.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;&nbsp;Topics Of Interest</a></li>
            <li><a href="paper.php"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp;&nbsp;Paper Format</a></li>
      <li><a href="comittee.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;Comittees</a></li>
            <li><a href="dates.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>&nbsp;&nbsp;Important Dates</a></li>
    
    
    <?php if(isset($_COOKIE["vipin"])){ echo "<!--";}?> <li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;
  Login</a></li><?php if(isset($_COOKIE["vipin"])){ echo "-->";}?> 
  
              <li><a href="" data-toggle="modal" data-target="#sponsorModal"><span class="glyphicon glyphicon-link" aria-hidden="true"></span>&nbsp;&nbsp;Sponsor Us</a></li>
  <?php if(!isset($_COOKIE["vipin"])){ echo "<!--";}?> <li><a href="user.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;My Account</a></li>
              <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;Log Out</a></li>
          <?php if(!isset($_COOKIE["vipin"])){ echo "-->";}?>
      </ul>
     

        </div><!--/.nav-collapse -->
       
    </div>
    
    </nav>
    </header>
    <!-- Header -->
    <!--Title-->
<?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='title'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
    <!-- Title Ends-->
  <br/>
  <div class="container" style="min-height:500px;">
    <div class="row">
      <span class="pull-right">Welcome <?php  echo $user_check; ?> </span>
      <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3 leftcol">
        <center>

          <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM users where `email`='$user_check'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $_SESSION["dp"]=$row["dp"];

            }
          }
          ?>
          <a href="" data-toggle="modal" data-target="#dpModal">
            <div class="imageHolder">
              <img src="dp/<?php echo $_SESSION["dp"]?>" alt="Your DP" style="width:200px;height:200px;" class="img-thumbnail"><br/><br/>
              <div class="show">
                <p style="text-shadow: 0 0 3px #FFFFFF, 0 0 5px #0000FF;"><b>Change Picture</b></p>

              </div>
            </div></a>


          </center>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <a href="#" data-toggle="modal" data-target="#paperModal">Submit Your Paper <span class="badge">New</span></a>
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">

              </div>
            </div>
          
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="" data-toggle="modal" data-target="#helpModal">Contact Us</a>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="" data-toggle="modal" data-target="#passwordModal">Change Password</a>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <a href="logout.php">Logout</a>
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

              </div>
            </div>

          </div>

        </div>
		      
        <div class="col-xs-12 col-sm-12  col-lg-8 col-md-8 " style="background-color:rgb(247, 247, 249);margin-left:5%;min-height:200px;">
          <h3 class="text-center">Your Status For NCETST 2015</h3>
         			<?php

            include('pass.php');
            

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql="SELECT * FROM users where `email`='$user_check'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                $_SESSION["feeconfirm"]=$row["feeconfirm"];
                $_SESSION["paperstatus"]=$row["paperstatus"];
                $_SESSION["applicationstatus"]=$row["applicationstatus"];
               

              }


            } else {
              //echo "No Registrations Yet";
            }

            $conn->close();
            ?>
      
		<p><div class="table-responsive">
					<table class="table table-bordered">
<tr><td>Registration Status</td><td> <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Completed&nbsp;</button></td></tr>
  <tr><td>Registration Fee Status</td><td>
 <?php
 if($_SESSION["feeconfirm"]=="0")
	 	 echo"<button type='button'  data-toggle='modal' data-target='#feesModal' class='btn btn-warning'>&nbsp;&nbsp;Pending: Pay Now&nbsp;</button>";

 else
	 echo"<button type='button'class='btn btn-success' ><span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp;Completed&nbsp;</button>";
 
 ?>
  </td></tr>
   <tr><td>Paper Submission Status</td><td><?php
 if($_SESSION["paperstatus"]=="0")
  {
	echo"<button type='button' data-toggle='modal' data-target='#paperModal' class='btn btn-warning'>&nbsp;&nbsp;Pending: Submit Now&nbsp;</button>";
 }
 else
	 echo"<button type='button' class='btn btn-success' ><span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp;Completed&nbsp;</button>";
 
 ?></td></tr>
	 <tr><td>Confirmation To Attend The Conference</td><td><?php
 if($_SESSION["applicationstatus"]=="0")
	 	 echo"<button type='button' class='btn btn-warning'>&nbsp;&nbsp;Pending&nbsp;</button>";
 else
	 echo"<button type='button' class='btn btn-success' ><span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp;Confirmed&nbsp;</button>";
 
 ?></td></tr>
</table></div>
					</p>
            
          <!--Payment Details Here-->
		  
		  <h3>Registration Fee Details:- </h3>
			 <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='payment'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
		  <!-- Payment Details here ends-->
        </div>
        
      </div>

    </div>

    <!-- Media Gallery And Calendar Starts-->
    
    <!-- media gallery ends-->
	    
  	        
  <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='sponsors'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
    <!-- footer -->
    <footer>
      <nav class="navbar navbar-default" style="min-height:30px;margin-bottom:0px;">
        <div class="container-fluid" >
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><br/><h3>Reach Us</h3>
          <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='reachus'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
<br/><h3>Join Us On</h3><br/>
          <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='social'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
<br/><br/>
                </div>

      <br/>
                <div  id = "sample" class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style = "width:300px; height:200px;">

                </div>
              </div>
			  <div class="row">
				    <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='foot'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
            </div>
        </div>
      </nav>
    </footer>

    <!-- Footer-->
	<!--Modal Data--->
  <!--Invalid Pass Data--->
<?php
 if(isset($_GET['err']))
  {
  $error=$_GET['err'];
  if($error=='invalidPass'){
  echo"<script type='text/javascript'>
  $(window).load(function(){
   $('#myModal').modal('show');
  });
  </script>";
  }

  }
   if(isset($_GET['msg']))
  {
  $msg=$_GET['msg'];
  if($msg=='sponsorSuccess'||$msg=='helpSuccess'||$msg='msgSuccess'){
  echo"<script type='text/javascript'>
  $(window).load(function(){
   $('#infoModal').modal('show');
  });
  </script>";
  }

  }
   if(isset($_GET['err']))
  {
  $error=$_GET['err'];
  if($error=='errorReg'||$error=='incompleteForm'){
  echo"<script type='text/javascript'>
  $(window).load(function(){
   $('#infoModal').modal('show');
  });
  </script>";
  }

  }
    if(isset($_GET['message']))
  {
  $error=$_GET['message'];
  if($error=='Success'||$error=='ErrorExt'||$error=='passChanged'||$error=='passChangeError'){
  echo"<script type='text/javascript'>
  $(window).load(function(){
   $('#infoModal').modal('show');
  });
  </script>";
  }

  }
  ?>

  <!--Invalid Pass Data Ends-->
		<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <?php
           if(isset($_GET['err']))
            {
            $error=$_GET['err'];
            if($error=='invalidPass'){
            echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>×</span></button>Invalid Username / Password Combination
	</div>";
            }

            }
            ?>
          <form action="login.php" method="post">
    <label for="username">Email</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

	</div>

  </div>
  <div class="form-group">
    <label for="password">Password</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div></div>
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Forgot Passoword</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
    </div>
  </div>
</div>

	<!--Modal-->
	<!-- Contact Us | Modal-->
	<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact Us | Help </h4>
      </div>
      <div class="modal-body">
	  <form action="complaint.php" method="post">
	  <div class="form-group">
    <label for="type">Type Of Problem</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></div>
<input type="text" value="<?php echo $_SERVER['REQUEST_URI']; ?>" name="uri" hidden="hidden">

 <select class="form-control" Id="type" name="type">
	<option>--Choose</option>
  <option value="genQuery">Event Related Query</option>
  <option value="loginhelp">Login Help</option>
  <option value="registerhelp">Register Help</option>
  <option value="webProblem">Overall Website Related Problem</option>
  <option value="passEmail">Regarding Passwords And Emails</option>
  <option value="paymentIssues">Regarding Payment Issues</option>
  <option value="peymentConfirmation">Payment Confirmation Issues</option>
  <option value="feedback">Feedback</option>
  <option value="others">Others</option>
</select>

	</div>

  </div>
        <div class="form-group">
    <label for="username">Email</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

	</div>

  </div>
  <div class="form-group">
<label for="username">Phone No.</label>
<div class="input-group">
<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>

</div>

</div>
  <div class="form-group">
    <label for="problem">Explain In Detail</label>
    <textarea class="form-control" rows="3"  name="problem" id="problem"></textarea>
  </div>
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>



	<!--Contact Us Modal | Ends-->
		<!-- Sponsor Modal -->
<div class="modal fade" id="sponsorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sponsor Us</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          
          <form action="login.php" method="post">
    <label for="username">Email</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>

 <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

	</div>

  </div>
  <div class="form-group">
    <label for="password">Phone Number </label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></div>
    <input type="text" class="form-control" id="password" name="phone" placeholder="Phone Number" required>
  </div></div>
     <label for="password">Brand / Organisation / Company Name</label>
	<div class="input-group">
	<div class="input-group-addon"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></div>
    <input type="text" class="form-control" id="password" name="company" placeholder="Brand / Organisation / Company Name" required>
  </div></div>
  
      
      <div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>

	<!--Sponsor | Modal Ends-->
	<!-- Info Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Notice</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <?php
           if(isset($_GET['msg']))
            {
            
            echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
	Your request has been recieved, We will contact you shortly
	</div>";
            
          
            }
			 if(isset($_GET['err']))
            {
            
            echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
	There occured some error while registering you, Please try again or Contact Us
	</div>";
            
          
            }
			if(isset($_GET['message']))
            {
            if($_GET['message']=="Success")
			{
				echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
	Thanks, We recieved your paper Successfully
	</div>";
			}
			else if($_GET['message']=="ErrorExt")
			{
				echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
	Your uploaded an invalid File.<br/>We accept only MS Word(.doc,.docx) And PDF Files For Papers<br/>And .jpg and .png for Display Images
	</div>";
			}
			else if($_GET['message']=="passChanged")
			{
				echo"  <div class='alert alert-success alert-dismissible fade in' role='alert'>
Your Password Was Changed Successfully	</div>";
			}
			else if($_GET['message']=="passChangeError")
			{
				echo"  <div class='alert alert-danger alert-dismissible fade in' role='alert'>
	The Current Password Your Entered Was Wrong, Please try again
	</div>";
			}
            
            
          
            }
            ?>
          
      </div>
    </div>
  </div>
</div>
</div>
	<!--Info Modal Ends-->
	<!--Pay Fees| Modal-->
	<div class="modal fade" id="feesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pay Registration Fee  | NCETST 2015 </h4>
      </div>
      <div class="modal-body">
  

			 <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='payment'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
				 	
	 	
	 	
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
      </div>
    </div>
  </div>
</div>



	<!--Pay Fees Modal | Ends-->
	 <!--Paper modal -->

          <div class="modal fade" id="paperModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Upload You Paper</h4>
                </div>
                <div class="modal-body">

                  <form action="uploadpaper.php" enctype="multipart/form-data"  method="post">
                    <div class="form-group"><br/><center>
                      <label for="attach"><h4>Choose  File (.doc,.docx, .pdf allowed)</h4></label><br/><br/>
                      <input type="file" name="uploaded" class="form-group"> 
                    </div></center>

                    <br/>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Upload Paper</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Paper modal ends-->
		  
          <!--Dp modal -->

          <div class="modal fade" id="dpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Change Your Display Picture</h4>
                </div>
                <div class="modal-body">

                  <form action="changedp.php" enctype="multipart/form-data"  method="post">
                    <div class="form-group"><br/><center>
                      <label for="attach"><h4>Choose Image File (.jpg,.png allowed) </h4></label><br/><br/>
                      <input type="file" name="uploaded" class="form-group"> 
                    </div></center>

                    <br/>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Upload Picture</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Dp modal ends-->
		  <!-- Change Password | Modal-->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Change Password </h4>
          </div>
          <div class="modal-body">
            <form action="changePasswordNew.php" method="post" id="passForm">
              <div role="alert" id="err1"></div>
              <div class="form-group">
                <label for="oldpassword">Current Password</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>

                  <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Current Password" required>

                </div>

              </div>
              <div class="form-group">
                <label for="newpassword1">New Password</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>

                  <input type="password" class="form-control" id="newpassword1" name="newpassword1" placeholder="New Password" required>

                </div>

              </div>
              <div class="form-group">
                <label for="newpassword2">Comfirm New Password</label>
                <div class="input-group">
                  <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>

                  <input type="password" class="form-control" id="newpassword2" name="newpassword2" placeholder="Repeat New Password" required>

                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" onClick="return validatePass()" >Change Password</button>
            </form>
            <script>
            function validatePass(){
              var x = document.forms["passForm"]["newpassword1"].value;
              var y = document.forms["passForm"]["newpassword2"].value;
              //  alert(x);
              if(x!=y)
              {
                document.getElementById('err1').className = "alert alert-danger alert-dismissible fade in";
                document.getElementById("err1").innerHTML = "The New Passwords Dont Match";
                //alert("You Cant Leave Any Of The Fields Empty");


                return false;		  }
              }
              </script>
            </div>
          </div>
        </div>
      </div>

      <!--Change Password Modal | Ends-->
	  
	</body>
</html>
<!--
///////////////////////////////////////////////////////////////////
Website Designed , Developed And Maintained By Vipin Khushu For YMCAUST-HAS Department
Email:- vipinkhushu@hotmail.com
Phone No :- +91 9643763712
//////////////////////////////////////////////////////////////////
-->