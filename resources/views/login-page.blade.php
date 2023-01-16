<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/x-icon" href="/assets/img/favicon.png">

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="/assets/css/lnr-icon.css">

<link rel="stylesheet" href="/assets/css/font-awesome.min.css">

<link rel="stylesheet" href="/assets/css/style.css">
<title>Login Page</title>

<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>



<div id="loader-wrapper">
<div class="loader">
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
<div class="dot"></div>
</div>
</div>

<div class="inner-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox shadow-sm grow">
<div class="login-left">
<img class="img-fluid" src="/assets/img/logo.png" style="border-radius: 15%;" style="border-radius: 15%;" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

@if($errors->any())
          			@foreach ($errors->all() as $error)
          					<div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
          							<strong style="color:white;">{!!$error!!}</strong>
          							<button type="button" style="color:white;" class="close" data-dismiss="alert" aria-label="Close">
          							<span aria-hidden="true" style="color:white;" >&times;</span>
          							</button>
          					</div>

          					<script>

          						window.onload=function(){

          							$("#errorBox").delay(3000).fadeOut("slow");

          						}

          					</script>

          			@endforeach
          		@endif


<form action="handle-login" method="POST" class="login-form">
{{ csrf_field() }}
<div class="form-group">
<input class="form-control" type="text" placeholder="Username" name="username" required>
</div>
<div class="form-group">
<input class="form-control" type="password" placeholder="Password" name="password" required>
</div>

<div class="form-group">
<input type="radio" name="login_type" id="login_type_admin" value="admin">
                <label for="inlineRadio1">Admin Login</label>

                <input type="radio" name="login_type" id="login_type_staff" value="staff">
                                    <label for="inlineRadio2">Staff Login</label>
</div>

<div class="form-group">
<button class="btn btn-theme button-1 text-white ctm-border-radius btn-block" type="submit" value="Login" >Login</button>
</div>
</form>

<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
<div class="login-or">
<span class="or-line"></span>
</div>

</div>
</div>
</div>
</div>
</div>
</div>



<script src="/assets/js/jquery-3.2.1.min.js"></script>

<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script src="/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<script src="/assets/js/script.js"></script>
</body>


</html>


