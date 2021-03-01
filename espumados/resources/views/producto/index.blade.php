@extends('layout')

@section('content')

<br><br>
<div class="container">
    <div class="col-12">
        <h1>Productos <i class="fa fa-box"></i></h1>
        <a href="{{route("productos.create")}}" class="btn btn-success mb-2">Agregar</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Código de barras</th>
                    <th>Descripción</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Utilidad</th>
                    <th>Existencia</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->codigo_barras}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->precio_compra}}</td>
                        <td>{{$producto->precio_venta}}</td>
                        <td>{{$producto->precio_venta - $producto->precio_compra}}</td>
                        <td>{{$producto->existencia}}</td>
                        <td>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                <a href="/productos/{{$producto->id}}/edit" class="btn btn-info btn-sm">Editar</a>         
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection