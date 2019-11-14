<?php
session_start();

if($_SESSION['status']!= "Active"){
	header("location: flames.html");
}

$value1 = $_POST['name1'];
$value2 = $_POST['name2'];

$username = $_SESSION['email'];

print "<h1>" . "Hi! " . $username . "</h1>";

if(isset($value1) && isset($value2)) {
  if($value1 == $value2){
      echo "<h2>Both are same names. Please enter valid names</h2>";
    } 
    else {
        $flames = array(f,l,a,m,e,s);
        for($i = 0; $i < strlen($value1); $i++) {
            for($j = 0; $j < strlen($value2); $j++)
                if($value1[$i] == $value2[$j]){
                    $value1[$i] = $value2[$j] = '/';
                    break;
                }
        }
    $value1 = str_replace("/", "", $value1); 
    $value2 = str_replace("/", "", $value2); 
    $count = strlen($value1) + strlen($value2);
    $flame = "flames";

    while(strlen($flame)!= 1) {
        $diff = $count%strlen($flame);
        if($diff == 0){
        $diff=strlen($flame)-1;
        }    else {
        $diff--;
        }
        $flame[$diff] = "@"; 
        list($f1,$f2)= preg_split("/@/",$flame);
        $flame=$f2.$f1;
    }


    switch($flame){
        case f:
            echo "<h2>You are now Friends according to FLAMES</h2>";
            $answer = "Friends";
            break;
    case l:
            echo "<h2>You are now Lovers according to FLAMES</h2>";
            $answer = "lovers";
            break;
        case a:
            echo "<h2>You have Affection on each other according to FLAMES</h2>";
            $answer = "Affection";
            break;
      case m:
            echo "<h2>You are now Married according to FLAMES</h2>";
            $answer = "Married";
            break;
        case e:
            echo "<h2>You are now Enemies according to FLAMES</h2>";
            $answer = "Enemies";
            break;
      case s:
            echo "<h2>Your patner is your Sister according to FLAMES</h2>";
            $answer = "Sister";
            break;
    }

    $array_name1=$_SESSION['name1'];
    $array_name2=$_SESSION['name2'];
    $array_value=$_SESSION['answer'];

    array_push($array_name1, $_POST['name1']);
    array_push($array_name2, $_POST['name2']);
    array_push($array_value, $answer);

    $_SESSION['name1'] = $array_name1;
    $_SESSION['name2'] = $array_name2;
    $_SESSION['answer'] = $array_value;

        }
    }
?>

<html>
<head>
	<title>Flames</title>
	<link rel="stylesheet" type="text/css" href="flames.css">
</head>
<body>
	
	<p id="welcome"><strong>Welcome to the Flames game</strong></p>
	<div id="center1">
	<form action="" method="post">
			<label for = "yourname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Your Name:</strong></label>

			<input id = "yourname" type="text" name="name1" placeholder="Type your name" required>
			<br><br>
			<label for = "dreamname"><strong>Your patner's name:</strong></label>
			<input id = "dreamname" type="text" name="name2" placeholder="Type your patner's name" required>
			
			<p><button>Check you Relation</button></p>
	</form>
</div>
<form action="leaderboard.php" method="post" id="a1">
	<button>Check your previous entrees</button>
</form>
<div id="logout">
<form action="logout.php" method="post">
	<button>Log out</button>
</form>
</div>

    <p id="rules"> <a href="Rules.html">Learn more about Flames game</a></p>
    <p id="design"><strong>Project designed by the Akhil & Avinash</strong></p>
    <p id="project">HTML - CSS - PHP Project</p>

</body>
</html>