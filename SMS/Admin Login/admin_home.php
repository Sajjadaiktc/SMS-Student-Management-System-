<?php
include("../DB File/connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<div id="menu">
	<ul>
		<li><a href="display_student_list.php">Display Student</a></li>
		<li><a href="delete.php">Delete</a></li>
		<li><a href="update.php">Update Student details</a></li>
        <li><a href="notice.php">Add Notice</a></li>
        <li><a href="admin_notice.php">Display Notice</a></li>
        		
		<li style="float: right; margin-right:  80px;"><a href="../logout.php"> Logout</a></li>

		
	</ul>
	</div>

	<style type="text/css">

		#menu{
			width: 100%;
			background-color: #b30000;
			
		}
		ul{
			list-style-type: none;
			overflow: hidden;
		}
		li a{
			float: left;
			font-size: 20px;
			padding: 20px;
			text-decoration: none;
			color: white;
		}
		#menu .active{
      	background-color: lightgrey;
      	color: black;
      	border-radius: 40px;
    	}
	</style>

</head>
<body bgcolor="white">
<br>
	
<br>
	 <center>
	 	<img src="../images/KTC.png" height="150px" >
	 </center>
	 <br>
	<center>
	<img src="../images/admin1.jpg" width="100"><br><h2>Welcome to Kalsekar College of Engineering</h2>
	 
		 
	 

	 <h2 style="margin-left: 25px;">Welcome Admin</h2>

    </center>
  
</body>
</html>