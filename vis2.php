<?php
// Assuming you have a MySQL database set up with a table named 'quiz_marks' containing columns 'userid', 'q1', 'q2', 'q3', ..., 'q25'
// Make sure to establish a connection to your database before executing this code

// Fetch quiz marks from the database
require "functions.php";
require_once "config.php";
check_login();

$res = $_SESSION['USER']->id;
$query = "SELECT q1, q2, q3, q4, q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,q21,q22,q23,q24,q25 FROM stats WHERE userid = $res";
$result = $link->query($query);

// Prepare data for the scatter plot
$dataPoints = array();
if ($row = mysqli_fetch_assoc($result)) {
    for ($i = 1; $i <= 25; $i++) {
        $quizNumber = 'q' . $i;
        $marks = isset($row[$quizNumber]) ? $row[$quizNumber] : 0;
        $dataPoints[] = array("x" => $i, "y" => $marks);
    }
}

// Generate the scatter plot using Chart.js
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Quiz Marks Scatter Plot</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="scatterChart" width="400" height="400"></canvas>

    <script>
        var ctx = document.getElementById('scatterChart').getContext('2d');
        var scatterChart = new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
            label: 'Quiz Marks',
            data: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>,
            backgroundColor: 'rgba(0, 123, 255, 0.7)',
            borderColor: 'rgba(0, 123, 255, 1)',
            pointRadius: 5,
            pointHoverRadius: 7,
            showLine: true,
            lineTension: 0
        }]
    },
    options: {
        scales: {
            x: {
                type: 'linear',
                position: 'bottom',
                title: {
                    display: true,
                    text: 'Quiz Number'
                },
                ticks: {
                    stepSize: 1,
                    min: 1,
                    max: 5
                }
            },
            y: {
                type: 'linear',
                position: 'left',
                title: {
                    display: true,
                    text: 'Marks'
                },
                ticks: {
                    stepSize: 1,
                    min: 0,
                    max: 6
                }
            }
        }
    }
});

    </script>
</body>
</html>
