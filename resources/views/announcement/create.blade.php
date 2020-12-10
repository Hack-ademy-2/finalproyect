@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form method="POST" action="{{route('announcement.store')}}">
                        @csrf
                    <div class="form-group">
                        <label for="categories">{{ __('ui.categoria') }}</label>
                        <select class="form-control" id="categories" name="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{old('category') == $category->id ? 'selected' : ''}}>
                                {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="announcementeName">{{ __('ui.titulo') }}</label>
                        <input type="text" class="form-control" id="announcementeName" aria-describedby="nameHelp"
                            name="title" value="{{old("title")}}">
                        @error('title')
                        <small id="emailHelp" class="form-text" style="color:red;">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="announcementeName">{{ __('ui.precio') }}</label>
                        <input type="number" min="1.00" step="0.01" class="form-control" id="announcementePrice" aria-describedby="priceHelp"
                            name="price" value="{{old("price")}}">
                        @error('price')
                        <small id="emailHelp" class="form-text" style="color:red;">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="announcementeBody">{{ __('ui.descripcion') }}</label>
                        <textarea class="form-control" name="body" id="announcementeBody" cols="30"
                            rows="5">{{old("body")}}</textarea>
                        @error('body')
                        <small id="emailHelp" class="form-text" style="color:red;">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="images" class="col-md-12 col-form-label">{{ __('ui.imagenesForm') }}</label>
                        <div class="dropzone" id="drophere"></div>
                        @error('images')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('ui.subir') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
