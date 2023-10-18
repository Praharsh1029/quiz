<?php

	require "functions.php";
	check_login();
?>


<!DOCTYPE HTML>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
<title> HOMEPAGE</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="topic.css">
<script src='https://kit.fontawesome.com/a076d05399.js' ></script>


<style>
      .button {
        background-color: white;
        color: #183c63;
        border: none;
        padding: 0.5em 1em;
        border-radius: 0.3em;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
    
      .button:hover {
        color: #cd2027;
      }
    </style>

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

</head>

<header id="header">
    <div class="topnav" id="myTopnav">
    <a href="home.php"><img class="logo" src="https://w7.pngwing.com/pngs/471/813/png-transparent-quiz-exam-icon-button-test-examination-logo-education-college-knowledge.png" alt=""></a>
    <a id="active">QUIZAPP</a>
    <a &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  href="home.php">Home</a>
      <a href="https://forms.gle/9gWoYTs8UZxdCGWN7">Create Quiz</a>
    
    <a href="leader.php">Leaderboard</a>
    <a href="rewards.php">Rewards</a>
      <div class="dropdown">
        <button class="dropbtn"> Categories
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
           &emsp;  &emsp; &emsp;  <i class='fas fa-user-circle'></i>
    <div class="dropdown-content animate"> <i class="fa fa-caret-down"></i>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Signout</a>
    </div> </div>
    <h4>Welcome <?=$_SESSION['USER']->username?></h4>

    </div>
    </header>
    
    
   

<h1 style="font-size: 28; text-align: center; padding: 0em; padding-top: 3em;">OPERATING SYSTEMS </h1>



<div class="quiz-app-filter">
  
      
 
    
 
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


<select id="first-dropdown" name="first-dropdown" class="filter-quiz">
<option value=ALL <?php if(isset($_POST['first-dropdown']) && $_POST['first-dropdown'] === 'ALL') echo 'selected'; ?>>ALL</option>
  <option value=PAGING <?php if(isset($_POST['first-dropdown']) && $_POST['first-dropdown'] === 'PAGING') echo 'selected'; ?>>Paging</option>
  <option value=SCHEDULING <?php if(isset($_POST['first-dropdown']) && $_POST['first-dropdown'] === 'SCHEDULING') echo 'selected'; ?>>Scheduling</option>
  <option value=Deadlocks <?php if(isset($_POST['first-dropdown']) && $_POST['first-dropdown'] === 'Deadlocks') echo 'selected'; ?>>Deadlocks</option>
</select>

<input type="submit"  value="Apply" class="filter-btn">
</form>
  
 <div id="ALL">

 <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="pquiz1.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          PAGING QUIZ-1
        </div>
      </a>
    </div>



    <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="pquiz2.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          PAGING QUIZ-2
        </div>
      </a>
    </div>


    <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="squiz1.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          SCHEDULING QUIZ-1
        </div>
      </a>
    </div>

    <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="squiz2.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          SCHEDULING QUIZ-2
        </div>
      </a>
    </div>


    <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="d1.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          DEADLOCKS QUIZ-1
        </div>
      </a>
    </div>


    <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="d2.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          DEADLOCKS QUIZ-2
        </div>
      </a>
    </div>



  


 </div>

 
 
 <div id="d1" style="display:none">
 <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="pquiz1.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          PAGING QUIZ-1
        </div>
      </a>
    </div>
  </div>

<div id="d4" style="display:none">
<div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="pquiz2.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          PAGING QUIZ-2
        </div>
      </a>
    </div>
  </div>

  <div id="d2" style="display:none">
  <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="squiz1.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          SCHEDULING QUIZ-1
        </div>
      </a>
    </div>
  </div>

  <div id="d5" style="display:none">
  <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="squiz2.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          SCHEDULING QUIZ-2
        </div>
      </a>
    </div>
  </div>

  <div id="d6" style="display:none">
  <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="d1.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          DEADLOCKS QUIZ-1
        </div>
      </a>
    </div>
  </div>

  <div id="d7" style="display:none">

    <div style="display: flex; justify-content: center; align-items: center; height: 12vh;">
      <a href="d2.php">
        <div class="filter button" style="height: 3em; width: 30em; text-align: center; display: flex; align-items: center; justify-content: center;font-weight:600">
          DEADLOCKS QUIZ-2
        </div>
      </a>
    </div>
  </div>



<?php
require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // check if the form was submitted with POST method
  if (isset($_POST['first-dropdown'])) { // check if the dropdown parameter was sent
    $selected_option = $_POST['first-dropdown']; // get the selected option
	
  }


  $sql = "SELECT QUIZ_ID FROM quizzes WHERE TOPIC_NAME='$selected_option'; ";
  $result = $link->query($sql);

  while ($row = $result->fetch_assoc()) {
	 
    $var=$row['QUIZ_ID'];

	$var1="d$var";

$someVar = "myDIV";

?>
<script>
	document.getElementById("ALL").style.display = "none";
    
	document.getElementById("<?php echo $var1; ?>").style.display = "block";
  
  </script>
  <?php

		
}



}

?>


