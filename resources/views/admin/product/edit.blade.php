@extends('layouts.admin')
@section('title','Editar producto')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edición de productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de producto</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de productos</h4>
                    </div>

                    {!! Form::model($product,['route'=>['products.update',$product], 'method'=>'PUT']) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="sell_price">Precio de venta</label>
                      <input type="text" name="sell_price" id="sell_price" value="{{$product->sell_price}}" class="form-control" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="category_id">Categoría</label>
                      <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}"
                            @if ($category->id == $product->category_id)
                            selected
                            @endif
                        >{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                     
                    <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" name="image" id="image" lang="es">
                        <label class="custom-file-label" for="image">Seleccionar Archivo</label>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title d-flex">Imagen de producto
                          <small class="ml-auto align-self-end">
                            <a href="dropify.html" class="font-weight-light" target="_blank">Seleccionar Archivo</a>
                          </small>
                        </h4>
                        <input type="file"  name="image" id="image" class="dropify" />
                    </div>

                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="{{route('products.index')}}" class="btn btn-light">
                        Cancelar
                     </a>
                     {!! Form::close() !!}
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$products->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!--{!! Html::script('melody/js/data-table.js') !!}-->
{!! Html::script('melody/js/dropify.js') !!}
@endsection