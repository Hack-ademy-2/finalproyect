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
    <div class="row pt-2">
        <div class="col-6 col-md-3 d-flex justify-content-center">
            <div style="width: 22rem;">
                <div class="card-body cardland">
                    <p class="text-center"><i class="my-2 fas fa-adjust fa-6x myicon"></i></p>
                    <p class="mycardtext text-center">{{__('ui.plataforma')}}</p>
                    <p class="mycardtext1 text-center letrado">{{__('ui.plataformatext')}}</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 d-flex justify-content-center">
            <div style="width: 22rem;">
                <div class="card-body cardland">
                    <p class="text-center"><i class="my-2 fas fa-comments-dollar fa-6x myicon"></i></p>
                    <p class="mycardtext text-center">{{__('ui.chat')}}</p>
                    <p class="mycardtext1 text-center letrado">{{__('ui.chattext')}}</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 d-flex justify-content-center">
            <div style="width: 22rem;">
                <div class="card-body cardland">
                    <p class="text-center"><i class="my-2 fas fa-bomb fa-6x myicon"></i></p>
                    <p class="mycardtext text-center">{{__('ui.bomba')}}</p>
                    <p class="mycardtext1 text-center letrado">{{__('ui.bombatext')}}</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 d-flex justify-content-center">
            <div style="width: 22rem;">
                <div class="card-body cardland">
                    <p class="text-center"><i class="my-2 fab fa-earlybirds fa-6x myicon"></i></p>
                    <p class="mycardtext text-center">{{__('ui.club')}}</p>
                    <p class="mycardtext1 text-center letrado">{{__('ui.clubtext')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
