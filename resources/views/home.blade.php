@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        @if(session('announcement.create.success'))
        <div class="alert alert-success">{{session('announcement.create.success')}}</div>
        @endif

        @forelse ($announcements as $announcement)
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="http://lorempixel.com/200/200?a{{$loop->iteration}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->body}}</p>
                    <p class="card-text">{{$announcement->category->name}}</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        @empty

        <h2>No hay anuncios a mostrar</h2>

        @endforelse

    </div>

</div>


@endsection
