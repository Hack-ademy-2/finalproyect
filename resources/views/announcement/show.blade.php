@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="jumbotron mt-5 py-4 d-flex flex-column justify-content-center">
            <h1 class="display-4">{{$announcements->title}}</h1>
            <img src="http://lorempixel.com/200/200" alt="{{$announcements->title}}">
            <p class="lead mt-3"><strong class="mt-3"><a href="{{route('announcement.category',['name'=>$announcements->category->name,'id'=>$announcements->category->id])}}" class="text-decoration-none">{{$announcements->category->name}}</a></strong></p>
            <p>{{$announcements->body}}</p>
            <p class="mt-3 mb-0 text-right">Vendedor: <a href="#" class="text-decoration-none">{{$announcements->user->name}}</a></p>
            <p class="mt-3 mb-0 font-italic text-right">Publicado el {{$announcements->created_at->format('d/m/Y')}}</p>
            <a class="btn btn-primary btn-lg float-right mt-3" href="#" role="button">Comprar</a>
        </div>
    </div>

@endsection
