<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
		<tr>
			<td>Srno</td>
			<td>name</td>
			<td>Email</td>
		</tr>
			
			@foreach($users as $kk)
		<tr>
			<td>$kk->id</td>
			<td>$kk->name </td>
			<td>$kk->email </td>
		</tr>
			  @endforeach

	</table>
</body>
</html>