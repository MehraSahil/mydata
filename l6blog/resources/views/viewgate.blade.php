<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $posts->id }}</th>
      <td>{{ $posts->title }}</td>
      <td>{{ $posts->description ?? "undefined" }}</td>
    </tr>
</body>
</html>