<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
</script>
</head>
<body>
<!-- <input type="file" id="image" /> -->
<img style="display: none;" id="myimage"  height="200" width="200" />

<input type="image" src="{{ asset('public/img/icon.png') }}" id="mm" height="200" width="200">
<input type="file" style="display:none" id="upload" />

<input type="file" id="multiple" multiple><br>
<table>
</table>
<script>
	$(document).ready(function(){
		$('#image').on('change', function(event){ 
			let reader = new FileReader();
			reader.onload = function(){
				let output = $('#myimage').attr('src',reader.result).show();
			}
			reader.readAsDataURL(event.target.files[0]);
		});
	});
</script>
</body>
<script>
	$(document).ready(function(){
		$('input[type="image"]').on('click',function(){
			$('input[type="file"]').click();
				$('#upload').on('change',function(){
		let reader = new FileReader();
		reader.onload = function(){
			let output = $('#mm').attr('src',reader.result).show();
		};
		reader.readAsDataURL(event.target.files[0]);
			});
		});
	});	
</script>
<script>
	$(document).ready(function(){
		$('#multiple').on('change',function(event){
			if(event.target.files && event.target.files[0]){
				let i;
				for(i=0;i<event.target.files.length;i++){

					let reader = new FileReader();
					reader.onload = function(){
						$('table').append('<img src="' + reader.result + '"  height="200" width="200">');
					}
					reader.readAsDataURL(event.target.files[i]);
				}
			}
		});
	});
</script>
</html>