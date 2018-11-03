<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		//return 'hola desde el controlador de producto!!';
		$productos = Producto::orderBy('id')->get();
		/*foreach ($productos as $producto) {
			echo $producto->nombre;
			echo $producto->descripcion;
			echo $producto->precio;
			echo $producto->categoria_id;

		}*/
		return view('productos.index', compact('productos'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		return view('productos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$producto = new Producto();
		$producto->nombre = $request->input('name');
		$producto->descripcion = $request->input('descripcion');
		$producto->precio = $request->input('precio');
		$producto->categoria_id = $request->input('categoria_id');
		$producto->save();
		//echo 'Se guardo el Producto';
		return redirect('/productos');
		//return redirect()->route('productos.index')->with('success', 'Registro guardado satisfactoriamente');

		//return $request->input('name'); con esta parte se puede que se esta enviandoen el formuylari
		//return $request->all();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
		return $id;
		//return view('productos.index', compact('producto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
		//(Producto $producto)
		//echo 'hola';
		$producto = Producto::find($id);
		return view('productos.edit', compact('producto', 'id'));
		//return $producto;
		//$producto = Producto::find($id);
		//return view('productos.edit', compact('producto'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//exit;
		//
		//return $request;
		//return $id;
		$producto = Producto::find($id);
		$producto->nombre = $request->input('nombre');
		$producto->descripcion = $request->input('descripcion');
		$producto->precio = $request->input('precio');
		$producto->categoria_id = $request->input('categoria_id');
		$producto->save();
		return redirect()->route('productos.index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		//return $id;
		$producto = Producto::find($id);
		$producto->delete();
		return redirect('productos')->with('success', 'Registro Eliminado satisfactoriamente');
	}
}
