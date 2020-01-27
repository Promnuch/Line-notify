

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tset Line-Notify</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

	<div class="contact1" >
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" action="notify.php" method = "post">
				<span class="contact1-form-title">
					Message
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="firstname" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>

				
				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn " >
						<span>
							SUBMIT
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


</body>
</html>
