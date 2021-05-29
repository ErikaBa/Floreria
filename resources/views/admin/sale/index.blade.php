@extends('layouts.admin')
@section('title', 'Gestión de ventas')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }

</style>
@endsection
@section('create')
@endsection

@section('options')
@endsection
@section('preferences')
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Sección de ventas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ventas</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="card-title">Ventas</h4>

                <div class="form-group">
                    <a href="{{route('sales.create')}}" class="btn btn-primary">Agregar</a>
                    {{-- <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button> --}}
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th style="width:50px;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sales as $sale)
                                <tr>
                                    <th scope="row">
                                    <a href="{{route('sales.show', $sale)}}">{{$sale->id}}</a></th>
                                    <!--<td>
                                        <a href="{{route('sales.show', $sale)}}">{{$sale->id}}</a>
                                    </td>-->
                                    <td>{{$sale->purchase_date}}</td>
                                    <td>{{$sale->total}}</td>
                                    <td>{{$sale->status}}</td>
                                    <td style="width: 50px">
                                        <!--{!!Form::open(['route'=>['sales.destroy', $sale], 'method' =>
                                        'DELETE']) !!}-->

                                        <!--<a class="jsgrid-button jsgrid-edit-button"
                                            href="{{route('sales.edit', $sale)}}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>-->

                                        <!--<button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit"
                                            title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>-->

                                        <a href=""><i class="fas fa-print"></i></a>

                                        <a href="{{route('sales.pdf', $sale)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-file-pdf"></i></a>

                                        <!--<a href=""><i class="far fa-plus-square"></i></a>-->
                                        <a href="{{route('sales.show', $sale)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-plus-square"></i></a>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
