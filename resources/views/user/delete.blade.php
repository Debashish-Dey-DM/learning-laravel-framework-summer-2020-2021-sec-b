<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	
	<a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

    <h4>Are you sure You want to delete {{$user['name']}}</h4>
    <form method="POST">
        <input type="submit" value="yes"/>
    </form>
	
</body>
</html>