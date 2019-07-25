<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col-md-3">#Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($datas as $data)
    <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->title }}</td>
      <td>{{ $data->description ?? "undefined" }}</td>
      <td>
      	<a href="{{ url('postbyid',$data->id) }}" class="btn btn-success">view</a>
      	<a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>