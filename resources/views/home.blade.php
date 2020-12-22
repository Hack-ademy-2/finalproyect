@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
    @if(session('announcement.create.success'))
        <div> <h3 class="alert alert-warning text-center">{{session('announcement.create.success')}}</h3>
        </div>
        @endif
    </div>
    <div class="col-8 offset-2">
        @if (Auth::user())
        <h1 class="letrado text-white text-center mt-5">{{ __('ui.hola')}} <span class="letrado"
                style="color: #ffc107;">{{Auth::user()->name}}
                <i class="fas fa-bolt"></i></span></h1>
        <h1 class="letrado text-white text-center">{{ __('ui.intercambio')}}</h1> 
    </div>
    @endif
    @if (!Auth::user())
    <div class="col-8 offset-2">
        <h1 class="letrado text-white text-center mt-5">{{ __('ui.intercambio')}}</h1>
    </div>
    @endif
</div>

<div class="container-fluid main-content1">
    @include('categoriasinicio')
</div>

<div class="container-fluid main-content3">
    <div class="row">
        @if(session('access.denied.revisor.only'))
        <div class="col-12 alert alert-danger mt-3 text-center">{{session('access.denied.revisor.only')}}</div>
        @endif
    </div>
    <div>
        <h1 class="col-12 text-center text-white mt-5 pb-4 letrado">{{__('ui.tituloultimas')}}</h class="text-center">
    </div>
    @include('announcementcontent')
</div>

<div class="container-fluid main-content4 pt-5">
    @include('nosotros')
</div>
@endsection
