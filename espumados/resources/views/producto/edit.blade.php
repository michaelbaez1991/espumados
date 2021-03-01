@extends('layout')

@section('content')
<br><br>
<div class="container">
    <div class="col-12">
        <form action="/productos/{{$producto->id}}" method="POST">
            @csrf    
            @method('PUT')

            <div class="form-group">
                <label class="label">Código de barras</label>
                <input required autocomplete="off" name="codigo_barras" class="form-control"
                        type="text" placeholder="Código de barras" value="{{$producto->codigo_barras}}">
            </div><br>
            <div class="form-group">
                <label class="label">Descripción</label>
                <input required autocomplete="off" name="descripcion" class="form-control"
                        type="text" placeholder="Descripción" value="{{$producto->descripcion}}">
            </div><br>
            <div class="form-group">
                <label class="label">Precio de compra</label>
                <input required autocomplete="off" name="precio_compra" class="form-control"
                        type="decimal(9,2)" placeholder="Precio de compra" value="{{$producto->precio_compra}}">
            </div><br>
            <div class="form-group">
                <label class="label">Precio de venta</label>
                <input required autocomplete="off" name="precio_venta" class="form-control"
                        type="decimal(9,2)" placeholder="Precio de venta" value="{{$producto->precio_venta}}">
            </div><br>
            <div class="form-group">
                <label class="label">Existencia</label>
                <input required autocomplete="off" name="existencia" class="form-control"
                        type="decimal(9,2)" placeholder="Existencia" value="{{$producto->existencia}}">
            </div><br><br>

            <button class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>

@endsection