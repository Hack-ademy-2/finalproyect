<div class="col-12 col-lg-4 px-0 d-flex justify-content-center">
    <div class="card mt-4 mb-5" style="width:345px">
        <div class="card-body d-flex flex-column" style="min-height:424px;">
        <div>
            <img src="{{$announcement->images()->first()->getUrl(300, 200)}}" alt="">
        </div>
            <h5 class="card-title font-weight-bold mt-3">{{$announcement->title}}</h5>
            <p class="card-text text-decoration-none" style="min-height:50px">{{substr($announcement->body, 0, 15)}} ... <a href="{{route('announcement.show',['id'=>$announcement->id])}}">Seguir leyendo</a></p>
            <p class="card-text">{{ __('ui.precio') }}: {{$announcement->price}}€</p>
            <a href="{{route('announcement.show',['id'=>$announcement->id])}}"
                class="btn btn-secundary-color" style="z-index: 1">{{ __('ui.descubre') }}</a>
        </div>
    </div>
</div>
