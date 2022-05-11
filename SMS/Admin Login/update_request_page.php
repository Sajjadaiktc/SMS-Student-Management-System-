<?php
include("../DB File/connection.php");
error_reporting(0);
 $_GET['rn'];
 $_GET['n'];
 $_GET['cl'];
 $_GET['sem'];
 $_GET['pcn'];
 $_GET['email'];
 

?>



<!DOCTYPE html>
<html>
<head>
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

  <br><br>
      <div id="menu">
  <ul>
    <li><a href="display_student_list.php">Display Student</a></li>
    <li><a href="delete.php">Delete</a></li>
    <li><a class="active"  href="update.php">Update Student details</a></li>
      
    <li><a href="../logout.php"> Logout</a></li>

    
  </ul>

</div>

  <center>
  <img src="../images/admin1.jpg"><br><h2>Welcome to Kalserkar school of Engineering</h2>
     </center>




<body bgcolor="blue">
<form action="" method="GET">

  <table bgcolor="lightgrey" align="center" border="1" cellpadding="10">
    <tr>
      <th>Roll No</th>
      <td><input type="text" name="rollno" placeholder="Enter Rollno" value="<?php echo $_GET['rn']; ?>"/></td>
    </tr>
    
      

    <tr>
      <th>Full Name</th>
      <td><input type="text" name="name" placeholder="Enter Full Name" value="<?php echo $_GET['n']; ?>"/></td>
    </tr>

    <tr>
      <th>Class</th>
      <td><input type="text" name="class" placeholder="Enter class" value="<?php echo $_GET['cl']; ?>"/></td>
    </tr>

    <tr>
      <th>Sem</th>
      <td><input type="text" name="sem" placeholder="Enter Semester" value="<?php echo $_GET['sem']; ?>"/></td>
    </tr>
    
    <tr>
      <th>Parents Contact No</th>
      <td><input type="text" name="pcont" placeholder="Enter the contact no of parents" value="<?php echo $_GET['pcn']; ?>"/></td>
    </tr>
    
    <tr>
      <th>Email</th>
      <td><input type="text" name="email" placeholder="Enter the Email" value="<?php echo $_GET['email']; ?>"/></td>
    </tr>
    
      
    
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" value="Update"></td>
    </tr>


  </table>
</form>
<center>
<?php

if($_GET['submit'])
  {
        $rn = $_GET['rollno'];
         $n  = $_GET['name'];
         $cl = $_GET['class'];
         $sem = $_GET['sem'];
         $pcn = $_GET['pcont'];
         $email = $_GET['email'];
    

        $query ="UPDATE STUDENT SET NAME='$n', CLASS='$cl', Sem='$sem', pcont ='$pcn',email='$email' WHERE ROLLNO='$rn' ";
        
        $data = mysqli_query($con,$query);
         
         if($data)

         {
     
          echo "<center><h1> Record updated successfully<br>Please wait<br>Redirecting <-----</h1></center>";
          header('refresh:3,url=update.php');

         }
         else
         {

            echo "<font color='red'> Record not updated.";
            header('refresh:3,url=update.php');


         } 
    }
         
         

    ?></center>
      </body></body>
</html>





