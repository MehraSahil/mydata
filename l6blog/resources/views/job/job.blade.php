<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form method="post" class="col-md-4">
	{{ csrf_field() }}
	name<input type="text" class="form-control" name="name"><br>
	email<input type="text" name="email" class="form-control"><br>
	city<input type="text" name="city" class="form-control"><br>
	address<input type="text" name="address" class="form-control"><br>
	<button type="submit" class="btn btn-success">register</button>
</form>
</body>
</html>