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

.column {
  float: left;
  width%:40%;
  margin-bottom: 16px;
  padding: 0 8px;
  background-color:white;
  opacity:0.85;
  margin-left:30%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
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
        <a href="index.php">Login</a><br/>
        <a href="http://guru.nmamit.in" target="_blank">Moodle</a><br/>
        <a href="http://www.nmamit.nitte.edu.in" target="_blank">College Homepage</a><br/>
		<a href="about.php">About Us</a><br/>
    </div>
	</div>

<div class="about-section">
<span style="font-size:30px;cursor:pointer" class="j1" onclick="openNav()">&#9776;</span>

  <h1>Campus Contacts</h1>
  <p><b>Admission: </b> info@nitte.edu.in</p>
  <p>+91-0824-2204310/342/304/</p>
  <p>+91 9480812310</p>
  <p>+91 9480812312</p>
  <p><b>Hostel / Security: </b> subiah@nitte.edu.in<p>
  <p>81470 71234</p>
  <p><b>Public Relations: </b> K.S Hegde Hospital</p>
  <p>+91 9740083240</p>
  <p><b>Exam: </b>coe@nitte.edu.in</p>
  <p>+91-0824-2203909</p>
</div>

<h2 style="text-align:center">KNOW US BETTER</h2>

 <!-- <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">More Info</button></p>
      </div>
    </div>
  </div>
  
 <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">More Info</button></p>
      </div>
    </div>
  </div>-->
  
  <div class="column">
    <div class="card">
      <img src="award.jpg" alt="John" style="width:50%">
      <div class="container">
        <h2>Recognitions And Awards</h2>
        <p>Category A Deemed-to-be University</p>
        <p>NITTE (Deemed to be University) is ranked 70th in NIRF 2019</p>
		<p>Placed in 56-60 Rank Band in QS India University Rankings 2020</p>
        <p>Diamond Rating by QS I-Gauge Indian Universities Rating</p>
        <p><button class="button" onclick="show()">More Info</button></p>
      </div>
    </div>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "40%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
function show()
{
	window.location.assign("more.php");
}
</script>



</body>
</html>
