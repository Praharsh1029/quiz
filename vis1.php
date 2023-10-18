<?php
// Assuming you have a MySQL database set up with a table named 'results' containing a column 'accuracy_percentage'
// Make sure to establish a connection to your database before executing this code

// Fetch accuracy percentages from the database
require "functions.php";
require_once "config.php";
check_login();

$res = $_SESSION['USER']->id;
$sel = "SELECT * FROM users WHERE id = $res";
$result = $link->query($sel);
$row = $result->fetch_assoc();
$selectedUser = $row['username'];

$sql = "SELECT * FROM stats WHERE userid = $res";
$result = $link->query($sql);
$row = $result->fetch_assoc();
$accuracyPercentage = $row['num_quizzes'];

// Prepare data for the pie chart
$dataPoints = array();
$dataPoints[] = array("y" => ($accuracyPercentage/25)*100, "label" => $selectedUser. "Attempted quizzes", "highlight" => true);
$dataPoints[] = array("y" => (25 - $accuracyPercentage)*100/25, "label" => "Remaining quizzes");

// Generate the pie chart using CanvasJS
?>
<!DOCTYPE HTML>
<html>
<head>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body>
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>

    <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Quizzes Attempted Percentage"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00'%'",
                    indexLabel: "{label} {y}",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            
            // Customizing the color of the selected user's slice
            var data = chart.options.data[0];
            for (var i = 0; i < data.dataPoints.length; i++) {
                if (data.dataPoints[i].highlight) {
                    data.dataPoints[i].color = "red"; // Set the color for the selected user's slice
                    break;
                }
            }
            
            chart.render();
        };
    </script>
</body>
</html>
