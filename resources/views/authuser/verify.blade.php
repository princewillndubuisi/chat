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
		<div class="logo"><img src="images/logo.png" alt=""><span>Socimo</span></div>
		<div class="mockup left-bottom"><img src="images/mockup.png" alt=""></div>
        <div class="card mt-5 text-center">
            <p class="text-success">Thank you for signing up! Please verify your email </p>
            <p class="text-success">A 6-digit code has been sent to {{Auth::user()->email }}. Please check!</p>
            <div class="col-6 mx-auto">
                <form action="{{route('email.confirm')}}" method="post">
                    @csrf
                <div class="form-group mt-3 mb-3">
                    <label for="code" class="form-label">Verification Code</label>
                    <input type="text" name="code" id="code" class="form-control" required>
                    @error('code')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Verify</button>
                </div>
                </form>
            </div>
            <p class="text-center">Did not receive code? <a href="{{route('send.verify.mail')}}" class="text-primary">Resend</a></p>
        </div>
		<div class="mockup right"><img src="images/star-shape.png" alt=""></div>
	</div>

</div>

	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>


</body>
</html>
