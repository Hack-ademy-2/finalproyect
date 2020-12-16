@extends('layouts.app')
@section('content')
<<<<<<< HEAD
<div class="row mx-3">
=======
<div class="col-12 text-center">
    <h1 class="mb-0 mt-5">{{ __('ui.tituloppal') }}</h1>
</div>
<div class="row">
>>>>>>> eb057a27f2b5ffaeda01c041a4932ddf59a50627
    <div class="col-12">
        @if(session('announcement.create.success'))
        <div class="alert alert-success">{{session('announcement.create.success')}}</div>
        @endif
    </div>
</div>

<div class="row">
@forelse ($announcements as $announcement)

@include('announcement._announcement')

@empty

    <div class="col-12 mt-5 text-center py-0">
        <h2>{{ __('ui.sinanuncios') }}</h2>
    </div>

    
</div>

@endforelse


@endsection
