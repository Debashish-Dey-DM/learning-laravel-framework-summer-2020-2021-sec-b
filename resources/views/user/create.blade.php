<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

	<h2>Create New User</h2>

	<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>ID</td>
			<td><input type="text" name="id"> <span style="color:Red;">Choose between 4 to 7</span> </td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Add"></td>
		</tr>
	</table>
	</form>
</body>
</html>