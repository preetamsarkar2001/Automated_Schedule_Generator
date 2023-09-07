<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Time Table Generator</title>
    
    <style>
	a{margin-left:15px;text-decoration:none; font-size:20px}
	a:hover{background:#FF0000;color:#FFFFFF;}
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > 
	img { margin:auto;}
    
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f8f8;
            color: #333;
        }

        .about {
            padding: 50px 0;
        }

        .section-heading {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        .primary {
            border-top: 2px solid #007BFF;
            width: 100px;
            margin: 0 auto;
            margin-bottom: 30px;
        }

        .text-justify {
            text-align: justify;
        }

        .mb90 {
            margin-bottom: 90px;
        }
        body {
    margin: 0;
    padding: 0;
}

.black-footer {
    background-color: #000;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
}

.black-footer p {
    margin: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

}

    
</style>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- [endif]-->

</head>
    <body>
    
      <!-- /.navbar -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><font color="#FF0000">Automated Schedule Generator</font></a>
    </div>
    <ul class="nav navbar-nav">
    
      <li class="active"><a href="#">Home</a></li>
      
      <li><a class="page-scroll" href="\timetable\admin\css\about.html">About</a></li> 
      <li><a class="page-scroll" href="\timetable\admin\css\contact.php">Contact Us</a></li>
      
      <!-- <li><a class="page-scroll" href="#registration">Registration</a></li> -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="../timetable/staff/index.php">Staff Login</a></li>
          <li><a href="../timetable/student/index.php">Student Login</a></li>
          <li><a href="../timetable/admin/index.php">Admin Login </a></li> 
        </ul>
      </li> 
    </ul>
  </div>
</nav>

   <!-- /.navbar-end -->
   
        <!-- /.slider -->

<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Automated Schedule Generator</h1>
                <hr>
               
                <a href="\timetable\admin\css\about.html" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

<!--container-->


  <!-- <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading">About Automated Schedule Generator</h2>
                        <hr class="primary">
                    </div>
                    
                  
                    
                    <div class="row mb90">
                        <div class="col-md-12 text-justify">
                        
                                <p>Most colleges have a number of different courses and each course has a number of subjects. Now there are limited faculties, each faculty teaching more than one subjects. So now the time table needed to schedule the faculty at provided time slots in such a way that their timings do not overlap and the time table schedule makes best use of all faculty subject demands. We use a genetic algorithm for this purpose. In our Timetable Generation algorithm we propose to utilize a timetable object. This object comprises of Classroom objects and the timetable for every them likewise a fitness score for the timetable. Fitness score relates to the quantity of crashes the timetable has regarding alternate calendars for different classes.
Classroom object comprises of week objects. Week objects comprise of Days. also Days comprises of Timeslots. Timeslot has an address in which a subject, student gathering going to the address and educator showing the subject is related
Also further on discussing the imperatives, We have utilized composite configuration design, which make it well extendable to include or uproot as numerous obligations.
In every obligation class the condition as determined in our inquiry is now checked between two timetable objects. On the off chance that condition is fulfilled i.e there is a crash is available then the score is augmented by one.</p>
                        </div>

                    </div> -->
                    <footer class="black-footer">
        <div class="container">
            <p>&copy; 2023 Automated Schedule Generator System</p>
        </div>
    </footer>
    
    <!--slider-->
    
      <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    
    <script src="js/owl.carousel.js"></script>
                         

    </body>
</html>