<?php 
session_start();
include('../config.php');
if($_SESSION['admin']=="")
{
$que=mysqli_query($con,"select * from admin where  user_name='".$_SESSION['admin']."'");
$res=mysqli_fetch_array($que);
$_SESSION=$res;
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

    <title>Time table Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
        .logout-button {
  background-color: #f44336;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}
body {
    background-color: #F5F5F5;
    font-family: Arial, sans-serif;
    
  }
  .background-image {
            background-image: url('\timetable\images\welcome.jpeg');
            background-size: cover; /* Adjust how the image covers the element */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center center; /* Position the image at the center */
            height: 100vh; /* Set the height of the element to full viewport height */
            /* You can also set other styles for the element */
        }
  
  .greeting {
    color: #FFF;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 24px;
    font-weight: bold;
  }
   
           
        

        </style>
   

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
              <p> <span class="greeting" >Hello Admin</span>
<span style="margin-left:1200px" class="glyphicon-glyphicon-off" aria-hidden="true">
<a href="logout.php"><input type="button" align="right" value="LOGOUT" class ="logout-button"></a></span>
</p>
            </div>
            
            <!-- Top Menu Items -->
           
                   
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="background-color:#000">
                    <li>
                        <a href="admindashboard.php?info=course"><i class="fa fa-fw fa-dashboard"></i>Department</a>
                    </li>
                    <li>
                        <a href="admindashboard.php?info=semester"><i class="fa fa-fw fa-bar-chart-o"></i>Semester</a>
                    </li>
                    <li>
                        <a href="admindashboard.php?info=subject"><i class="fa fa-fw fa-table"></i>Subject</a>
                    </li>
                    <li>
                        <a href="admindashboard.php?info=student"><i class="fa fa-fw fa-edit"></i>Student</a>
                    </li>
                    <li>
                        <a href="admindashboard.php?info=teacher"><i class="fa fa-fw fa-desktop"></i>Teacher</a>
                    </li>
                    
                    <li>
                        <a href="admindashboard.php?info=add_timetable"><i class="fa fa-fw fa-wrench"></i>Time Table</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <div class="col-lg-12" style="height:1000px; width:1100px;"  align="center" margin-top="20px">
                   
               
                
                <?php 
				@$info=$_REQUEST['info'];
				if($info!="")
				{
				if($info=="course")
				{
					include('course.php');
					}
				elseif($info=="semester")
				{
					include('semester.php');
					}
				elseif($info=="subject")
				{
					include('subject.php');
				     }
					 
			    elseif($info=="student")
				{
					include('student.php');
					}
				elseif($info=="teacher")
				{
					include('teacher.php');
					}
				elseif($info=="timetable")
				{
					include('timetable.php');
					}
					
				elseif($info=="add_course")
				{
					include('add_course.php');
					}
					
			    elseif($info=="add_subject")
				{
					include('add_subject.php');
					}
					
				elseif($info=="add_semester")
				{
					include('add_semester.php');
					}
					
				elseif($info=="add_teacher")
				{
					include('add_teacher.php');
					}
					
				elseif($info=="add_student")
				{
					include('add_student.php');
					}
					
					
				elseif($info=="add_timetable")
				{
					include('add_timetable.php');
					}

                elseif($info=="updatecourse")
				{
					include('updatecourse.php');
				     }
              
                elseif($info=="updatesemester")
				{
					include('updatesemester.php');
				     }

                elseif($info=="updatesubject")
				{
					include('updatesubject.php');
				     }					 
					
				elseif($info=="updatestudent")
				{
					include('updatestudent.php');
				     }

                elseif($info=="updateteacher")
				{
					include('updateteacher.php');
				     }

                elseif($info=="updatetimetable")
				{
					include('update_timetable.php');
				     }
					 
					}
				else
				{
				?>
                <body>
                
                  
                   <font color="#FF3333" size="+3" face="Lucida Console, Monaco, monospace"></font><br/>
                     <center>   <img src="\timetable\images\welcome.jpeg" class="background-image" alt="Cinque Terre" ></center> 
                <?php }?>
                
                
                
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
