<?php

	require "functions.php";
	check_login();
?>




<!DOCTYPE HTML>
<head>
<title> HOMEPAGE</title>
<meta charset="UTF-8">
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
    
      
      
      
                    
   
    <div class="grid">
        <figure class="effect-marley">
            <img href="os.html"  src="OS.jpg" alt="img11" height="400"/>
            <figcaption>
                
                <h2 > <a href="os.php"    style="color: aliceblue;"><span >OPERATING SYSTEMS</span></a></h2>
                <p > <a href="os.php"    style="color: aliceblue;">An operating system (OS) is the program that, after being initially loaded into the computer by a boot program, manages all of the other application programs in a computer.</a><p>
                
            </figcaption>			
        </figure>
        <figure class="effect-marley">
            <img href="ds.php"  src="DS.jpg" alt="img12" height="400"/>
            <figcaption>
                <h2 > <a href="ds.php"    style="color: aliceblue;"><span >DATA STRUCTURES</span></a></h2>
                <p > <a href="ds.php"    style="color: aliceblue;">Data structure is a storage that is used to store and organize data. It is a way of arranging data on a computer so that it can be accessed and updated efficiently.</a><p>
                
                
            </figcaption>			
        </figure>
    </div>
    
    
    <div class="grid">
        <figure class="effect-marley">
            <img href="oop.php"  src="oops.png" alt="img11" height="400"/>
            <figcaption>
                
                <h2 > <a href="oop.php"    style="color: aliceblue;"><span >OBJECT ORIENTED PROGRAMMING</span></a></h2>
                <p > <a href="oop.php"    style="color: aliceblue;">Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic.</a><p>
                
            </figcaption>			
        </figure>
        <figure class="effect-marley">
            <img href="wd.php"  src="WD.jpg" alt="img12" height="400"/>
            <figcaption>
                <h2 > <a href="wd.php"    style="color: aliceblue;"><span >WEB DEVELOPMENT</span></a></h2>
                <p > <a href="wd.php"    style="color: aliceblue;">Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network).</a><p>
                
                
            </figcaption>			
        </figure>
    </div>
</div>