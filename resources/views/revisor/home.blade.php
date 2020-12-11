@extends('layouts.app')
@section('content')

<div class='container'>

    @if($announcement)
    <div class='row my-4 mb-5'>

        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    Anuncio #{{$announcement->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Usuario</h3>
                        </div>
                        <div class="col-md-9">
                            #{{$announcement->user->id}}
                            {{$announcement->user->name}}
                            {{$announcement->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Titulo</h3>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Descripción</h3>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->body}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Imagenes</h3>
                        </div>
                            @foreach ($announcement->images as $image)

                                <img src="{{Storage::url($image->file)}}" class="d-block w-100" alt="...">
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Rechazar</button>
            </form>
        </div>
        <div class="col-md-6 text-right">
            <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success mb-5">Acceptar</button>
            </form>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h3>{{ __('ui.revisorvacio') }}</h3>
        </div>
    </div>
    @endif
</div>
@endsection
