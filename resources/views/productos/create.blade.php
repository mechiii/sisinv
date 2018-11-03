

@extends('layouts.app')
@section('title', 'Productos')
@section('content')
<form class="form.group" method="POST" action="/productos">
	@csrf
	<div class="form-group">
		<label for=""> Nombre</label>
		<input type="text" name="name" class="form-control">
		<label> Descripcion</label>
		<input type="text" name="descripcion" class="form-control">
		<label>Precio</label>
		<input type="num" name="precio" class="form-control" id="cc-number">
		<label >Categoria</label>
		<input type="num" name="categoria_id" class="form-control">
		<!--<select class="custom-select d-block w-100" name="categoria_id" id="categoria_id">
			<option>Gaseosas</option>
			<option>Lacteos</option>
		</select>-->
	</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

<!--<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="form-group">
		<label for=""> Nombre</label>
		<input type="text" name="" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</body>
</html>-->