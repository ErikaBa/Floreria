@extends('layouts.admin')
@section('title','Editar cliente')
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
            Edición de clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de cliente</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de clientes</h4>
                    </div>

                    {!! Form::model($client,['route'=>['clients.update',$client], 'method'=>'PUT']) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" value="{{$client->name}}" class="form-control" name="name" id="name" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="curp">CURP</label>
                      <input type="text" value="{{$client->curp}}" class="form-control" name="curp" id="curp" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="rfc">Clave de RFC</label>
                      <input type="text" value="{{$client->rfc}}" class="form-control" name="rfc" id="rfc" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="address">Dirección</label>
                      <input type="text" value="{{$client->address}}" class="form-control" name="address" id="address" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="houseReference">Referencia del domicilio</label>
                      <input type="text" value="{{$client->houseReference}}" class="form-control" name="houseReference" id="houseReference" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Número de teléfono/celular</label>
                        <input type="text" value="{{$client->phone}}" class="form-control" name="phone" id="phone" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="email">Correo electrónico</label>
                      <input type="email" value="{{$client->email}}" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="ejemplo@gmail.com" required>
                    </div>


                     <button type="submit" class="btn btn-primary mr-2">Editar</button>
                     <a href="{{route('clients.index')}}" class="btn btn-light">
                        Cancelar
                     </a>
                     {!! Form::close() !!}
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$clients->render()}}
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