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
		<div class="bg-image" style="background-image: url(images/resources/login-bg3.jpg)"></div>
		<ul class="welcome-caro">
			<li class="welcome-box">
				<figure><img src="images/resources/login-1.png" alt=""></figure>
				<h4>Ask questions with seniors Researchers</h4>
				<p>
					Ask questions and get the experienced answer by researchers and others fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="images/resources/login-2.png" alt=""></figure>
				<h4>Find New Researchers or Friends</h4>
				<p>
					Join Socimo and make your network of university or college fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="images/resources/login-3.png" alt=""></figure>
				<h4>Sell Your Online paid Content</h4>
				<p>
					Sell your online lectures, videos, books and many more with Socimo.
				</p>
			</li>

		</ul>
	</div>
	<div class="auth-login">
        {{-- @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            <strong>Success!</strong> {{Session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(Request::has('error'))
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
            <strong>Error!</strong> {{Request('Error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @error('email')
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
            <strong>Error!</strong> {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @enderror --}}
		<div class="logo"><img src="images/logo.png" alt=""><span>Socimo</span></div>
		<div class="mockup left-bottom"><img src="images/mockup.png" alt=""></div>
		<div class="verticle-center">
			<div class="login-form">
				<h4><i class="icofont-key-hole"></i> Forgot Password</h4>
				<form method="" action="" class="c-form">
                    @csrf
					<input type="password" name="password" placeholder="New Password">
					<input type="password" name="password_confirmation" placeholder="Confirm Password">
					<div class="checkbox">
						<input type="checkbox" id="checkbox" checked>
						<label for="checkbox"><span>Remember Me</span></label>
					</div>
					<button class="main-btn" type="submit"><i class="icofont-key"></i> Confirm</button>
				</form>
			</div>
		</div>
		<div class="mockup right"><img src="images/star-shape.png" alt=""></div>
	</div>

</div>

	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>


</body>
</html>
