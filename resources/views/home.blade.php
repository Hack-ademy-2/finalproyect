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
    <div class="col-4 mt-3">
        <div class="card mt-4" style="width: 19rem;">
            <img src="http://lorempixel.com/200/200?a{{$loop->iteration}}" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title font-weight-bold">{{$announcement->title}}</h5>
                <p class="card-text">{{$announcement->body}}</p>
                <strong class="my-3">Categoria: <a
                        href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}"
                        class="text-decoration-none">{{$announcement->category->name}}</a></strong>
                <a href="#" class="btn btn-info my-3">Comprar</a>
                <a href="{{route('announcement.show',['id'=>$announcement->id])}}" class="btn btn-warning">Descubre
                    más!</a>
                <p class="mt-3 mb-0 text-right">Vendedor: <a href="#"
                        class="text-decoration-none">{{$announcement->user->name}}</a></p>
                <p class="mt-3 mb-0 font-italic text-right">Publicado el {{$announcement->created_at->format('d/m/Y')}}
                </p>
            </div>
        </div>
    </div>

    @empty
    <div class="row">
        <div class="col-12 mt-5">
            <h2>No hay anuncios para mostrar! Regresa más tarde</h2>
        </div>
    </div>

    @endforelse

</div>


@endsection
