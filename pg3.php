<?php

$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"student");
if($db)
{
	//echo "connected succesfully";
}
else{
	echo "not connected";
}

?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-top:8%;
  margin-left:8%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 10px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(65, 121, 158);
  color: white;
}

.navbar {
  overflow: hidden;
  background-color: rgb(81, 88, 88);
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: cornflowerblue  ;
}

</style>
</head>
<body id="body-color" style="background:url(img1.jpg); background-repeat:no-repeat;background-size:100%">

  <div class="navbar">
    <a href="pg1.php">Logout</a> 
    <!--<a href="icon.php">Back</a>-->
    </div>
<h1>ATTENDANCE RECORD</h1>

<table id="customers">
<thead>
  <tr>
    <th>SUBJECTS</th>
    <th>CLASSES HELD</th>
    <th>CLASSES ATTENDED</th>
    <th>PERCENTAGE</th>
	</thead>
  </tr>
  <!--<tr>
    <td>Software Testing</td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr>
    <td>Computer Networks</td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr>
    <td>Compiler Design</td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr>
    <td>Business Intelligence</td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  
  <tr>
    <td>Elective-I</td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>

  <tr>
    <td>Elective-II</td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>-->
    



<?php
//echo $id;
  //$query = "SELECT * FROM sample WHERE ID='$id'";
  
if(isset($_GET['usn'])){
      $usn = $_GET['usn']; 
 }else{
      $usn = "USN not set in GET Method";
 }
//$email=$_GET['email'];
//echo $usn;
  $query = "SELECT * FROM att WHERE USN='$usn'";
  $result = mysqli_query ($conn,$query);
  
  //if ($result) {
    while ($row = mysqli_fetch_array ($result)) {	
		?>
		
		<tr>
	   <td><?php   echo $row[2]; ?></td>
   <td><?php   echo $row[3]; ?></td>
    <td><?php  echo $row[4]; ?></td>
     <td><?php echo $row[5]; ?></td>
	 </tr>
  
  <?php
 }   
?>
</table>
</body>
</html>