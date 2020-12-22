@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-8 offset-2 my-auto">
        <div class="card my-5">
            <div class="card-header">{{ __('ui.solicitud') }} {{ __('ui.revisor') }}</div>
            <div class="card-body">
                <form action="{{route('revisor.store')}}" method="POST">
                    @csrf
                    <p><span style="color: #ffc107;">{{Auth::user()->name}} </span>{{__('ui.cuentanos')}}</p>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"
                            placeholder="{{__('ui.solicitudrevisor')}} ..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">{{__('ui.enviar')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
