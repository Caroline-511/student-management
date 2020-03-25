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

<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">

<head>
<title> Welcome </title>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">

</head>
</style>

<body id="body-color"  style="background:url(img1.jpg); background-repeat:no-repeat;background-size:100%">



<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
        
            <th>subjects</th>  
            <th>class held</th>  
            <th>class attended</th>  
            <th>percentage</th>  
        </tr>  
        </thead>  

<?php


/*$id=$_GET['id'];
//echo $id;
  $query = "SELECT * FROM sample WHERE ID='$id'";*/
  
if(isset($_GET['usn'])){
      $usn = $_GET['usn']; 
 }else{
      $usn = "USN not set in GET Method";
 }
//$email=$_GET['email'];
echo $usn;
  $query = "SELECT * FROM att WHERE USN='$usn'";
  $result = mysqli_query ($conn,$query);
  
  //if ($result) {
    while ($row = mysqli_fetch_array ($result)) {
		
		?>
		
		<tr>
	
  <td><?php  echo $row[1];?></td>
   <td><?php   echo $row[2]; ?></td>
    <td><?php  echo $row[3]; ?></td>
     <td><?php echo $row[4]; ?></td>
  
  <?php
 }   
?>

</table>
</div>
</body>
</html>