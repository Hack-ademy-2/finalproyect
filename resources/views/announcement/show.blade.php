@extends('layouts.app')
@section('content')
<div class="row justify-content-center align-content-center">
    <div class="jumbotron mt-3 pt-5 px-5 pb-3 col-9 col-md-8 col-xl-6" style="max-width:876px">
        <div class="col-12 justify-content-center px-0">
            @include('announcement._announcement_carousel')
        </div>
        <h1 class="display-4 mt-4">{{$announcement->title}}</h1>
        <p class="card-text my-5">{{$announcement->body}}</p>
        <hr class="mt-4">
        <div class="row">
            <div class="col-12">
                <p>{{ __('ui.precio') }}: {{$announcement->price}}€
            </div>
            <div class="col-12">
                <strong class="float-right"> {{ __('ui.categoria') }} <a
                        href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}"
                        class="text-decoration-none">{{__($announcement->category->name)}}</a></strong></p>
            </div>
        </div>
        <hr>
        <p><a href="mailto:{{$announcement->user->email}}" class="btn btn-info">{{ __('ui.contactar') }}:
                {{$announcement->user->name}}</a></p>
        <p><a href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}"
                class="btn btn-warning mb-4">{{ __('ui.comparar') }}: {{__($announcement->category->name)}}</a></p>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width=""
            data-layout="button" data-action="like" data-size="large" data-share="false"></div>
        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"
            data-size="large"><a target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"
                class="fb-xfbml-parse-ignore">Share</a></div>
        <p class="mt-5 mb-0 text-right">{{ __('ui.vendedor') }}: <a href="#" class="text-decoration-none"
                style="z-index: 1">{{$announcement->user->name}}</a></p>
        <p class="font-italic text-right">{{ __('ui.publicado') }}
            {{$announcement->created_at->format('d/m/Y')}}
        </p>

    </div>
</div>
@endsection
