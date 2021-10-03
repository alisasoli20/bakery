<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login - Bellicious Bakery</title>
<link rel="shortcut icon" href="assets/images/logo/favourite_icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link href="assets/css/signup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper" id="main-box"  style="background-image: url('assets/images/backgrounds/bg_05.png');
    background-size: cover ;
    background-repeat: no repeat;
    background-attachment: fixed;
	height:800px;">
		<a href="Home"> <h1 class="" style="font-weight:bold;color:#c7a17a;text-shadow:0 0 3px #fff, 0 0 5px #efefef;">BELLICIOUS BAKERY </h1> </a> 
        <h2 style="font-weight:bold;color:#c7a17a;text-shadow:0 0 3px #, 0 0 5px #;"> LOGIN NOW </h2>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{url('login')}}" method="post" id="login">
				@csrf
					<input class="text" type="text" name="username" placeholder="Username or email" >
                    <div class="error" style="margin-left:1em;"><span class="error-text username_error" style="color:white;"></span></div>
                    <input class="text" type="password" name="password" placeholder="Password">
                    <div class="error" style="margin-left:1em;"><span class="error-text password_error" style="color:white;"></span></div>
					<div class="alert alert-danger" role="alert" id="usernameerror">
  						
					</div>
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="signup"> Signup Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#login').on('submit',function(e){
				e.preventDefault();
				$.ajax({
					url:$(this).attr('action'),
					method:$(this).attr('method'),
					data:new FormData(this),
					processData:false,
					dataType:'json',
					contentType:false,
					beforeSend:function(){
						$(document).find('span.error-text').text('');
					},
					success:function(data){
						if(data.status == 0){
							$.each(data.error, function(prefix, val){
								$('span.'+prefix+'_error').text(val[0]);
							})
						}else if(data.status == 2){
							$('#usernameerror').text(data.msg2).show();    
                            }
							if (data.redirect) {
							// here you actually redirect to the new page
							window.location = data.redirect;
						}
					}
				});
			});
			$('#usernameerror').hide();
		});
	</script>
</body>
</html>