@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-8 offset-2 my-auto">
        <div class="card my-5">
            <div class="card-header">{{ __('ui.solicitud') }} {{ __('ui.revisor') }}</div>
            <div class="card-body">
                <form action="{{route('revisor.store')}}" method="POST">
                    @csrf
                    <!-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('ui.nombre')}}</label>
                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Juan Carlos"
                            name="name">
                    </div> -->
                    <!-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('ui.correo')}}</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="email">
                    </div> -->
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">{{__('ui.motivo')}}</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"
                            placeholder="{{__('ui.solicitudrevisor')}}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">{{__('ui.enviar')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
