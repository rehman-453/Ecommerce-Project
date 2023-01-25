<!DOCTYPE html>
<html>
<?php  include('head.php'); ?>
<body>

<?php  include('header.php'); ?>

<section class="aboutus">
	<div class="container-fluid" id="cf2">
		<div class="container">
			<div class="row">
			<div class="col-xxl-6 row5">
				    
                     <h1>LOGIN / SIGNUP</h1>
                     
			</div>
			<div class="col-xxl-6 row6">
				<img src="images/bottles.png">
				</div>
			</div>
		</div>
	</div>
	
</section>


<section class="boxx1">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6 box3">
				<h1>Login To Your Account</h1>
				<input type="text" placeholder=" &nbsp;&nbsp;User Name" class="name" id="boxes"><br>
                <input type="text" placeholder=" &nbsp;&nbsp;Passowrd" class="address" id="boxes"><br>
                <button>LOGIN</button><br>
                <input type="checkbox" id="rememberme" name="Rememberme" class="checkbox"><label for="Rememberme">&nbsp;&nbsp;Remember me</label>
                <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgot Password?</a>
			</div>


			<div class="col-xxl-6 box4">
				<h1>Register Your Account</h1>
				<form action="operation.php" method="Post">
					<input name="first_name" type="text" placeholder=" &nbsp;&nbsp;First Name" class="fname" id="boxes1" required>
					<input name="last_name" type="text" placeholder=" &nbsp;&nbsp;Last Name" class="lname" id="boxes1" required><br>
					<input name="email" type="email" placeholder=" &nbsp;&nbsp;Email Address" class="email" id="boxes" required><br>
					<input name="password" type="password" placeholder=" &nbsp;&nbsp;Password" class="password" id="boxes" required><br>
					<input name="cnfrm_password" type="password" placeholder=" &nbsp;&nbsp;Retype Password" class="fname" id="boxes" required><br>
					<button type="submit" name="btn_register">CREATE ACCOUNT</button>
				</form>
               

			</div>



		</div>
	</div>
</section>



<section class="eighteenrow">
	<div class="container">
		<div class="row">
			<div class="col-xxl-4"><h1>PRACTICAL <br>MAGIC</h1></div>
			<div class="col-xxl-2"><ul>
				<li> <b>CBD RELIEF</b></li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
			</ul></div>
			<div class="col-xxl-2"><ul>
				<li><b>CBD RELIEF</b></li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
			</ul></div>
			<div class="col-xxl-2"><ul>
				<li><b>CBD RELIEF</b></li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
				<li>LOREM IPSUM</li>
			</ul></div>
			<div class="col-xxl-2"><ul>
				<li><b>CONTACT US</b></li>
				<li>your@email.com</li>
				<li>Your location goes here</li>
				<li>+1 1223 76243</li>
				<li>Mon-Fri 10am-9pm</li>
				<li>Sat-Sun 10am-6pm</li>
				<li>Follow Us</li>
				<li><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin-in"></i></li>
			</ul></div>
		</div>
	</div>
</section>

<footer class="ft">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6 copyright">
				<i class="fa-regular fa-copyright"></i>&nbsp;All Rights Reserved Lorem Ipsum 2022
			</div>
			<div class="col-xxl-6">
				<img src="images/visa.png">
			</div>
		</div>
	</div>
</footer>

</body>
</html>