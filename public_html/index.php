<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<title>PWP Form Demo</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header>
				<div class="container">
					<h1>PWP Form Demo</h1>
				</div>
			</header>

			<main class="container pb-5">
				<div class="row">
					<div class="col-md-6">

						<!-- BEGIN CONTACT FORM -->
						<form id="demo-form">
							<div class="form-group">
								<label for="demoName">Name</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-user"></i></span>
									</div>
									<input class="form-control" type="text" name="demoName" id="demoName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="demoEmail">Email</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-envelope"></i></span>
									</div>
									<input class="form-control" type="email" name="demoEmail" id="demoEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="demoSubject">Subject</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-pencil"></i></span>
									</div>
									<input class="form-control" type="text" name="demoSubject" id="demoSubject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="demoMessage">Message</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-comment"></i></span>
									</div>
									<textarea name="demoMessage" rows="5" id="demoMessage" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
								</div>
							</div>

							<button class="btn btn-info" type="submit">Submit</button>
							<button class="btn btn-default" type="reset">Reset</button>
						</form>
						<!-- END CONTACT FORM-->

					</div><!-- /.col-sm-6 -->
				</div><!-- /.row -->
			</main>
		</div>

		<footer>
			<div class="container">
				<a href="https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/" target="_blank">Documentation</a> | <a href="https://github.com/rlewis2892/pwp-form-demo" target="_blank">GitHub</a>
			</div>
		</footer>
	</body>
</html>