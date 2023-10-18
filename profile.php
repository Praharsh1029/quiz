<?php

	require "functions.php";
  require_once "config.php";
	check_login();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="home.css">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
<script src='https://kit.fontawesome.com/a076d05399.js' ></script>

<script>
   
function NavBar() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("myTopnav").style.width = "100%";
document.getElementById("myTopnav").style.backgroundColor = "rgba(6, 18, 33, 1)";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "0%";
} else {
document.getElementById("myTopnav").style.width = "80%";
document.getElementById("myTopnav").style.backgroundColor = "rgba(6, 18, 33, 0.8)";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "2rem";
}
}



</script>
	<title>PROFILE</title>
</head>
<header id="header">
    <div class="topnav" id="myTopnav">
    <a href="home.php"><img class="logo" src="logo.png" alt=""></a>
    <a id="active">QUIZAPP</a>
    <a href="home.php">Home</a>
    <a href="https://forms.gle/9gWoYTs8UZxdCGWN7">Create Quiz</a>
    
    <a href="leader.php">Leaderboard</a>
    <a href="rewards.php">Rewards</a>
      <div class="dropdown">
    <button class="dropbtn"; style="cursor: pointer;"> Categories
        <i class="fa fa-caret-down" ></i>


    </button>
    <div class="dropdown-content animate">
    <a href="os.php">Operating Systems</a>
    <a href="ds.php">Data Structures</a>
    <a href="oop.php">Object Oriented Programming</a>
    <a href="wd.php">Web Development</a>
    </div>
    </div> 
      
        
    
      <div class="dropdown">
        <button  class="dropbtn">
            &emsp; &emsp; &emsp;   <i class='fas fa-user-circle'></i>
    <div class="dropdown-content animate"> <i class="fa fa-caret-down"></i>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
    </div> </div>
    <h4>Welcome <?=$_SESSION['USER']->username?></h4>
    </div>
   
    </header>
    
    
    <div class="content">
    
    
    <style>
        a:link {
  
  font-weight: bolder;
  background-color: transparent;
  text-decoration: none;

}
    </style>
<style>
body{
  background-color: #061221;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color: white;
  text-align: center;
}
	</style>
	<style>
* {box-sizing: border-box}
/* Style the tab */
.quiz {
  position: relative;
}
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f0fc02;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: auto;
  padding: 0px 150px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  
  display: none;
}

/* Clear floats after the tab */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
h3{
	color:black;
}

</style>

<body>

	
<div align="center">
		<div >
	
 
	<?php if(check_login(false)):?>
		<br><br><br><br><br>
		<h2>Welcome to your profile <?=$_SESSION['USER']->username?>!!<h2>

		<br><br>

		<div class="tab">
			<h3>View your marks here:</h3>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz1')">QUIZ1</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz2')">QUIZ2</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz3')">QUIZ3</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz4')">QUIZ4</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz5')">QUIZ5</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz6')">QUIZ6</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz7')">QUIZ7</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz8')">QUIZ8</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz9')">QUIZ9</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz10')">QUIZ10</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz11')">QUIZ11</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz12')">QUIZ12</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz13')">QUIZ13</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz14')">QUIZ14</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz15')">QUIZ15</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz16')">QUIZ16</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz17')">QUIZ17</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz18')">QUIZ18</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz19')">QUIZ19</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz20')">QUIZ20</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz21')">QUIZ21</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz22')">QUIZ22</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz23')">QUIZ23</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz24')">QUIZ24</button>
  <button class="tablinks" onmouseover="openmark(event, 'Quiz25')">QUIZ25</button>
</div>
<?php  
$userid = $_SESSION['USER']->id; // Replace with the appropriate user ID
$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$q="select * from stats where userid=$userid";
$r=$link->query($q);
$row = $r->fetch_assoc();
$acc = $row['accuracy'];
$num=$row['num_quizzes'];

?>

<div id="Quiz1" class="tabcontent">
 
<?php
    $marks = getQuizMarks($con, $userid, 'q1');
    echo "<p>$marks</p>";
  ?>
</div>

<style>
  .quiz:hover + .tabcontent {
  padding-top: 50px; /* Adjust the padding as needed */
}
  </style>
<div id="Quiz2" class="tabcontent">
<?php
    $marks = getQuizMarks($con, $userid, 'q2');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz3" class="tabcontent">
<?php
    $marks = getQuizMarks($con, $userid, 'q3');
    echo "<p>$marks</p>";
  ?>
</div>
<style>
  .quiz:hover + .tabcontent {
  padding-top: 50px; /* Adjust the padding as needed */
}
  </style>
<div id="Quiz4" class="tabcontent">
<?php
    $marks = getQuizMarks($con, $userid, 'q4');
    echo "<p>$marks</p>";
  ?>
</div>
<div id="Quiz5" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q5');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz6" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q6');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz7" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q7');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz8" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q8');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz9" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q9');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz10" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q10');
    echo "<p>$marks</p>";
  ?>
</div>
<div id="Quiz11" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q11');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz12" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q12');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz13" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q13');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz14" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q14');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz15" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q15');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz16" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q16');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz17" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q17');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz18" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q18');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz19" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q19');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz20" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q20');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz21" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q21');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz22" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q22');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz23" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q23');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz24" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q24');
    echo "<p>$marks</p>";
  ?>
</div>

<div id="Quiz25" class="tabcontent">
  <?php
    $marks = getQuizMarks($con, $userid, 'q25');
    echo "<p>$marks</p>";
  ?>
</div>



<div class="clearfix"></div>

<script>
function openmark(evt, marks) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(marks).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  <br><br><br>  
<marquee direction ="right"> STATS DISPLAYED RIGHT BELOW !</marquee>

		
	<?php endif;?>

		</div>
		</div>
<div>  <h3 style="color:white;">Accuracy: <?=$acc?>%</h3>  <iframe src="vis.php" width="500" height="400" style="border:1px solid black;">
</iframe></div>

<div>  <h3 style="color:white;">Total number of quizzes attempted: <?=$num?></h3>  <iframe src="vis1.php" width="500" height="400" style="border:1px solid black;">
</iframe></div>

<div>  <h3 style="color:white;">Perfomance of quizzes:</h3>  <iframe src="vis2.php" width="500" height="500" style="border:1px solid black;">
</iframe></div>




</body>
</html>