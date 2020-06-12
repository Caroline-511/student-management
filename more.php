<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}


.about-section {
  padding: 50px;
  text-align: center;
  background-color:grey;
  color: white;
  opacity:0.9;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

body {
 background-image: url("nitte.jpg");
 background-attachment:fixed;
 background-repeat:no-repeat;
 background-size:100%;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

.j1{
	margin-left:-105%;
	margin-top:-40%;
}


</style>
</head>
<body>


    <div id="myNav" class="overlay">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<div class="overlay-content">
        <a href="alogin.php">Login</a><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/>
		<a href="about.php">About Us</a><br/>
		<a href=" ">View Profile</a><br/>
    </div>
	</div>


<div class="about-section">
<span style="font-size:30px;cursor:pointer" class="j1" onclick="openNav()">&#9776;</span>

  <h1>Accrediations And Ratings</h1>
  <p><b>A Grade Accreditation </b>by National Assessment and Accreditation Council, India</p>       
<p><b>NBA accreditation </b>
The BPharm program of Nitte Gulabi Shetty Institute of Pharmaceutical Sciences is accredited by National Board of Accreditation (NBA).</p>
<p><b>QS I-GAUGE </b>
Nitte (Deemed to be University) has been awarded a Diamond rating by QS I-GAUGE Indian College and University Ratings</p><br/><br/>
<h1>NIRF Rankings</h1>
<p><b>NITTE (Deemed to be University) is ranked 70th in NIRF 2019</b></p>
<p>Ranked 70th amongst 907 Universities in the nation in 2019</p>
<p>Improved rankings by 7 places from 77th position in 2018</p>
<p>Placed in Top 25 in Teaching, Learning and Resources and in Top 15 in Outreach and Inclusivity parameter</p>
<p>NITTE is ranked amongst the top 100 Universities in India for the third successive year</p><br/><br/>
<h1>Awards</h1>
<p>University of Minnesota, School of Public Health 2017 Global Partner Award</p>
<p>D.N. Kapoor Award by the International College of Dentists (USA)</p>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "40%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>


  </body>
</html>
