<!--  <html>
<head>

<script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["lname"].value;
    var z = document.forms["myForm"]["email"].value;
//     var z=document.myform.email.value;  
// var atposition=z.indexOf("@");  
// var dotposition=z.lastIndexOf("."); 
    var z1 = document.forms["myForm"]["password"].value;
    var z2 = document.forms["myForm"]["repassword"].value;
    var z3 = document.forms["myForm"]["mo_no"].value;

  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
    if (y == "") {
    alert("Name must be filled out");
    return false;
  }
   

// if (atposition<1 || dotposition<atposition+2 || dotposition+2>=z.length){  
//   alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
//   return false;  
//   }  

  if(z == ""){
  	alert("Email must be required.");
  	return false;
  }
  if(z1 != z2){
  	alert("password must be correct enter.");
  	return false;
  }
  if(z3 == ""){
  	alert("mobile number must be required.");
  	return false;
  }
}
</script>


<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
	<div class="container">
  First Name: <input type="text" name="fname">
  Last Name: <input type="text" name="lname">
  Email:<input type="email" name="email">
  Password:<input type="password" name="password">
  Re-password:<input type="password" name="repassword">
  Mo No:<input type="number" name="mo_no">

  <input type="submit" value="Submit">
  <a href="index.php"><b>Already register user click here??</b></a>>
  </div>
</form>

</body>
</html> */
 -->
 <html>
<head>
	<title>registration</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


	<div class="container">
		
		<div class="col-lg-10 m-auto d-block">
			
			<form action="index.php" onsubmit="return validation()" >
				
				<div class="form-group">
					<h1 class="text-white text-center font-weight-bold bg-success" style="font-size: 55px;"> Sign UP </h1>
					<label for="user" class="font-weight-bold"> Username: </label>
					<input type="text" name="user" class="form-control" id="user" autocomplete="off">
					<span id="username" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Password: </label>
					<input type="password" name="pass" class="form-control" id="pass" autocomplete="off">
					<span id="passwords" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Confirm Password: </label>
					<input type="password" name="conpass" class="form-control" id="conpass" autocomplete="off">
					<span id="confrmpass" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Mobile Number: </label>
					<input type="text" name="mobile" class="form-control" id="mobileNumber" autocomplete="off">
					<span id="mobileno" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Email: </label>
					<input type="text" name="email" class="form-control" id="emails" autocomplete="off">
					<span id="emailids" class="text-danger font-weight-bold"> </span>
				</div>

				<input type="submit" name="submit" value="submit" class="btn btn-success" 	autocomplete="off">

				<br><a href="index.php">Already register user click here!!</a></br>


			</form><br><br>


		</div>
	</div>



	<script type="text/javascript">
		

		function validation(){

			var status= true;

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;





			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				status= false;
			} else{
				document.getElementById('username').innerHTML ="";

			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				status= false;
			}
				else{
				document.getElementById('username').innerHTML ="";
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				status= false;
			}

			else{
				document.getElementById('username').innerHTML ="";

			}





			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				status= false;
			}
			else{
				document.getElementById('passwords').innerHTML ="";

			}


			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				status= false;
			}
			else{
				document.getElementById('passwords').innerHTML ="";

			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				status= false;
			}
			else{
				document.getElementById('confrmpass').innerHTML ="";

			}



			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
				status= false;
			}
			else{
				document.getElementById('confrmpass').innerHTML ="";

			}




			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				status= false;
			}
			else{
				document.getElementById('mobileno').innerHTML ="";

			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
				status= false;
			}
			else{
				document.getElementById('mobileno').innerHTML ="";

			}
			if(mobileNumber.length!=10){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
				status= false;
			}
			else{
				document.getElementById('mobileno').innerHTML ="";

			}



			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
				status= false;
			}
			else{
				document.getElementById('emailids').innerHTML ="";

			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				status= false;
			}
			else{
				document.getElementById('emailids').innerHTML ="";

			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				status= false;
			}
			else{
				document.getElementById('emailids').innerHTML ="";

			}

			if(status== true){


				localStorage.setItem('data',JSON.stringify());
			}

			return status;
		}

	</script>

</body>
</html>