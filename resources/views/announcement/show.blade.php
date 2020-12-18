@extends('layouts.app')
@section('content')

<div class="jumbotron mt-3 p-5 col-12 col-md-6 offset-md-3">
    
    <div class="col-12 justify-content-center px-0">
    @include('announcement._announcement_carousel')
    </div>
    <h1 class="display-4 mt-4">{{$announcement->title}}</h1>
    <p class="card-text my-5">{{$announcement->body}}</p>
    <hr class="mt-4">
    <p class="lead">{{ __('ui.precio') }}: {{$announcement->price}}€
    <strong class="float-right"> {{ __('ui.categoria') }} <a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}" class="text-decoration-none">{{$announcement->category->name}}</a></strong></p>
    <hr>
    <p><a href="#" class="btn btn-info mt-3">{{ __('ui.comprar') }}</a></p>
    <p><a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}" class="btn btn-warning">Comparar con otros: {{$announcement->category->name}}</a></p>
    <p><a href="mailto:{{$announcement->user->email}}" class="btn btn-light">Contactar al vendedor: {{$announcement->user->name}}</a></p>
    <p class="mt-3 mb-0 text-right">{{ __('ui.vendedor') }}: <a href="#"
                    class="text-decoration-none" style="z-index: 1">{{$announcement->user->name}}</a></p>
    <p class="mt-3 mb-0 font-italic text-right">{{ __('ui.publicado') }} {{$announcement->created_at->format('d/m/Y')}}
    </p>
    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false"></div>
    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
</div>
@endsection
