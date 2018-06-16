﻿<?php
  session_start();
$cookie_name = "user";
$cookie_value = "Najeeb Hassan";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

  if ( isset($_SESSION['id']) )      // Check if the session variable named username exists.  It only exists if the user has already correctly logged in.
  {
     echo "Welcome ".$_SESSION['id']."<br />";
     echo "You are now viewing the members' page<br /><br />";
     echo "<a href='index.html'>Logout</a><br /><br /";
	 
  }
  else
  {
	  echo "You must be logged in.<br />";
     echo "<a href='loginpage.html'>Login</a>";
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>University of Bolton</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">University of Bolton</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>University of Bolton</h1>
                        <hr class="small">
                        <span class="subheading">Student Exam Board Appeal System</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <h2> Appeal </h2>
<form action="form.php" method="post">
<p>
<label>First Name :</label>
<input type="name" name="first_name" />
</p>


<p>
<label>Last Name :</label>
<input type="name" name="last_name" />
</p>


<p>
<label>E-mail :</label>
<input type="Email" name="Email" />
</p>


<p>
<label>Student ID :</label>
<input type="studentID" name="studentID" />
</p>


<p>
<label>Appeal (Comments) :</label>
<textarea  name="comment" maxlength="10000" cols="25" rows="6"></textarea>

</p>
 


<input type="submit" value="Appeal" name="submit"/>
</form>
                <hr>

    <!-- Footer -->
    <footer>
        
                    <p class="copyright text-muted">Najeeb Hassan </p>
                
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
