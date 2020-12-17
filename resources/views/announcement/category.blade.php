@extends('layouts.app')
@section('content')

<div class="row ">
    <div class="col-12 mt-5 text-center">
        <h1>{{$category->name}}</h1>
    </div>
    @forelse ($announcements as $announcement)
    <div class="col-12 col-md-6 col-lg-4 mt-3 d-flex justify-content-center">
        <div class="card mt-4" style="width: 19rem;">
            <img src="{{$announcement->images()->first()->getUrl(300, 200)}}" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column ">
                <h5 class="card-title font-weight-bold">{{$announcement->title}}</h5>
                <p class="card-text">{{$announcement->body}}</p>
                <strong class="my-3">Categoria: <a
                        href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}"
                        class="text-decoration-none">{{$announcement->category->name}}</a></strong>
                <a href="#" class="btn btn-info my-3">Comprar</a>
                <a href="{{route('announcement.show',['id'=>$announcement->id])}}" class="btn btn-warning">{{ __('ui.descubre') }}</a>
                <p class="mt-3 mb-0 text-right">Vendedor: <a href="#"
                        class="text-decoration-none">{{$announcement->user->name}}</a></p>
                <p class="mt-3 mb-0 font-italic text-right">Publicado el
                    {{$announcement->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
    </div>

    @empty
    <div class="col-12 mt-5 text-center">
            <h2>{{__('ui.sin_productos')}}</h2>
    </div>

    @endforelse



</div>
<div class="row my-3">
    <div class="col-12 col-md-8 offset-md-2">
        {{$announcements->links()}}
    </div>
</div>



@endsection
