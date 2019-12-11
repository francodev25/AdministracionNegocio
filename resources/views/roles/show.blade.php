@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">Rol</div>

                <div class="card-body">
                    <p><strong>ID: </strong> {{$role->id}}</p>
                    <p><strong>Nombre: </strong> {{$role->name}}</p>
                    <p><strong>Slug: </strong> {{$role->slug}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection