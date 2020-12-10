@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h1 class="mb-0 mt-4">{{ __('ui.tituloppal') }}</h1>
    </div>

    <div class="col-12 mt-3 text-right px-3 pb-5 fixed-bottom"><a href="{{url()->previous()}}"
            class="btn btn-warning"><i class="fas fa-arrow-circle-left"></i></a>
    </div>
    <div class="col-12 mt-3 text-right px-3 pb-1 fixed-bottom"><a href="{{route('home')}}" class="btn btn-info"><i
                class="fas fa-home"></i></a>
    </div>

    <div class="col-12">
        @if(session('announcement.create.success'))
        <div class="alert alert-success">{{session('announcement.create.success')}}</div>
        @endif
    </div>
</div>
<div class="row d-flex flex-row justify-content-around">
@forelse ($announcements as $announcement)

@include('announcement._announcement')

@empty

    <div class="col-12 mt-5">
        <h2>{{ __('ui.sinanuncios') }}</h2>
    </div>
</div>

@endforelse


@endsection
