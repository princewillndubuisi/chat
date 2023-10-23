<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Socimo | Social Media Network Template</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">

	<div class="authtication bluesh high-opacity">
		<div class="verticle-center">
			<div class="welcome-note">
				<div class="logo"><img src="images/logo.png" alt=""><span>Socimo</span></div>
				<h1>Welcome to Socimo</h1>
				<p>
					Socimo is a one and only plateform for the researcheres, students, and Acdamic people. Every one can join this plateform free and share his ideas and research with seniors and juniours comments and openions.
				</p>
			</div>
			<div class="bg-image" style="background-image: url(images/resources/login-bg.png)"></div>
		</div>
	</div>
	<div class="auth-login">
		<div class="verticle-center">
			<div class="signup-form">
				<h4><i class="icofont-lock"></i> Singup</h4>
				<form method="post" class="c-form">
					<div class="row merged-10">
						<div class="col-lg-12"><h4>What type of researcher are you?</h4></div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="firstname" value="{{old('firstname')}}" placeholder="First Name">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="lastname" value="{{old('lastname')}}" placeholder="Last Name">
						</div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="username" value="{{old('username')}}" placeholder="User Name">
						</div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
							<input type="tel" name="phone" value="{{old('phone')}}" placeholder="Phone Number">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="text" name="email" value="{{old('email')}}" placeholder="Email@">
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6">
							<input type="password" name="password" value="{{old('password')}}" placeholder="Password">
						</div>
						<div class="col-lg-12">
							<div class="gender">
							  <input type="radio" id="male" name="gender" value="male">
							  <label for="male">Male</label>
							  <input type="radio" id="female" name="gender" value="female">
							  <label for="female">Female</label>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="checkbox">
								<input type="checkbox" id="checkbox" checked>
								<label for="checkbox"><span>I agree the terms of Services and acknowledge the privacy policy</span></label>
							</div>
							<button class="main-btn" type="submit"><i class="icofont-key"></i> Signup</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</div>

	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>


</body>
</html>
