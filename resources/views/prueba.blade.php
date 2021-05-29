@extends('layouts.admin')
@section('title', 'Gestion productos')

@section('options')

@endsection


@section('preferences')

@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        Data table
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data table</li>
        </ol>
      </nav>
    </div>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data table</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Descripion</th>
                      <th>Precio</th>
                      <th>Acciones</th>
                      
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection