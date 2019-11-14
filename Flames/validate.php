<?php


if(isset($_POST['submit'])){
	$user = $_POST['email'];
    $pass = $_POST['password'];


	if ($user == "admin" && $pass == "password") {
		# code...


		setcookie('email',$user,time()+60*60*7);
		session_start();
		$_SESSION['status'] = "Active";
		$_SESSION['email'] = $user;
		$array_name1 = array();
        $array_name2 = array();
       $array_answer = array();

       $_SESSION['name1'] = $array_name1;
       $_SESSION['name2'] = $array_name2;
       $_SESSION['answer'] = $array_answer;

		header("location: flames.php");



	}else{
		header("location: flames.html");
	}


}else{
	header("location: flames.html");
}


?>