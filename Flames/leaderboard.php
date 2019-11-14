<?php
session_start();

$final_name1 = $_SESSION['name1'];
$final_name2 = $_SESSION['name2'];
$final_answer = $_SESSION['answer'];

echo "<div>";
echo "<table>";

echo "<tr>";
echo "<th>Your Name</th>";
foreach ($final_name1 as $key => $value) {

echo "<td>$value</td>";

}
echo "</tr>";

echo "<tr>";
echo "<th>Patner Name</th>";
foreach ($final_name2 as $key => $value) {

echo "<td>$value</td>";

}
echo "</tr>";

echo "<tr>";
echo "<th>Flames Result</th>";
foreach ($final_answer as $key => $value) {

echo "<td>$value</td>";

}

echo "</tr>";
echo "</table>";
echo "</div>";
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="leaderboard.css">
</head>
<body>
<a href="flames.php">Go to flames page</a>
<h1>Your Previous Entrees</h1>
</body>
</html>