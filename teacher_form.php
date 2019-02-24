<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:comp_login/indexlogin.php");
}

   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="navigation_and_footer.css">
	<link rel="stylesheet" type="text/css" href="about.css">
	 <link rel="icon" href="favicon.ico">
	 <!-- Bootstrap core CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <link href="Home/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/5.6.3/css/font-awesome.min.css">
	 
	 <!-- Custom styles for this template -->
	 <link href="Home/css/owl.carousel.css" rel="stylesheet">
	 <link href="Home/css/owl.theme.default.min.css"  rel="stylesheet">
	 <link href="Home/css/style.css" rel="stylesheet">
	 
	 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	 <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	 <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	 <script src="js/ie-emulation-modes-warning.js"></script>
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	 <!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	 <![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	 crossorigin="anonymous"></script>

</head>

<body>
    <!--Navbar starting-->
		<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id="navfull">
			<a class="navbar-brand" href="#"><p id="logo">Brand Logo</p></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse text-left" >
				<li class="nav nav-item navbar-left">
						<a class="nav-link navbar-left " id="navitem" style="margin-left:700px;" href="Home/index.html">Home</a>
						</li>
			</div>

				<div class="collapse navbar-collapse text-left dropdown" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left dropdown-toggle " id="navitem" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false" href="#">Form</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="teacher_form.php">Teacher Application Form</a>
									<a class="dropdown-item" href="student_form.php">Student Application Form</a>
								</div>
						</li>
			</div>

				<div class="collapse navbar-collapse text-left" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left " id="navitem" href="about.html">About US</a>
						</li>
			</div>
			
			<div class="collapse navbar-collapse text-left" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left " id="navitem" href="comment1/index.php">Support</a>
							</li>
			</div>
			<div class="collapse navbar-collapse text-left" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left " id="navitem" href="comp_login/indexlogin.php"><button class="btn btn-success" style="margin-top: 0px;">
									Signup
								</button></a>
							</li>
				
			</div>
			</nav><br><br><br>
    <div class="container">
        <h2>Teacher Application Form</h2>
        <form action="teacherinsert.php" method="POST" class="form needs-validation">
            <!--first name-->
            <div class="form-group row">
                <label for="fname-form" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" size="20" maxlength="30" class="form-control" id="fname-form"
                        placeholder="First Name" required>
                </div>
            </div>
            <!--last name-->
            <div class="form-group row">
                <label for="lname-form" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name" size="20" maxlength="30" class="form-control" id="lname-form"
                        placeholder="Last Name" required>
                </div>
            </div>
            <!--father's name-->
            <div class="form-group row">
                <label for="gardian-form" class="col-sm-2 col-form-label">Father's Name/Husband's name</label>
                <div class="col-sm-10">
                    <input type="text" name="gardian_name" size="20" maxlength="30" class="form-control" id="gardian-form"
                        placeholder="Gardian Name" required>
                </div>
            </div>
            <!--email-->
            <div class="form-group row">
                <label for="email-form" class="col-sm-2 col-sm-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" id="email-form" class="form-control" placeholder="name@example.com"
                        required>
                </div>
            </div>
            <!--DOB-->
            <div class="form-group row">
                <label for="dob-form" class="col-sm-2 col-sm-label">DOB</label>
                <div class="col-sm-10">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="dob-form">Date</label>
                            <input type="text" class="form-control mb-2" id="dob-form" placeholder="Date" pattern="[0-9]{2}"
                                minlength="1" maxlength="2" required>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="dob-form">Month</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">/</div>
                                </div>
                                <input type="text" class="form-control" id="dob-form" placeholder="Month" pattern="[0-9]{2}"
                                    minlength="1" maxlength="2" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="dob-form">Year</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">/</div>
                                </div>
                                <input type="text" class="form-control" id="dob-form" placeholder="Year" pattern="[0-9]{4}"
                                    minlength="4" maxlength="4" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Martial status-->
            <div class="form-group row">
                <label for="martial-status" class="col-sm-2 col-sm-label">Martial-status</label>
                <div class="col-auto">
                    <label for="martial-status" class="sr-only">Married</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="martial-status" id="married" value="married" class="custom-control-input">
                        <label for="married" class="custom-control-label">Married
                        </label>
                    </div>
                </div>
                <div class="col-auto">
                    <label for="martial-status" class="sr-only">Unmarried</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="martial-status" id="unmarried" value="unmarried" class="custom-control-input">
                        <label for="unmarried" class="custom-control-label">Unmarried</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="address-form" class="col-sm-2 col-sm-label">Work Address</label>
                <div class="col-sm-10">
                    <textarea type="text" name="address" id="address-form" class="form-control" rows="2" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="study-form" class="col-sm-2 col-sm-label">School/college(If Studying)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="inst-name" id="study-form" placeholder="School/College Name">
                </div>
            </div>

            <!--subjects to teach-->
            <div class="form-group row">
                <label for="subect-from" class="col-sm-2 col-sm-label">Subjects to teach</label>
                <div class="col-sm-10">
                    <input type="text" name="subjects" id="subject-form" placeholder="Enter subjects separated by comma"
                        class="form-control" required>
                </div>
            </div>
            <!--Specialization-->
            <div class="form-group row">
                <label for="specialization" class="col-sm-2 col-sm-label">Specialization</label>
                <div class="col-sm-10">
                    <input type="text" name="specialization" id="specialization" placeholder="Specialization subject"
                        class="form-control" required>
                </div>
            </div>
            <input type="checkbox" class="from-check-input" required>
            <label class="form-check-label">Agree to terms and conditions</label><br><br>
            <button type="submit" class="btn btn-success">Submit</button><br><br><br>

        </form>
    </div>
    <footer>
		<div class="container-fluid">
				<div class="col-md-4 text-left">
						<p>Copyright &copy; 2018 Educek.</a></p>
					</div>
					<div class="col-md-5"></div>
					<div class="col-md-3 row text-left" id="social">
							<ul class="social-network social-circle ">
								<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
								<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>				
						</div>
		</div>
	</footer>
    <!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
		<!--jquery-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>