<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<h1>Welcome {{ session('user')->fullname }}</h1>




	<form action="/logout" method="post">
		@csrf
		<button type="submit">Salir</button>
	</form>
</body>
</html>