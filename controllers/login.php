<?php
include '../core/config.php';

$user_post = $_GET["username"];
$pass_post = $_GET["password"];
$remember_me = $_GET["remember_me"];

$username_query = mysqli_query($link, "SELECT id FROM users WHERE username = '$user_post'");    
$username_result = mysqli_fetch_row($username_query);

if (count($username_result) > 0) {
	$query = "SELECT id,password FROM users WHERE username = '$user_post'" or die("Error in the consult.." . mysqli_error($link));
	$result = $link->query($query);

	while($row = mysqli_fetch_array($result)) {
		$id = $row["id"];
		$password_hash = $row["password"];
	}

	if (password_verify($pass_post, $password_hash)) { 
		if($remember_me) {
	    	$timeLogin = 365;   	
	    } else {
	    	$timeLogin = 1;
	    }
	    setcookie("netcomics_user", $id, time() + (86400 * $timeLogin), "/"); // 86400 = 1 day
	    $arr = array('status' => 200);
		echo json_encode($arr);
	    //header('Location: '.$site_url); 
	} else { 
		$arr = array('status' => 300, 'message' => $lang['error_invalid_password']);
		echo json_encode($arr);
	}
} else {
	$arr = array('status' => 400, 'message' => $lang['error_username_non_existent']);
	echo json_encode($arr);
}
?>