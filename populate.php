<?php

foreach ($_POST as $key => $value) {
		    	echo 'key: '.$key.' value: '.$value.'<br />';
			}

			if(isset($_POST['g-recaptcha-response'])) {
				$captcha = $_POST['g-recaptcha-response'];
			}

			if(!$captcha || empty($captcha)) {
				echo 'recaptcha verification failed';
				exit;
			}

			$secretKey = '6LeA5jYaAAAAAGvmLVfH84aS9zWPQFPoBjyfWMCk';
			$ip = $_SERVER['REMOTE_ADDR'];

			$url = 'https://www.google.com/recaptcha/api/siteverify?secret='.urlencode($secretKey).'&response='.urlencode($captcha);
			$response = file_get_contents($url);
			$responseKeys = json_decode($response, true);

			if($responseKeys["success"]) {
				echo 'captcha verification succesful';
			} else {
				echo 'Hello, robot!';
			}

define('DB_NAME', 'b7_27744155_job_assignment');
define('DB_USER', 'b7_27744155');
define('DB_PASSWORD', '3oU@3oK@O@0U');
define('DB_HOST', 'sql312.byethost7.com');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to host: ' . mysqli_connect_error());

$name = $_POST['FirstName'];
$lastName = $_POST['LastName'];

$sql = "INSERT INTO Student(FirstName, LastName) VALUES('$name', '$lastName')";
$result = mysqli_query($link, $sql) or die("Bad Query: $sql");

header("Location: index.php?formsubmit=1"); 
exit();

?>