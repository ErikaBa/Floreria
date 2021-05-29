@extends('layouts.admin')
@section('title', 'Editar Categoria')
@section('styles')
@endsection

@section('options')
@endsection
@section('preferences')
@endsection
 
@section('content')
<div class="content-wrapper">

    <div class="page-header">
      <h3 class="page-title">
        Editar Categorias
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
          <li class="breadcrumb-item active"><a href="{{route('categories.index')}}">Categorias</a></li>
          <li class="breadcrumb-item active" aria-current="page">Editar Categorias</li>
        </ol>
      </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Categorias</h4>
                    </div>

                    {!! Form::model($category,['route' => ['categories.update', $category], 'method' => 'PUT']) !!}

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="name" value="{{$category->name}}" id="" class="form-control" required placeholder="Nombre">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="3">{{$category->description}}
                            
                        </textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{route('categories.index')}}" class="btn btn-light">Cancelar</a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

  </div>
@endsection