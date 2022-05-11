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
        <li><a href="admin_notice.php" class="active">Display Notice</a></li>
        		
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
     	 background-color: white;
      	color: black;
      	border-radius: 40px;
    	}
	</style>
    </head>
<body bgcolor="white">

	<br>

	<center>
	<img src="../images/admin1.jpg" width="100"><br><h2>Welcome to Kalsekar School of Engineering</h2>
     </center>


	 <h2 style="margin-left: 25px;">Welcome Admin</h2>


<br><br>

<form method="post">
		
		<center>
			</center>
		</form>

		<br><br>

	
</body>
</html>

<?php

	include("../DB File/connection.php");
	error_reporting(0);

	if(isset($_POST['display_submit']))
	{
		$ayear=$_POST['ayear'];
		$class=$_POST['class'];
		$sem=$_POST['sem'];

		$qry=mysqli_query($con,"select * from notice_tt where ayear='$ayear' and class='$class' and sem='$sem'");

		echo "<center><table bgcolor='lightgrey'' border='1' cellpadding='10'>";

		echo "<tr><th>Sr.no</th><th>Academic year</th><th>Class</th><th>Sem</th><th>Date</th><th>Notice</th></tr>";

		while($row=mysqli_fetch_array($qry))
		{
		
				echo "<tr>
			   		<td>".$row['notice_id']."</td>
			   		<td>".$row['ayear']."</td>
			   		<td>".$row['class']."</td>
			   		<td>".$row['sem']."</td>
			   		<td>".$row['date']."</td>
			      <td>".$row['notice']."</td></tr>";	

		}

		echo "</table></center><br><br>";

	
	}
	else
	{
		$qry=mysqli_query($con,"select * from notice_tt");

		echo "<center><table bgcolor='lightgrey' border='1' cellpadding='10'>";

		echo "<tr><th>Sr.no</th><th>Academic year</th><th>Class</th><th>Sem</th><th>Date</th><th>Notice</th></tr>";

		while($row=mysqli_fetch_array($qry))
		{
		
				echo "<tr>
			   		<td>".$row['notice_id']."</td>
			   		<td>".$row['ayear']."</td>
			   		<td>".$row['class']."</td>
			   		<td>".$row['sem']."</td>  		
			   		<td>".$row['date']."</td>
			        <td>".$row['notice']."</td></tr>";	

		}

		echo "</table></center><br><br>";
	}


?>