<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>SignUp - Bellicious Bakery</title>
<link rel="shortcut icon" href="assets/images/logo/favourite_icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
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
        <h2 style="font-weight:bold;color:#c7a17a;text-shadow:0 0 3px #, 0 0 5px #;"> SIGN UP FOR FREE </h2>
		<!-- @if(session()->has('message'))
		<div class="message mt-3" style="color:red;background-color:lightgreen;color:green;font-size:30px;width:28%;padding:5px;text-align:center;margin:5px auto;">    
				 {{ session()->get('message') }}
				 </div>
		@endif -->
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{url('signup')}}" method="post" id="signup_form">
				@csrf
					<input class="text" type="text" name="name" placeholder="Name" >
					<div class="error" style="margin-left:1em;"><span class="error-text name_error" style="color:white;"> </span></div>
					<input class="text" type="text" name="username" placeholder="Username" >
					<div class="error" style="margin-left:1em;"><span class="error-text usernamename_error" style="color:white;"></span></div>
					<input class="text " type="text" name="email" placeholder="Email">
					<div class="error" style="margin-left:1em;"><span class="error-text email_error" style="color:white;"></span></div>
					<input class="text " type="text" name="phone" placeholder="Phone" > 
					<div class="error" style="margin-left:1em;"><span class="error-text phone_error" style="color:white;"></span></div>
					<input class="text" type="password" name="password" placeholder="Password">
					<div class="error" style="margin-left:1em;"><span class="error-text password_error" style="color:white;"></span></div>
					<input class="text " type="password" name="confirm_password" placeholder="Confirm Password" >
					<div class="error" style="margin-left:1em;"><span class="error-text confirm_password_error" style="color:white;"></span> </div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login"> Login Now!</a></p>
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

	<script src="assets/js/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#signup_form').on('submit',function(e){
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
							});
						}else{
							$('#signup_form')[0].reset();
							alert(data.msg);
						}
					}
				});
			});
		});
	</script>
</body>
</html>