<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="#" method="POST" class="form">
	<div class="container" style="border: 1px solid black;">
			<div class="title">
				<h1>Student Registration Form</h1>
			</div>

			<div class="input">
				<label>First Name</label>
				<input type="text" name="fname" required>
			</div>

			<div class="input">
				<label>Last Name</label>
				<input type="text" name="lname" required>
			</div>

			<div class="input">
				<label>Address</label>
				<textarea name="address" required></textarea>
			</div>

			<div class="input">
				<label>Mobile No</label>
				<input type="number" name="phone" required>
			</div>

			<div class="input">
				<label>Gender</label>
				<div class="select_option">
					<select name="gender">
						<option value="">Select</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
			</div>

			<div class="input">
				<label>Email</label>
				<input type="email" name="email" required>
			</div>

			<div class="input">
				<label>Password</label>
				<input type="password" name="pass" required>
			</div>

			<div class="btn">
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>
	</div>

</body>
</html>