<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Login by guard</h3>
<form method="post">
	{{ csrf_field() }}
	email <input type="text" name="email"><br>
	password <input type="text" name="password"><br>
	<button type="submit">submit</button>
</form>
</body>
</html>