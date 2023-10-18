<?php
require "config.php";
require "functions.php";
$query = "SELECT * FROM stats ORDER BY totalscore DESC";
$result = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		#header {
			position: fixed;
			top: 0;
			width: 100%;
			background-color: rgba(6, 18, 33, 0.8);
			transition: all 0.3s ease;
		}

		#myTopnav {
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 1rem;
			transition: all 0.3s ease;
		}

		.topnav a {
			color: white;
			text-decoration: none;
			margin: 0 1rem;
			transition: color 0.3s ease;
		}

		.topnav a:hover {
			color: lightgray;
		}

		.content {
			margin-top: 6rem;
			padding: 2rem;
		}

		h1 {
			margin-bottom: 1rem;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			background-color: #ffffcc;
			border: 1px solid #ccc;
		}

		th, td {
			padding: 0.5rem;
			text-align: center;
			border-bottom: 1px solid #ccc;
			color: black;
		}

		th {
			background-color: #333;
			color: white;
		}

		tr:nth-child(even) {
			background-color: #fffacd;
		}

		tr:hover {
			background-color: #ffffe0;
		}
        .dropdown-content a {
  color: black;
}
	</style>
	<title>LEADERBOARD</title>
</head>
<body>
	<header id="header">
		<div class="topnav" id="myTopnav">
			<a href="home.php"><img class="logo" src="logo.png" alt=""></a>
			<a id="active">QUIZAPP</a>
			<a href="home.php">Home</a>
			<a href="#">Statistics</a>
			<a href="leader.php">Leaderboard</a>
			<a href="rewards.php">Rewards</a>
			<div class="dropdown">
				<button class="dropbtn" style="cursor: pointer;"> Categories
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content animate">
					<a href="os.php">Operating Systems</a>
					<a href="ds.php">Data Structures</a>
					<a href="oop.php">Object Oriented Programming</a>
					<a href="wd.php">Web Development</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="dropbtn">
					&emsp; &emsp; &emsp;   <i class='fas fa-user-circle'></i>
					<div class="dropdown-content animate">
						<i class="fa fa-caret-down"></i>
						<a href="profile.php">Profile</a>
						<a href="logout.php">Logout</a>
                        </div> </div>
    <h4>Welcome <?=$_SESSION['USER']->username?></h4>
    </div>
					
		</header>

		<div class="content">
			<?php 
			if ($result) {
				// Output the leaderboard
				echo '<h1>Leaderboard</h1>';
				echo '<table>';
				echo '<tr><th>Rank</th><th>User ID</th><th>Total Score</th></tr>';

				$rank = 1;
				while ($row = mysqli_fetch_assoc($result)) {
					$userid = $row['userid'];
					$score = $row['totalscore'];

					// Display user's rank, user ID, and score
					echo '<tr>';
					echo '<td>' . $rank . '</td>';
					echo '<td>' . $userid . '</td>';
					echo '<td>' . $score . '</td>';
					echo '</tr>';

					$rank++;
				}

				echo '</table>';
			} else {
				echo 'Failed to fetch leaderboard.';
			}

			// Close the database connection
			mysqli_close($link);
			?>
		</div>
	</body>
	</html>
