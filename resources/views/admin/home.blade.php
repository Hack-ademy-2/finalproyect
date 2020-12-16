
@extends('layouts.app')
@section('content')
<div class='container'>
@if($revisor)
<div class='row my-4'>
    <div class='col-12'>
        <div class="card">
            <div class="card-header">
                Anuncio #{{$revisor->id}}
            </div>
            <div class="card-header">
                Anuncio #{{$revisor->email}}
            </div>
            <div class="card-header">
                Anuncio #{{$revisor->reason}}
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
    <div class="col-12">
        <h3>No hay ningun revisor que aceptar.</h3>
    </div>
</div>
@endif
</div>
@endsection