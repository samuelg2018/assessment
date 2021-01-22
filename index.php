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
		<div class="container-fluid">
			
			<header>
				<h1>Assessment</h1>
			</header>
			
			
			<div class="row ml-4 mr-md-4">
				<div class="col-lg-4 col-md-12 offset-lg-4 jumbotron">

                    <?php 
                        if(isset($_GET['formsubmit'])) { ?>
                            <div class="text-center">
                            <h2>Query submitted</h2>
                            <p>Click the button below to see the contents of the table Students.</p>
                            <form action="retrieve.php" method="$GET">
                                <input type="submit" value="See Table Contents" class="btn btn-success btn-lg" role="button">
                            </form>
                            </div>
                    <?php }else{
                    ?>
					<form action="populate.php" method="POST" class="recaptchaForm">
						<input class="form-control form-control-lg" type="text" placeholder="Name" name="FirstName"> <br>
						<input class="form-control form-control-lg" type="text" placeholder="Last Name" name="LastName"> <br>
                        
                        <div class="g-recaptcha" data-sitekey="6LeA5jYaAAAAAIFMOwALQGzXF631VyjuGpIoByIA"></div>
                        <br>

                        <?php
                            if(isset($_GET['captcha-error'])){
                                echo '<div class="alert alert-danger" role="alert">Captcha is required!</div>';
                            } 
                        ?>

                        <input type="submit" value="Populate Student Table" class="btn btn-primary btn-lg" role="button">
					</form>
                    <?php } ?>
				</div>
			</div>
			</div>
	</div>
	</body>
</html>