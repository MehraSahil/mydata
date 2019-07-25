<!DOCTYPE html>
<html>
<head>
	<title>sending otp</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>send to otp message</h1>
<form method="post" action="" class="col-md-6">
	{{ csrf_field() }}
	Enter the number<input type="text" class="form-control" name="number" placeholder="enter the phone number">
	@if($errors->has('number'))
	<li class="alert alert-danger">{{ $errors->first('number') }}</li>
	@endif<br>
	Enter the otp<input type="text" name="verifyotp" class="form-control" placeholder="enter the otp" />
	@if($errors->has('verifyotp'))
	<li class="alert alert-danger">{{ $errors->first('verifyotp') }}</li>
	@endif
	<br>
	<button type="submit" class="btn btn-success">Submit</button>
</form>
</body>
</html>