<?php

	require "functions.php";
	check_login();
  require_once "config.php";
  $res=$_SESSION['USER']->id;
  $sel="select * from stats where userid=$res";
$r=$link->query($sel);
$row = $r->fetch_assoc();
$ma = $row['totalscore'];


?>


<!DOCTYPE HTML>
<html>
<head>
<title> Rewards</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rewards.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
<style>
    *,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  font-family: 'Rubik', sans-serif;
  margin: 0;

  font-size: 1rem;
  padding-block: 2rem;
}

ul:where([role="list"]) {
  list-style: none;
  margin: 0;
  padding: 0;
}

img {
  max-width: 100%;
  display: block;
}

section {
  padding-block: clamp(2rem, 5vw, 3rem);
}

button,
input,
select,
textarea {
  font: inherit;
}

svg {
  height: 2.5ex;
  width: auto;
  flex: none;
  fill: currentColor;
}

.container {
  width: min(100% - 2rem, 63em);
  margin-inline: auto;
}

.section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 1rem;
  text-decoration: #fff;
}

.section-header * {
  margin: 0;
}

.section-title {
  font-size: clamp(1.5rem, 3vw, 2.5rem);
  text-align: center;
  margin: 0 auto; 
  color: #fff
}
.section-subtitle {
  font-size: clamp(1rem, 2vw, 1.5rem);
  text-align:left;
  margin: 0 auto; 
  color: #fff
  
}

.cards {
  display: grid;
  grid-template-columns: repeat(2, 1fr); 
   
  gap: 1.5rem;
  padding-block: 1.5rem;
}

.cards[data-layout="list"] {
  grid-template-columns: 1fr;
}

.card {
  width: min(100%, 20rem);
  margin-inline: auto;
  background-color: #fff;
  border-radius: 0.5em;
  overflow: hidden;
  box-shadow: 1.95px 1.95px 2.6px rgba(0, 0, 0, 0.2);
}

.card__content {
  display: grid;
  gap: 1rem;
  padding: 1rem;
}

.cards[data-layout="list"] .card {
  width: 100%;
  display: grid;
  grid-template-columns: 100px 1fr;
  align-items: stretch;
}

.cards[data-layout="list"] .card__content {
  display: grid;
  grid-template-columns: auto 1fr auto;
  align-items: center;
  justify-content: space-between;
}

@media (width < 40em) {
  .cards[data-layout="list"] .card {
    grid-template-columns: 1fr 3fr;
  }
  
  .cards[data-layout="list"] .card__content {
    grid-template-columns: 1fr;
  }
}

.card * {
  margin: 0;
}

.card__img-wrapper {
  width: 100%;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}

.card__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card__content h3 {
  text-transform: capitalize;
  text-decoration: #1b2435;
}


.button-group {
  display: flex;
  align-items: center;
  gap: 0.5em;
}

.button-group--collapse {
  gap: 0;
  border-radius: 0.25em;
  overflow: hidden;
  width: fit-content;
}

.button-group--collapse > .button {
  border-radius: 0;
}

.button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  
  padding: 0.5em 1.5em;
  border-radius: 0.25em;
  border: 0;
  
  text-decoration: none;
  background-color: #1b2435;
  color: #fff;
  transition: background-color 250ms ease;
}

.button:is(:hover, :focus-visible) {
  background-color: #8600bb;
  color: #fff;
}

.button:active {
  scale: 0.97;
}

.button--icon-only {
  padding: 0.5em;
  background-color: #fff;
  color: #1b2435;
}

.button.active {
  background-color: #8600bb;
  color: #fff;
}
</style>
</head>

<header id="header">
  <div class="topnav" id="myTopnav">
  <a href="#"><img class="logo" src="https://w7.pngwing.com/pngs/471/813/png-transparent-quiz-exam-icon-button-test-examination-logo-education-college-knowledge.png" alt=""></a>
  <a id="active">QUIZAPP</a>
  <a   href="home.php">Home</a>
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
          <i class='fas fa-user-circle'></i>
  <div class="dropdown-content animate"> <i class="fa fa-caret-down"></i>
    <a href="profile.php">Profile</a>
    
    <a href="logout.php">Signout</a>
  </div> </div>
  <h4 style="color:white;">Welcome <?=$_SESSION['USER']->username?></h4>

  </div>
  </header>
<body>
<section style="padding-top: 7rem;">
    <div class="container">
        <div class="section-header">
          <h1 class="section-title">Rewards</h1>
          

          
          <div class="button-group button-group--collapse">
            <button class="button button--icon-only" data-control="list">
              <svg viewBox="0 0 512 512" width="100" title="list">
                <path d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z" />
              </svg>
            </button>
            <button class="button button--icon-only active" data-control="grid">
              <svg viewBox="0 0 512 512" width="100" title="th-large">
                <path d="M296 32h192c13.255 0 24 10.745 24 24v160c0 13.255-10.745 24-24 24H296c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24zm-80 0H24C10.745 32 0 42.745 0 56v160c0 13.255 10.745 24 24 24h192c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24zM0 296v160c0 13.255 10.745 24 24 24h192c13.255 0 24-10.745 24-24V296c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm296 184h192c13.255 0 24-10.745 24-24V296c0-13.255-10.745-24-24-24H296c-13.255 0-24 10.745-24 24v160c0 13.255 10.745 24 24 24z"/>
              </svg>
            </button>
          </div>
        </div>
        <h2 class="section-subtitle">Reward points available: <?=$ma*100?>  </h2>
      <ul role="list" class="cards" id="cards" data-layout="grid">

        <li>
          <div class="card">
            <div class="card__img-wrapper">
              <img class="card__img" src="https://images.pexels.com/photos/3925875/pexels-photo-3925875.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
            </div>
            <div class="card__content">
              <h3>Instax</h3>
              <p>Cost: 2500</p>
              <a href="purchase.html" class="button" target="_blank">Purchase</a>

            </div>
          </div>
        </li>

        <li>
            <div class="card">
              <div class="card__img-wrapper">
                <img class="card__img" src="https://cdn.pixabay.com/photo/2017/09/09/13/12/chocolate-2732002_1280.jpg" alt="">
              </div>
              <div class="card__content">
                <h3>Ferrero Rocher Chocolate</h3>
                <p style="word-break: break-word;">Cost: 700 </p>

                <a href="purchase.html" class="button" target="_blank">Purchase</a>

              </div>
            </div>
          </li>
          <li>
            <div class="card">
              <div class="card__img-wrapper">
                <img class="card__img" src="https://images.unsplash.com/photo-1598662779094-110c2bad80b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGtleWJvYXJkfGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60" alt="">
              </div>
              <div class="card__content">
                <h3>Keyboard</h3>
                <p>Cost: 1700</p>
                <a href="purchase.html" class="button" target="_blank">Purchase</a>

              </div>
            </div>
          </li>
          
          <li>
            <div class="card">
              <div class="card__img-wrapper">
                <img class="card__img" src="https://images.pexels.com/photos/1162519/pexels-photo-1162519.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
              </div>
              <div class="card__content">
                <h3>Watch</h3>
                <p style="word-break: break-word;">Cost: 2000 </p>

                <a href="purchase.html" class="button" target="_blank">Purchase</a>

              </div>
            </div>
          </li>
          
          
          <li>
            <div class="card">
              <div class="card__img-wrapper">
                <img class="card__img" src="https://images.pexels.com/photos/1695052/pexels-photo-1695052.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
              </div>
              <div class="card__content">
                <h3>Coffee time</h3>
                <p>Cost: 500</p>
                <a href="purchase.html" class="button" target="_blank">Purchase</a>

              </div>
            </div>
          </li>
          <li>
            <div class="card">
              <div class="card__img-wrapper">
                <img class="card__img" src="https://images.unsplash.com/photo-1629429408209-1f912961dbd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="">
              </div>
              <div class="card__content">
                <h3>Mouse</h3>
                <p>Cost: 1500</p>
                <a href="purchase.html" class="button" target="_blank">Purchase</a>

              </div>
            </div>
          </li>
      </ul>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const layoutControllerBtns = document.querySelectorAll("[data-control]");
  const cardsElem = document.getElementById("cards");

  layoutControllerBtns.forEach(btn => {
    btn.addEventListener("click", (e) => {
      const layoutControl = e.currentTarget.dataset.control;
      cardsElem.setAttribute("data-layout", layoutControl);
      
      [...layoutControllerBtns].map(btn => btn.classList.remove("active"));
      btn.classList.add("active");
    });
  });
});
</script>
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
</body>
</html>
