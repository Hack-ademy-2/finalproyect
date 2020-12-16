@extends('layouts.app')
@section('content')

<div class="jumbotron mt-3 pb-3 col-12 col-md-8 offset-md-2">
    <h1 class="display-4">{{$announcement->title}}</h1>
    <p class="lead">{{ __('ui.precio') }}: {{$announcement->price}}€</p>
    <hr class="my-4">
    @include('announcement._announcement_carousel')
    <p class="card-text my-5">{{$announcement->body}}</p>
    <p><strong> {{ __('ui.categoria') }} <a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}" class="text-decoration-none">{{$announcement->category->name}}</a></strong>
    <p><a href="#" class="btn btn-info mt-3">{{ __('ui.comprar') }}</a></p>
    <p><a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}" class="btn btn-warning">Comparar con otros: {{$announcement->category->name}}</a></p>
    <p><a href="{{route('announcement.formcontact')}}" class="btn btn-light">Contactar al vendedor: {{$announcement->user->name}}</a></p>
    <p class="mt-3 mb-0 font-italic text-right">{{ __('ui.publicado') }} {{$announcement->created_at->format('d/m/Y')}}
    </p>
</div>
@endsection
