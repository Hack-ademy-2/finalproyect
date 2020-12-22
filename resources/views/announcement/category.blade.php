@extends('layouts.app')
@section('content')

<div class="row align-content-center mt-5 pt-5">
    <div class="col-12 mt-5 text-center">
        <h2 class="letrado text-white">{{__($category->name)}}</h2>
    </div>
    @forelse ($announcements as $announcement)
    <div class="col-12 col-md-6 col-xl-3 px-0 d-flex justify-content-center">
        <div class="card mt-4 mb-5" style="width:345px">
            <div class="card-body d-flex flex-column" style="min-height:424px;">
                <div>
                    <img src="{{$announcement->images()->first()->getUrl(300, 200)}}" alt="">
                </div>
                <h5 class="card-title font-weight-bold mt-3">{{$announcement->title}}</h5>
                <p class="card-text text-decoration-none" style="min-height:50px">{{substr($announcement->body, 0, 15)}}
                    ... <a href="{{route('announcement.show',['id'=>$announcement->id])}}">{{ __('ui.sigueleyendo') }}</a></p>
                <p class="card-text">{{ __('ui.precio') }}: {{$announcement->price}}€</p>
                <a href="{{route('announcement.show',['id'=>$announcement->id])}}" class="btn btn-secundary-color"
                    style="z-index: 1">{{ __('ui.descubre') }}</a>
            </div>
        </div>
    </div>


    @empty
    <div class="col-12 mt-5 text-center">
        <h1 class="letrado text-white">{{__('ui.sin_productos')}} !</h1>
        <h1 class="letrado text-white"><a class="letrado text-decoration-none" href="{{route('home')}}">{{__('ui.inicio')}}</a></h1>
    </div>

    @endforelse
</div>

<div class="row my-3">
    <div class="col-12 col-md-8 offset-md-2">
        {{$announcements->links()}}
    </div>
</div>



@endsection
