<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	
	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 
	<form method="POST">
	<h2>User Details</h2>
    	<table border="1">
        <tr>
			<td>ID</td>
			<td>{{$editUser['id']}}</td>
		</tr>
        </table>
	<table border="1">
	
		<tr>
			<td>Username</td>
			<td>{{$editUser['name']}}</td>
            <td>New Username</td>
            <td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$editUser['email']}}</td>
            <td>New Email</td>
            <td><input type="email" name="email"></td>
		</tr>

		
	</table>
	<td><input type="submit" name="Submit" value="Add"></td>
	</form>
</body>
</html>
