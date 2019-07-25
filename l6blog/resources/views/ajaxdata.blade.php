<!DOCTYPE html>
<html>
<head>
	<title>Ajax Run</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<body>
<form id="myform">

	name <input type="text" name="name" id="name" /><br>
	email<input type="text" name="email" id="email"><br>
	city<input type="text" name="city" id="city"><br>
	address<input type="text" name="address" id="address"><br>
	<button type="submit"> save</button>
	<h1 id="hello"></h1>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myform").on("submit", function(){
			event.preventDefault();
			$.ajax({
				url: "{{ url('ajaxData') }}",
				type: "POST",
				cache:false,
				processData:false,
				timeout:8000,
				_token: "{{ csrf_token() }}",
				data: {
					name:$("#name").val(),
					email:$("#email").val(),
					city:$("#city").val(),
					address:$("#address").val()
				}
			});
		});
	});
</script>
</body>
</html>