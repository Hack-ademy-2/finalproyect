@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if ($errors->any())
            <div class="alert alert-danger px-0 py-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="card">
                <div class="card-header">
                    <form method="POST" action="{{route('announcement.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="categories">Categorias</label>
                            <select class="custom-select" id="categories" name="category[]" multiple>
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="announcementeName">Titulo</label>
                            <input type="text" class="form-control" id="announcementeName" aria-describedby="emailHelp" name="title">
                        </div>
                        <div class="form-group">
                            <label for="announcementeBody">Anuncio</label>
                            <textarea class="form-control" name="body" id="announcementeBody" cols="30"
                                rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection