@extends('layouts.admin')
@section('title', 'Gestion de compras')
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
            Sección de compras
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="card-title">Compras</h4>

                <div class="form-group">
                    <a href="{{route('purchases.create')}}" class="btn btn-primary">Agregar</a>
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
                                @foreach($purchases as $purchase)
                                <tr>
                                    <th scope="row">
                                    <a href="{{route('purchases.show', $purchase)}}">{{$purchase->id}}</a></th>
                                    <!--<td>
                                        <a href="{{route('purchases.show', $purchase)}}">{{$purchase->id}}</a>
                                    </td>-->
                                    <td>{{$purchase->purchase_date}}</td>
                                    <td>{{$purchase->total}}</td>
                                    <td>{{$purchase->status}}</td>
                                    <td style="width: 50px">
                                        <!--{!!Form::open(['route'=>['purchases.destroy', $purchase], 'method' =>
                                        'DELETE']) !!}-->

                                        <!--<a class="jsgrid-button jsgrid-edit-button"
                                            href="{{route('purchases.edit', $purchase)}}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>-->

                                        <!--<button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit"
                                            title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>-->

                                        <a href=""><i class="fas fa-print"></i></a>

                                        <a href="{{route('purchases.pdf', $purchase)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-file-pdf"></i></a>

                                        <a href="{{route('purchases.show', $purchase)}}" class="jsgrid-button jsgrid-edit-button"><i class="far fa-plus-square"></i></a>

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
