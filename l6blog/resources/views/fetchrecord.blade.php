<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body> 
<table class="table table-bordered">
	<tr>
		<td>name</td>
		<td>city</td>
		<td>address</td>
		<td>mobileno</td>
	</tr>
	<tr>
		
	<tbody>
	</tbody>
	</tr>
</table>
<a id="prev" class="btn btn-success">Prev</a>
<a id="next" class="btn btn-success">Next</a>
</body>
<script>
	$(document).ready(function(){
		$.ajax({
			url:"{{ url('recordfetch') }}",
			type:'get',
			success:function(datas){
				console.log(datas);
				if(datas.data){
				let tr = "";
				let all_out = datas.data;
				 
				if(all_out.length > 0){
					all_out.map((event) => {

						tr +=`<tr>
							=<td>${event.id}</td>;
							=<td>${event.name}</td>;
							=<td>${event.city}</td>;
							=<td>${event.address}</td>;
							=<td>${event.mobileno}</td>;
							</tr>`;
					});
					$('table tbody').html(tr);
				}
				} 
			}
		});
	});
	$('#prev').on('click', function(){
		let url = $(this).attr('href');
		$.ajax({
			url:url,
			type:'get',
			success:function(datas){
				console.log(datas);
				if(datas.data){
				let tr = "";
				let all_out = datas.data;		 
				if(all_out.length > 0){
					all_out.map((event) => {
						tr +=`<tr>
							<td>${event.id}</td>;
							<td>${event.name}</td>;
							<td>${event.city}</td>;
							<td>${event.address}</td>;
							<td>${event.mobileno}</td>;
							</tr>`;
					});
					$('table tbody').html(tr);
					$('#prev').attr('href',event.prev_page_url);
					$('#next').attr('href',event.next_page_url);
				}
				} 
			}
		});
	});
	$('#next').on('click', function(){
		let url = $(this).attr('href');
		$.ajax({
			url:url,
			type:'get',
			success:function(datas){
				console.log(datas);
				if(datas.data){
				let tr = "";
				let all_out = datas.data;		 
				if(all_out.length > 0){
					all_out.map((event) => {
						tr +=`<tr>
							<td>${event.id}</td>;
							<td>${event.name}</td>;
							<td>${event.city}</td>;
							<td>${event.address}</td>;
							<td>${event.mobileno}</td>;
							</tr>`;
					});
					$('table tbody').html(tr);
				}
					$('#prev').attr('href',event.prev_page_url);
					$('#next').attr('href',event.next_page_url);
				} 
			}
		});
	});
</script>
</html>