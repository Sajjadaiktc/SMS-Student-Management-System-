<?php
include("../DB File/connection.php");
error_reporting(0);
$query = "SELECT *FROM STUDENT";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);


if($total !=0)
{
	?>
  <div id="menu">
	<ul>
		<li><a class="active" href="display_student_list.php">Display Student</a></li>
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
      background-color: #b30000 ;
		}
		ul{
			list-style-type: none;
      overflow: hidden;
      opacity: 20px;
		}
		li a{
			float: left;
			font-size: 20px;
			padding: 20px;
			text-decoration: none;
      color: white;
      padding: 20px 20px;
    }
    #menu .active{
      background-color: white;
      color: black;
      border-radius: 40px;
    }

	</style>

  


  <body bgcolor="white">

  <br>

  <center>
  <img src="../images/admin1.jpg" width="100"><br><h2>Welcome to Kalsekar school of Engineering</h2>
     </center>


   <h2 style="margin-left: 25px;">Welcome Admin</h2>


<center>
   <table bgcolor="lightgrey" border="1"  align="center" cellpadding="10">
    
   	<tr>
   		<th>Roll NO</th>
   		<th>IMAGE</th>
   		<th>NAME</th>
   		<th>CLASS</th>
      <th>SEM</th>
   		<th>PCONT</th>
      <th>EMAIL</th>
   		
   	</tr>
    

      
	<?php
	while($result = mysqli_fetch_assoc($data))



	{


        echo "<tr>
   		<td>".$result['rollno']."</td>
   		<td><a href='../$result[picsource]'><img src='../".$result['picsource']."' height='100' width='100' /></a></td>
   		<td>".$result['name']."</td>
   		<td>".$result['class']."</td>
      <td>".$result['sem']."</td>
   		<td>".$result['pcont']."</td>
      <td>".$result['email']."</td>
   		
      
        	
        </tr>";
   

		 
	}

}
 

?>

</table>

    <br><br></center>

</body>