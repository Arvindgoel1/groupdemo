<html>
<head>
<title>login</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<script>  
function validateform(){  
var email=document.myform.email.value;  
var password=document.myform.password.value;  
  
if (email==null || email==""){  
  alert("Email can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  
	
		<form name="myform" method="post" action="welcome.php" onsubmit="return validateform()" > 
		<div class="container1" >

<h2 style="text-align: center; text-decoration-color:  #1f4369;"><b>Login</b></h2>
<div class="col-lg-4 m-auto d-block">

<div class="form-group">
<label>Email</label>
<input type="text" name="email" placeholder="Email" value="">
</div>
<div class="form-group">

<label>Password</label>
<input type="password" name="password" placeholder="Password" value="">
</div>
<button type="submit" class="btn btn-primary" name="log" href="welcome.php">Login</button>

<br>
<a href="registration.php" class="text-decoration-color:green;">new user enter here!!</a></br>
</div>
</div>


</form> 


</body>
</html>