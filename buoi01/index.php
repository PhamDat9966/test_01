<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<?php 
	       include_once 'link/css-link.html';
	       
// 	       echo "<pre>";
// 	       print_r($_POST);
// 	       echo "</pre>";
	       
	       $username           = "";
	       $pass               = "";
	       
	       if(isset($_POST['submit'])){
    	       $username       = $_POST['username'];
    	       $pass           = $_POST['pass'];
    	  
    	       
    	       if($username == 'admin' && $pass == '123456'){
    	           header('Location:admin.php');
    	           break;
    	       }
    	       
    	       if($username == 'member' && $pass == '123456'){
    	           header('Location:member.php?member='.$username);
    	           break;
    	       }
    	       
    	       $massage = "Thông tin đăng nhập chưa đúng";
	       }   
	?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form method="post" class="login100-form validate-form" action="#" name="main-form">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
							
        					<div class="container-login100-form-btn">
        						
        						<button class="login100-form-btn" type="submit" name="submit">
        							Sign in
        						</button>
        						
        					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							<!--  Forgot -->
							<p><?php echo $massage; ?></p>
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	<?php
	   include_once 'link/javascript-link.html';
	?>

</body>
</html>