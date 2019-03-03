
<?php
//index.php

session_start();
if(!isset($_SESSION['username'])){
    header("location:../comp_login/indexlogin.php");
}


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Comment Section</title>
   <!-- Bootstrap CSS -->
	 <link rel="icon" href="favicon.ico">
	 <!-- Bootstrap core CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	 <link href="../Home/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/5.6.3/css/font-awesome.min.css">
	 
	 <!-- Custom styles for this template -->
	 <link href="../Home/css/owl.carousel.css" rel="stylesheet">
	 <link href="../Home/css/owl.theme.default.min.css"  rel="stylesheet">
	 <link href="../Home/css/style.css" rel="stylesheet">
	 
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
						<a class="nav-link navbar-left " id="navitem" style="margin-left:700px;" href="../Home/index.html">Home</a>
						</li>
			</div>

				<div class="collapse navbar-collapse text-left dropdown" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left dropdown-toggle " id="navitem" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false" href="#">Form</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="../teacher_form.php">Teacher Application Form</a>
									<a class="dropdown-item" href="../student_form.php">Student Application Form</a>
								</div>
						</li>
			</div>

				<div class="collapse navbar-collapse text-left" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left " id="navitem" href="../about.html">About US</a>
						</li>
			</div>
			
			<div class="collapse navbar-collapse text-left" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left " id="navitem" href="comment1/index.php">Support</a>
							</li>
			</div>
			<div class="collapse navbar-collapse text-left" >
					<li class="nav nav-item navbar-left">
							<a class="nav-link navbar-left " id="navitem" href="../comp_login/indexlogin.php"><button class="btn btn-success" style="margin-top: 0px;">
									Signup
								</button></a>
							</li>
				
			</div>
			</nav><br><br><br>
  <div class="container">
    <h2 align="center"><a href="#">Comment Section</a></h2>
    <br />
    <div class="container">
    <form method="POST" id="comment_form">
        <div class="form-group">
        <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
        </div>
        <div class="form-group">
        <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
        </div>
        <div class="form-group">
        <input type="hidden" name="comment_id" id="comment_id" value="0" />
        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
        </div>
    </form>
    <span id="comment_message"></span>
    <br />
    <div id="display_comment"></div>
    </div>
  </div>
  <footer class="fixed-bottom">
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
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>


