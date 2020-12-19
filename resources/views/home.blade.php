@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        @if(session('announcement.create.success'))
        <div class="alert alert-success">{{session('announcement.create.success')}}</div>
        @endif
    </div>
</div>

@endsection
