<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verificando</title>
</head>
<body>
	
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	
	<form action="verifying" method="Post">
		@csrf

		<input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
		<input type="text" name="lastname" placeholder="Apellido" value="{{ old('lastname') }}">
		<input type="text" name="yearsold" placeholder="Edad" value="{{ old('yearsold') }}">

		<button type="submit">Enviar</button>

	</form>
	
</body>
</html>