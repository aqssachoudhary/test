<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Blog</title>
</head>
<body>

	<form method="POST" action="{{url('store-blog')}}">

		@csrf
		<input type="text" name="headline" placeholder="headline">

		@error('headline')
          {{$message}}
		@enderror
		<textarea name="description"></textarea>

		<button type="submit">submit</button>
	</form>

</body>
</html>