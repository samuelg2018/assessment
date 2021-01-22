<!DOCTYPE html>
<html lang="en"></html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>Assessment</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	
	<body>

<?php
define('DB_NAME', 'b7_27744155_job_assignment');
define('DB_USER', 'b7_27744155');
define('DB_PASSWORD', '3oU@3oK@O@0U');
define('DB_HOST', 'sql312.byethost7.com');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('Error connecting to host: ' . mysqli_connect_error());

$sql = "SELECT * FROM Student";
$result = mysqli_query($link, $sql) or die("Bad Query: $sql");

$loop_count = 1;

while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 mt-5 offset-sm-4">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?php echo "$loop_count" ?></td>
                        <td><?php echo "{$row['FirstName']}"; ?></td>
                        <td><?php echo "{$row['LastName']}"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    
    <?php
$loop_count += 1;
}
?>

</body>
</html>