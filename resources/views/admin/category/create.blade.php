@extends('layouts.admin')
@section('title', 'Registrar Categorías')
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
        Registrar Categorías
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
          <li class="breadcrumb-item active"><a href="{{route('categories.index')}}">Categorías</a></li>
          <li class="breadcrumb-item active" aria-current="page">Registro de Categorías</li>
        </ol>
      </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Categorías</h4>
                    </div>

                    {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    @include('admin.category._form')
                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{route('categories.index')}}" class="btn btn-light">Cancelar</a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

  </div>
@endsection