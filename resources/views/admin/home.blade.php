
@extends('layouts.app')
@section('content')
<div class='container'>
@if($revisor)
<div class='row my-4'>
    <div class='col-12'>
        <div class="card" style="background-color: #00296b;">
            <div class="card-header text-white">
                El usuario <span style="color: #ffc107;">{{$revisor->name}}</span> con dirección de correo <span style="color: #ffc107;">{{$revisor->email}}</span> ha solicitado unirse al team.
            </div>
            <div class="card-header text-white">
                Motivo: {{$revisor->reason}}
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
    <form action="{{route('admin.revisor.reject',['id'=>$revisor->id])}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Rechazar</button>
    </form>
    </div>
    <div class="col-md-6 text-right">
        <form action="{{route('admin.revisor.accept',['id'=>$revisor->id])}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Aceptar</button>
        </form>
    </div>
</div>
@else
<div class="row">
    <div class="col-12 mt-5">
        <h1 class="letrado text-white text-center">No hay ningun revisor que aceptar.</h1>
    </div>
</div>
@endif
</div>
@endsection