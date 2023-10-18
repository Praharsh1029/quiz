<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	
	<link rel="stylesheet" href="style.css">
	<style>
h1 {
  font-size: 85px;
  background: -webkit-linear-gradient(rgba(234, 126, 2, 0.632), rgba(242, 234, 9, 0.937));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}


h3 {
  font-size: 25px;
}
.bouncing-text {
  position: relative;
  display: flex;
  font-size: 70px;
  font-family: arial black;  
}
@keyframes bounce {
        0%   { transform: scale(1,1) translateY(0); }
        10%  { transform: scale(1.1,.9) translateY(0); }
        30%  { transform: scale(.9,1.1)   translateY(-55px);}
        50%  { transform: scale(1.05,.95) translateY(0); }
        58%  { transform: scale(1,1) translateY(-7px); }
        65%  { transform: scale(1,1) translateY(0);}
        100% { transform: scale(1,1) translateY(0);}
    }

.b {
  animation: bounce 1s ease infinite .6s;
}

.o {
  animation: bounce 1s ease infinite.7s;
}

.u {
  animation: bounce 1s ease infinite.5s;
}

.n {
  animation: bounce 1s ease infinite .6s;
}

.c {
  animation: bounce 1s ease infinite .7s;
}

.e {
  animation: bounce 1s ease infinite .4s;
}
.f {
  animation: bounce 1s ease infinite .5s;
}
p {
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 3em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #b8860b, #fff, #ff8c00);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 7s linear ;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}   
</style>

</head>
<body>
	<br>
	<div class="bouncing-text">
		
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <h1 class="b">Q</h1>
  <h1 class="o">U</h1 >
  <h1 class="u">I</h1 >
  <h1 class="n">Z</h1 >
  <h1 class="c">A</h1 >
  <h1 class="e">P</h1 >
  <h1 class="f">P</h1 >
  <h1 class="shadow"></h1 >
  <h1 class="shadow-two"></h1 >
</div>


<p>&nbsp;&nbsp;
Engage, Learn , Dominate! </p>


	
<div align="center" class="form-box">
		<div class="header-text">
	<h2 color="white">Signup</h2>

	<?php include('header.php')?>

	<div>
		<div>
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= $error?> <br>	
				<?php endforeach;?>
			<?php endif;?>
		</div>
		<form method="post">
		    <input type="text" name="name" placeholder="Name"><br>
			<input type="text" name="age" placeholder="Age"><br>
			<input type="text" name="username" placeholder="Username"><br>
			<input type="text" name="email" placeholder="Email"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="password" name="password2" placeholder="Retype Password"><br>
			<br>
			<input  type="submit" value="Signup">
	   
		</form>
				
	</div>
</body>
</html>