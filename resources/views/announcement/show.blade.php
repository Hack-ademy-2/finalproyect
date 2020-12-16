@extends('layouts.app')
@section('content')

<div class="jumbotron mt-3">
    <h1 class="display-4">{{$announcement->title}}</h1>
    <p class="lead">{{ __('ui.precio') }}: {{$announcement->price}}€</p>
    <hr class="my-4">
    <div class="carousel-inner">
        @foreach ($announcement->images as $image)
        <div class="carousel-item active">
            <img src="{{Storage::url($image->file)}}" class="d-block w-100" style="max-width:446px; max-height:455px;" alt="...">
        </div>
        @endforeach
    </div>
    <p class="card-text my-5">{{$announcement->body}}</p><strong class="my-3"> {{ __('ui.categoria') }} <a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}" class="text-decoration-none">{{$announcement->category->name}}</a></strong>
    <p><a href="#" class="btn btn-info my-3">{{ __('ui.comprar') }}</a>
    <a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}" class="btn btn-warning">Comparar con otros: {{$announcement->category->name}}</a></p>
    <p class="mt-3 mb-0 text-right">{{ __('ui.vendedor') }}: <a href="#"
            class="text-decoration-none">{{$announcement->user->name}}</a></p>
    <p class="mt-3 mb-0 font-italic text-right">{{ __('ui.publicado') }} {{$announcement->created_at->format('d/m/Y')}}
    </p>
</div>

@endsection
