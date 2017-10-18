<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

		<title>PWP Form Demo</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header>
				<div class="container">
					<h1>PWP Form Demo</h1>
				</div>
			</header>

			<main class="container">
				<div class="row">
					<div class="col-lg-6">

						<!-- BEGIN CONTACT FORM -->
						<form id="contact-form">
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user"></i>
									</div>
									<input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope"></i>
									</div>
									<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil"></i>
									</div>
									<input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment"></i>
									</div>
									<textarea name="message" rows="5" id="message" class="form-control" placeholder="Your Message (2000 charaters max)"></textarea>
								</div>
							</div>

							<button class="btn btn-default" type="reset">Reset</button>
							<button class="btn btn-info" type="submit">Submit</button>
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