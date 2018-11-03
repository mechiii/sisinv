@extends('layouts.app')
@section('title', 'Productos Editar')
@section('content')
{!!
	Form::model($producto, ['route'=>['productos.update',$producto], 'method'=>'PUT'])
!!}
<div class="form-group">
	{!! Form::label('nombre','Nombre');!!}
	{!! Form::text('nombre',null,['class'=>'form-control']); !!}
	{!! Form::label('descripcion', 'Descripcion');!!}
	{!! Form::text('descripcion', null, ['class'=>'form-control']); !!}
	{!! Form::label('precio', 'Precio');!!}
	{!! Form::text('precio', null, ['class'=>'form-control']); !!}
	{!! Form::label('categoria_id', 'Categoria');!!}
	{!! Form::text('categoria_id', null, ['class'=>'form-control']); !!}
</div>
{!! Form::submit('Click Me!',['class'=>'btn btn-primary']);!!}
{!! Form::close() !!}
<!-- <form class="form.group" method="POST" action="{{action('ProductoController@update', $id)}}" >
	@csrf
	<div class="form-group">
		<label for="">Nombre</label>
		<input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control">
		<label> Descripcion</label>
		<input type="text" name="descripcion" value="{{$producto->descripcion}}" class="form-control">
		<label>Precio</label>
		<input type="num" name="precio" value="{{$producto->precio}}" class="form-control" id="cc-number">
		<label >Categoria</label>
		<input type="num" name="categoria_id" value="{{$producto->categoria_id}}" class="form-control">
	</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<input name="_method" type="hidden" value="PUT">
</form> -->

@endsection



