<html>
	<head>
		<style>
			<?php include 'Styles.css'; ?>
		</style>
		<div class="Title">
			Site
		</div>
	</head>

	<body>

		<div class="Panel">
		<div>
			<input class="Submit" type="submit" id="Login" value="Login">
			<input class="Submit" type="submit" id="Register" value="Register">
		</div>
		<div class="Login">
			<input  class ="TextBox" id="Login-Name" type="text" placeholder="Name"><br>
			<input  class ="TextBox" id="Login-Password" type="password" placeholder="Password"><br>
		</div>

		<div class="Register">
			<input  class ="TextBox" id="Register-Name" type="text" placeholder="Name"><br>
			<input  class ="TextBox" id="Register-Email" type="text" placeholder="Email"><br>
			<input  class ="TextBox" id="Register-Password" type="password"  placeholder="Password"><br>
			<input  class ="TextBox" id="Register-Password-Again" type="password"  placeholder=" Repeat Password"><br>
		</div>
		
		<form action="Test2.php">
		<input  id="SubmitButton" type="submit">
		</form>

		<div>
	</body>
</html>
<script type="text/javascript">
	
		document.getElementById("Register-Name").disabled=true;
		document.getElementById("Register-Email").disabled=true;
		document.getElementById("Register-Password").disabled=true;
		document.getElementById("Register-Password-Again").disabled=true;


		document.getElementById("Login-Name").disabled=false;
		document.getElementById("Login-Password").disabled=false;








	document.getElementById("Login").onclick=function(){
		document.getElementById('Register').style.borderBottomColor="black";
		document.getElementById('Register').style.borderLeftColor="black";
		document.getElementById('Login').style.borderBottomColor="white";
		document.getElementById('Login').style.borderRightColor="white";

		document.getElementById("Register-Name").disabled=true;
		document.getElementById("Register-Email").disabled=true;
		document.getElementById("Register-Password").disabled=true;
		document.getElementById("Register-Password-Again").disabled=true;


		document.getElementById("Login-Name").disabled=false;
		document.getElementById("Login-Password").disabled=false;
	} ;


	document.getElementById("Register").onclick=function(){
		document.getElementById('Register').style.borderBottomColor="white";
		document.getElementById('Register').style.borderLeftColor="white";
		document.getElementById('Login').style.borderBottomColor="black";
		document.getElementById('Login').style.borderRightColor="black";

		document.getElementById("Register-Name").disabled=false;
		document.getElementById("Register-Email").disabled=false;
		document.getElementById("Register-Password").disabled=false;
		document.getElementById("Register-Password-Again").disabled=false;

		document.getElementById("Login-Name").disabled=true;
		document.getElementById("Login-Password").disabled=true;
	} ;


</script>
<?php

?>
