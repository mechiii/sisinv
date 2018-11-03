@extends('layouts.app')
@section('title', 'Productos')
@section('content')
<table class="table table-bordered">
<thead>
	<tr>
		<th>ID</th>
	<th>Nombre</th>
	<th>Descripcion</th>
	<th>Precio</th>
	<th>Categoria</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
<!-- 	<?php
//(es para ver si el arugumento del foreach esta funcionando)$productos = [];
foreach ($productos as $producto): ?>
<tr>
	<td><?php echo $producto->nombre; ?></td>
	<td><?php echo $producto->descripcion; ?></td>
	<td><?php echo $producto->precio; ?></td>
	<td><?php echo $producto->categoria_id; ?></td>
	<td>

	</td>
</tr>
	<?php endforeach?> -->

@foreach ($productos as $producto)
<tr>
	<td>{{$producto->id}}</td>
	<td> {{$producto->nombre}}</td>
	<td>{{$producto->descripcion}}</td>
	<td>{{$producto->precio}}</td>
	<td>{{$producto->categoria_id}}</td>
	<!--<td><a href="{{ route('productos.edit',['producto'=>$producto->id]) }}" class="btn btn-default">Editar</a></td>-->
	<td style="width: 200px;">

		<div class="btn-group btn-group-toggle" data-toggle="buttons">
		<a href="{{action('ProductoController@edit', $producto['id'])}}" class="btn btn-warning">Editar</a>
          <form action="{{action('ProductoController@destroy', $producto['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">

            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
      </div>
        </td>
</tr>
@endforeach
</tbody>

</table>
@endsection