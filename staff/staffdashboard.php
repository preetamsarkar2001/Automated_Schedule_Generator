<?php 
session_start();
include('../config.php');

if($_SESSION['teacher_id']=="" && $_SESSION['name']=="")
{
	header('location:index.php');
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

    <title>Time table Staff Dashboard</title>

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
.background-image {
            background-image: url('\\timetable\images\teacherquote.png');
            background-size: cover; /* Adjust how the image covers the element */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            background-position: center center; /* Position the image at the center */
            height: 100vh; /* Set the height of the element to full viewport height */
            /* You can also set other styles for the element */
        }
body {
    background-color: #F5F5F5;
    font-family: Arial, sans-serif;
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
                
              <p> <span class="greeting" >Hello <?php echo $_SESSION['name'];?>
              </span>
<span style="margin-left:1500px" class="glyphicon-glyphicon-off" aria-hidden="true">
<a href="logout.php"><input type="button" align="right" value="LOGOUT" class ="logout-button"></a></span>
</p>
            </div>
            
            <!-- Top Menu Items -->
           
                   
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="background-image:url(../admin/img/Stitched%20Leather%20Texture%20Desktop%20Wallpaper.jpg)">
                    <li>
                        <a href="staffdashboard.php?info=timeschedule"><i class="fa fa-fw fa-dashboard"></i>Time Schedule</a>
                    </li>
                    <li>
                        <a href="staffdashboard.php?info=updateprofile"><i class="fa fa-fw fa-bar-chart-o"></i>Update Profile</a>
                    </li>
                    <li>
                        <a href="staffdashboard.php?info=updatepassword"><i class="fa fa-fw fa-table"></i>Change Password</a>
                    </li>
                    <li>
                        <a href="staffdashboard.php?info=teachercorner.html"><i class="fa fa-fw fa-table"></i>Upload Notes</a>
                    </li>
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <div class="col-lg-12" style="background-image:url(\timetable\img\Pink Blue Gradient Scratched Texture Free Wallpaper HD.jpg);" height="1000px;" align="center" margin-top="20px">
                   
               
                
                <?php 
				@$info=$_REQUEST['info'];
				if($info!="")
				{
				if($info=="updatepassword")
				{
					include('updatepassword.php');
					}
				elseif($info=="updateprofile")
				{
					include('updateprofile.php');
					}
					
				elseif($info=="timeschedule")
				{
					include('timeschedule.php');
				}
                elseif($info=="teachercorner.html")
				{
					include('teachercorner.html');
				}
				
					}
				else
				{
				?>
                  
                  
                        <img src="\timetable\images\teacherquote.png" class="background-image" alt="Cinque Terre" >
                        <!-- <img src="image/aaa.jpeg" class="img-responsive" alt="Cinque Terre" width="500" height="100" style=" margin-left: 23px;"> -->
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
