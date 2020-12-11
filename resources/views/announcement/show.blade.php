@extends('layouts.app')
@section('content')

<div class="jumbotron mt-5 pb-3 pt-4 d-flex justify-content-center">
    <div class="col-12 px-0">
        <div style="width: 21rem;" class="float-right">
            @include ('announcement._announcement_carousel')
        </div>
        <div>
        <h1 class="display-4 mt-5">{{$announcement->title}}</h1>
        <p class="lead my-3">{{ __('ui.precio') }}: {{$announcement->price}}€</p>
        <p class="card-text mb-5">{{$announcement->body}}</p><strong class="my-5"> {{ __('ui.categoria') }} <a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}" class="text-decoration-none my-5">{{$announcement->category->name}}</a></strong>
        <hr class="my-3">
        <p><a href="#" class="btn btn-info my-3">{{ __('ui.comprar') }}</a>
            <a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}"
                class="btn btn-warning">{{ __('ui.comparar') }}: {{$announcement->category->name}}</a></p>
        <p class="mt-3 mb-0 text-right">{{ __('ui.vendedor') }}: <a href="#"
                class="text-decoration-none">{{$announcement->user->name}}</a></p>
        <p class="mt-3 mb-0 font-italic text-right">{{ __('ui.publicado') }}
            {{$announcement->created_at->format('d/m/Y')}}
        </p>
        </div>
    </div>
</div>

@endsection
