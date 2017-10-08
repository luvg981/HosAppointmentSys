<!DOCTYPE html>
<html>
<head>
	<title>TakeAppointment</title>
	<link rel="stylesheet" type="text/css" href="form.css">></link>
	<link type="text/javascript" href="captcha.js">
	<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
</head>
<body onload="CaptchaChange()">

<div id="form">
	<div><span>Register</span></div>


	<div id="formL">
		<form action="signup.php" method="POST">
			<div id="formlLeftAside">
				<div id="lable1">Name</div>
				<div id="lable1">Sex</div>
				<div id="lable1">Age</div>
				<div id="lable1">Mobile</div>
				<div id="lable1">Email</div>
				<div id="lable1">Department </div>
				
			</div>

			<div id=formlRightAside>
				<div id="ll">
					<div id="inputL">
						<input type="text" name="fname" placeholder="Name" required="required">
					</div>	
					<div id="inputL">
						<select required name="Sex">
							<option selected value="">Sex</option>
							<option value="M">MALE</option>
							<option value="F">FEMALE</option>
							<option value="O">OTHER</option>
						</select>
					</div>
					<div id="inputL">
						<input type="number" name="age" required="required" placeholder="Age">
					</div>
					<div id="inputL">
						<input type="number" name="mobile" required="required" placeholder="Mobile Number">
					</div>

					<div id="inputL">
						<input type="email" name="email" placeholder="Email">
					</div>
					<div id="inputL">
						<select required name="dept">
							<option selected value="">Department</option>
							<option value="cardiology">Cardiology</option>
							<option value="dentist">Dentist</option>
							<option value="neurology">Neurology</option>
							<option value="E.N.T.">E.N.T.</option>
							<option value="other">OTHER</option>
						</select>
					</div>

					<div id="inputL">
						<textarea rows="4" cols="50" placeholder="Description of Problem"></textarea>
					</div>
					
				</div>


				
			</div>
			<button id="b1" type="submit"> Register </button>
			<button id="b2" type="reset" > Reset </button>		
		</form>
	</div>

</div>
</body>


<script type="text/javascript">

	function CaptchaChange(){
		var chars = "0123456789QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
		var string_length = 6;
		var CaptchaChange = '';
		for(var i = 0; i<string_length; i++){
			var aa = Math.random();
//			console.log(aa*chars.length);
			var rnum = Math.floor(aa * chars.length);
//			console.log(Math.floor(aa*chars.length))
			CaptchaChange += chars.substring(rnum,rnum+1);
//			console.log(CaptchaChange);
		}
		document.getElementById('randomfield').value = CaptchaChange;
	}

	function check() {
		if(document.getElementById('captchaEnter').value==''){
			alert('Properly Fill the form');
		}

		else if (document.getElementById('captchaEnter').value == document.getElementById('randomfield').value) {
			alert('Sigining In....Checking other credentials!');
		}
		else{
			alert('Please Re-check captcha');
		}
	}

</script>	


</html>
