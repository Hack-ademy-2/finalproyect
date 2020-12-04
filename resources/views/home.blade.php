@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12 mt-3 text-right px-3 pb-5 fixed-bottom"><a href="{{url()->previous()}}"
            class="btn btn-warning"><i class="fas fa-arrow-circle-left"></i></a></div>
    <div class="col-12 mt-3 text-right px-3 pb-1 fixed-bottom"><a href="{{route('home')}}" class="btn btn-info"><i
                class="fas fa-home"></i></a></div>

    <div class="col-12">
        @if(session('announcement.create.success'))
        <div class="alert alert-success">{{session('announcement.create.success')}}</div>
        @endif
    </div>
    @forelse ($announcements as $announcement)
    
    @include('announcement._announcement')

    @empty
    <div class="row">
        <div class="col-12 mt-5">
            <h2>No hay anuncios para mostrar! Regresa más tarde</h2>
        </div>
    </div>

    @endforelse

</div>


@endsection
