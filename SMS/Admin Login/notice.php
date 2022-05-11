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
        <li><a class="active" href="notice.php">Add Notice</a></li>
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
     	 background-color: white;
      	color: black;
      	border-radius: 40px;
    }
	</style>
	

</head>
<body bgcolor="white">

	<br>

	<center>
	<img src="../images/admin1.jpg" width="100"><br><h2>Welcome to Kalsekar College of Engineering</h2>
     </center>


	 <h2 style="margin-left: 25px;">Welcome Admin</h2>


	<form method="post">
		
		<center>
			
			<table bgcolor="lightgrey" border="1" cellpadding="10">

				<tr>
					<td colspan="2" align="center"><h2>Add Notice</h2></td>
				</tr>

				<tr>
					<td>Academic Year</td>
					<td>
						<select name="ayear" required>
							<option value="" selected="" disabled="">--select academic year--</option>
							<option value="2020-2021">2020-2021</option>
							<option value="2021-2022">2021-2022</option>
							
						</select>
					</td>
				</tr>
				
				<tr>
					<td>Class</td>
					<td>
						<select name="class" required>
							<option value="" selected="" disabled="">--select class--</option>
							<option value="COMPUTER">Computer</option>
							<option value="MECHANICAL">Mechanical</option>
							<option value="CIVIL">Civil</option>
							<option value="IT">IT</option>
							<option value="ELECTRONICS">Electronics</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Semester</td>
					<td>
						<select name="sem" required>
							<option value="" selected="" disabled="">--select Semester--</option>
							<option value="SEM 1">SEM 1</option>
							<option value="SEM 2">SEM 2</option>
							<option value="SEM 3">SEM 3</option>
							<option value="SEM 4">SEM 4</option>
							<option value="SEM 5">SEM 5</option>
							<option value="SEM 6">SEM 6</option>
							<option value="SEM 7">SEM 7</option>
							<option value="SEM 8">SEM 8</option>
						</select>
					</td>
				</tr>




				<tr>
					<td>Date</td>
					<td><input type="date" name="edate" required></td>
				</tr>

				<tr>
					<td>Notice</td>
					<td><input type="notice" name="notice" required></td>
				</tr>



				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit_tt" value="Add New Notice"></td>
				</tr>

			</table>

		</center>

		<br><br><br>

	</form>
	
</body>
</html>

<?php

	include("../DB File/connection.php");
	error_reporting(0);

	if(isset($_POST['submit_tt']))
	{
		$ayear=$_POST['ayear'];
		$class=$_POST['class'];
		$sem=$_POST['sem'];	
		$edate=$_POST['edate'];
		$notice=$_POST['notice'];
		

		 $query = mysqli_query($con,"INSERT INTO notice_tt VALUES('','$ayear','$class','$sem','$edate','$notice')");
	    
	      if($query)
	      {
		 	echo "<center>Notice added successfully</center>";
	        header('refresh:1,url=notice.php');

	       }
	       else
	       {
	       	echo "<center>Failed to add Notice</center>";
	        header('refresh:1,url=notice.php');
	       }

	

	}

?>