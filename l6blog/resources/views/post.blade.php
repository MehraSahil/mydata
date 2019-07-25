<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hovered">
      	<tr>
      		<td>Srno</td>
      		<td>name</td>
      		<td>email</td>
      		<td>city</td>
      		<td>address</td>
      		<td>Action</td>
      	</tr>
      	@foreach($datas as $data =>$value)
      	<tr>
      		<td><input type="text" name="" value="{{ $value->id ?? 'N\A' }}"></td>
      		<td><input type="text" name="" value="{{ $value->name ?? 'N\A' }}"></td>
      		<td><input type="text" name="" value="{{ $value->email ?? 'N\A' }}"></td>
      		<td><input type="text" name="" value="{{ $value->city ?? 'N\A' }}"></td>
      		<td><input type="text" name="" value="{{ $value->address ?? 'N\A' }}"></td>
      		<td>
      			<a href="#" id="{{ $value->id }}" class="btn btn-success delete">Delete</a>
      			<button id="{{ $value->id }}" class="btn btn-success update">Update</button>
      			<h5 id="demo"></h5>
      		</td>
      	</tr>
      	@endforeach
      </table>
    </div>
      {{ $datas->links() }}
  </div>
</div>



<script>
	$(document).ready(function(){
		$('.delete').on('click', function(){
			var con = confirm('Are you sure you want to delete record');
			if(con){
				var r_one = $(this).parent().parent();
				let id = $(this).attr('id');
				$.ajax({
					url:"{{ url('deleteRecord') }}" + '/' + id,
					beforeSend:function(){
						console.log('beforeSend');
					},
					complete:function(){
						console.log('complete set record');
					},
					error:function(){
						console.log('error is found');
					},
					success:function(msg){
						if(msg==1){
							r_one.remove();
						}
						$('demo').html('msg');
					}
				});
			}
		});
	});
$(document).ready(function(){
	$('.update').on('click', function(){
		var firstname = $(this).parent().parent().children();
		var name = firstname.eq(1).find().html("value").val();
		console.log(name);return 

	});
});	
</script>


</body>
</html>