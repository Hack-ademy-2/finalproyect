@extends('layouts.app')
@section('content')

<div class='container'>

    @if($announcement)
    <div class='row my-4 mb-5'>

        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                {{ __('ui.anuncio')}} #{{$announcement->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{ __('ui.usuario')}}</h3>
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
                            <h3>{{ __('ui.titulo')}}</h3>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{ __('ui.descripcion')}}</h3>
                        </div>
                        <div class="col-md-9">
                            {{$announcement->body}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{ __('ui.imagenes')}}</h3>
                        </div>
                        <div class="col-md-10">
                            @foreach ($announcement->images as $image)
                            <div class="row my-5">
                                <div class="col-md-8">
                                    <p>Adult: {{$image->adult}} - Spoof: {{$image->spoof}} </p>
                                    <p>Medical: {{$image->medical}} - Violence: {{$image->violence}}</p>
                                    <p>Racy: {{$image->racy}}</p>
                                    <p>Labels:</p>
                                    <ul>
                                        @if($image->labels)
                                            @foreach ($image->labels as $label)
                                            <li>{{$label}}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                    <!-- ID: {{$image->id}} <br> URL:
                                    {{Storage::url($image->file)}} <br> -->
                                </div>
                                <div class="col-md-4">
                                    <img src="{{$image->getUrl(300, 150)}}" class="rounded" alt="">
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
        <div class="col-md-6">
            <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">{{ __('ui.rechazar')}}</button>
            </form>
        </div>
        <div class="col-md-6 text-right">
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
