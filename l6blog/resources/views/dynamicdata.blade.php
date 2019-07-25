<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<select id="people">
	<option selected>--------select-------</option>
	@foreach($datas as $data => $value)
	<option value="{{ $data }}"  color="{{ $value->color }}">{{ $value->fname }}</option>
	@endforeach
</select>
</body>
<script>
	let color = new Array();
	console.log(color);
	color[0] = "";
	$('#people option').each(function(){
		let dd = $(this).attr('color');
		let kk = color.push(dd);
	});
	$(document).ready(function(){
		$('#people option').each(function(i){
			let colors = color[Math.floor(Math.random() * color.length)];
			console.log(colors);
			$(this).css({"background-color":colors});
		});
	});

</script>
</html>