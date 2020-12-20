@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session('announcement.create.success'))
        <div class="alert alert-success">{{session('announcement.create.success')}}</div>
        @endif
    </div>
</div>
<div class="row pt-5 mt-5">
    <div class="col-12 px-0 d-flex flex-row justify-content-center flex-wrap align-content-center">
        @foreach ($categories as $category)
        <div class="col-4 col-xl-1 text-center pt-5 mt-5 mx-3">
            <div class="card" style="width: 8rem;">
                    <a href="{{route('announcement.category',['name'=>$category->name,'id'=>$category->id])}}" class="btn btn-primary">{{__($category->name)}}</a>
            </div>
        </div>
        @endforeach
    </div>

</div>



@endsection
