@extends('layouts.app')
@section('content')

<div class='container'>

    @if($announcement)
    <div class='row my-4 mb-5'>

        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    ID {{ __('ui.anuncio')}} #{{$announcement->id}}
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>{{ __('ui.usuario')}}</h5>
                        </div>
                        <div class="col-md-9">
                            ID #{{$announcement->user->id}} <br>
                            {{$announcement->user->name}} <br>
                            {{$announcement->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>{{ __('ui.titulo')}}</h5>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>{{ __('ui.descripcion')}}</h5>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->body}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <h5>{{ __('ui.imagenes')}}</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                @include ('announcement._announcement_carousel')
                            </div>
                            @foreach ($announcement->images as $image)
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <p>Adult: {{$image->adult}} - Spoof: {{$image->spoof}} </p>
                                <p>Medical: {{$image->medical}} - Violence: {{$image->violence}}</p>
                                <p>Racy: {{$image->racy}}</p>
                                <!-- ID: {{$image->id}} <br> URL:
                                    {{Storage::url($image->file)}} <br> -->
                            </div>
                            <div class="col-12">
                            <div class="dropdown float-right">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Labels
                                </button>
                                @if($image->labels)
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                @foreach ($image->labels as $label)
                                    <a class="dropdown-item" href="#">{{$label}}</a>
                                @endforeach
                                </div>
                                @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 text-right">
            <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">{{ __('ui.rechazar')}}</button>
            </form>
        </div>
        <div class="col-6 text-left">
            <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success mb-5">{{ __('ui.aceptar')}}</button>
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
