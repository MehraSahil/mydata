<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
<h1>Data search Here</h1>
<input type="text" placeholder="Search Here" name="search" id="search" class="form-control w-25" />
<h4 id="demo"></h4>
<br>
<table class="table table-bordered w-75">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Emial</th>
      <th scope="col">city</th>
      <th scope="col">Mobileno</th>
    </tr>
  </thead>
  	@foreach($datas as $data => $value)
    <tr>
      <th scope="row">{{ $value->id }}</th>
      <td>{{ $value->name }}</td>
      <td>{{ $value->email }}</td>
      <td>{{ $value->city }}</td>
      <td>{{ $value->mobileno }}</td>
    </tr>
    @endforeach
  <tbody>
  </tbody>
</table>
{{ $datas->links() }}

<script>
	$(document).ready(function(){
		$('#search').on('keyup', function(){
			let findval = $(this).val();
			$.ajax({
				url:'{{ url("search/data") }}',
				data:{search:findval},
				success:function(datas){ 
					if(datas){
						let output = '';
						let all_data = datas;
						if(all_data){
						all_data.map((event) => {
							output +=`<tr>
									
									<td>${event.name}</td>
									<td>${event.email}</td>
									<td>${event.city}</td>
									<td>${event.mobileno}</td>
									</tr>`;
						});
					$('#demo').text('');
					$('table tbody').html(output); 
					}
						} 
					else {
						$('table tbody').html('');
						$('#demo').text('result not found');
					}
				}
			});
		});
	});
</script>
</body>
</html>