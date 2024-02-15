<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>trial</title>
</head>
<body>
<h1>first trial</h1>
<form method="get" action="{{url('trail')}}">

		@csrf
		<input type="text" name="name" placeholder="xyz">
		<input type="text" name="email" placeholder="xyz">
		<input type="text" name="password" placeholder="xyz">

		@error('headline')
          {{$message}}
		@enderror
		

		<button type="submit">submit</button>
	</form>
</body>
</html>