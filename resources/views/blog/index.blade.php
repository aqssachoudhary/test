<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Blog List</h1>

<a href="{{url('create-blog')}}">create blog</a>

<table>
	<thead>
		<th>Hea</th>
		<th>des</th>
	</thead>
	<tbody>
		
		@foreach($blogs as $blog)

		<tr>
			<td>
				{{$blog->headline}}
			</td>
			<td>
				{{$blog->description}}
			</td>
		</tr>

		@endforeach
	</tbody>
</table>
</body>
</html>