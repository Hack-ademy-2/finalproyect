@extends('layouts.app') 
@section('content')


@if(session('announcement.create.success'))
    <div class="alert alert-success">{{session('announcement.create.success')}}</div>
@endif

<h1>hola</h1>



@forelse ($announcements as $announcement)
<p>{{$announcement->title}}</p>
<p>{{$announcement->category->name}}</p>


    
@empty
<h2>No hay anuncios a mostrar</h2>
    
@endforelse


@endsection