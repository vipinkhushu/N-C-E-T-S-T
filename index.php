<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>National Conference On Role Of Science & Technology Towards Make In India (RSTTMI 2016)</title>
    <meta name="description" content="National Conference On Role Of Science & Technology Towards Make In India (RSTTMI 2016)| YMCA University Of Science And Technology, Faridabad, India">
    <meta name="keywords" content="National Conference On Role Of Science & Technology Towards Make In India (RSTTMI 2016)">
    <meta name="copyright" content="Vipin Khushu">
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
            <li><a href="paper.php"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>&nbsp;&nbsp;Call For Papers</a></li>
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

    <!-- Media Gallery And Calendar Starts-->
    <div class="container-fluid" style="min-height:450px;">
      <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <div class="panel panel-primary">

          <div class="panel-body">
          <p>
            Sub: Announcement of National Conference on Role of Science and Technology Towards Make in India to be held on March 05-07, 2016.<br/>
<br/>It is our pleasure to inform that YMCA University of Science & Technology, Faridabad is organizing a National Conference on <b>Role of Science and Technology Towards ‘Make in India’ RSTTMI-2016 on March 05-07, 2016.</b>
<br/>This conference will provide opportunities for the delegates to exchange new ideas and applications experience face to face, to establish research relations and to find partners for future collaborations. Role of Science and Technology towards ‘Make in India’ is an initiative to ensure the availability of implementing the ideas, practical training of research and technology, that can help to translate these ideas in creating better invention and innovation in India.
<br/>It is kindly requested that you may please give a wide publicity of this conference among all the faculty members, your friends and colleagues with a request to attend this conference and contributing valuable research findings in the form of research papers. Your valued cooperation in this regard shall be highly appreciated.
<br/><br/>Hope to see you at RSTTMI-2016<br>
Thanking you


          </p>
		  </div></b></b>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Latest Updates</h3>
                    </div>
                      <div class="panel-body">
					   <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='updates'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>
                              
              </div>
            </div>
			   <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Important Links</h3>
                    </div>
                      <div class="panel-body">
									   <?php
          include('pass.php');
          $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql="SELECT * FROM info where `name`='links'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo $row["info"];

            }
          }
          ?>

					</div>
            </div>
          </div>
      </div>

    </div>

</div>
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
	
	    <br/>
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
  if($msg=='sponsorSuccess'||$msg=='helpSuccess'){
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
	<!-- Modal -->
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
            ?>
          
      </div>
    </div>
  </div>
</div>
</div>
	<!--Info Modal Ends-->
	</body>
</html>
<!--
///////////////////////////////////////////////////////////////////
Website Designed , Developed And Maintained By Vipin Khushu For YMCAUST-HAS Department
Email:- vipinkhushu@hotmail.com
Phone No :- +91 9643763712
//////////////////////////////////////////////////////////////////
-->