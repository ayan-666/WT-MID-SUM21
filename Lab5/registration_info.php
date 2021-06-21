<?php
    
?>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<html>
	<body>
		<form action="" method="post">
		    <fieldset>
                <legend>User Information</legend>
                <table>
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name"  type="text" placeholder="write your name"><br>
				</tr>
				<tr>
					<td align="right">Username</td>
					<td>:<input name="username" type="text" placeholder="Your username.."></td>
				</tr>
                <tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="email" placeholder="Write Your Email"></td>
				</tr>
                <tr>
					<td align="right">Phone</td>
					<td>:<input name="text" type="email" placeholder="Write your phone number"></td>
				</tr>
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
				</tr>
                <tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="confirmpassword" type="password"></td>
				</tr>
                <tr>
					<td align="right">Birth Date</td>
					<td>
                    <select id="birthdate" name="day" >
                    <option value="day">1</option>
                    <option value="day">2</option>
                    <option value="day">3</option>
                    <option value="day">4</option>
                    <option value="day">5</option>
                    </select>
                    <select id="birthdate" name="month" >
                    <option value="month">January</option>
                    <option value="month">February</option>
                    <option value="month">March</option>
                    <option value="month">April</option>
                    <option value="month">May</option>
                    <option value="month">June</option>
                    <option value="month">July</option>
                    <option value="month">August</option>
                    <option value="month">September</option>
                    <option value="month">October</option>
                    <option value="month">November</option>
                    <option value="month">December</option>
                    </select>
                    <select id="birthdate" name="year" >
                    <option value="year">1995</option>
                    <option value="year">1996</option>
                    <option value="year">1997</option>
                    <option value="year">1998</option>
                    <option value="year">1999</option>
                    <option value="year">2000</option>
                    <option value="year">2001</option>
                    </select>
                    </td>
					<td><span></span></td>
				</tr>
				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male"  name="gender"> Male <input type="radio" value="Female"  name="gender"> Female <br>
				</tr>
				<tr>
					<td align="right">Address</td>
					<td>: <textarea name="address"></textarea>
					</td>
					
				</tr>
				<tr>
					<td><input type="submit" value="Register"></td>
				</tr>
			</table>
            </fieldset>
		</form>
	</body>
</html>
</body>
</html>