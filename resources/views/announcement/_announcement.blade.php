<div class="col-12 col-sm-6 col-lg-4 mt-3 px-0 d-flex justify-content-center">
    <div class="card mt-4 mb-5" style="width: 18rem;">
<<<<<<< HEAD
        <div class="col-md-3">
            
                @foreach ($announcement->images as $image)
                <div class="carousel-item @if($loop->first)active @endif">
                    <img src="{{Storage::url($image->file)}}" class="card-img-top" alt="..." class="img-fluid">
                </div>
                @endforeach
            </div>
        <div class="card-body d-flex flex-column">
=======
        <div>
            @include ('announcement._announcement_carousel')
        </div>
        <div class="card-body d-flex flex-column" style="min-height:424px">
>>>>>>> 5e4db7c01b956666fa4693debc7241ca0c14a7e7
            <h5 class="card-title font-weight-bold">{{$announcement->title}}</h5>
            <p class="card-text" style="min-height:50px">{{$announcement->body}}</p>
            <strong class="my-3"> {{ __('ui.categoria') }} <a
                    href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}"
                    class="text-decoration-none">{{$announcement->category->name}}</a></strong>
            <p class="card-text">{{ __('ui.precio') }}: {{$announcement->price}}€</p>
            <a href="#" class="btn btn-info my-3" style="z-index: 1">{{ __('ui.comprar') }}</a>
            <a href="{{route('announcement.show',['id'=>$announcement->id])}}"
                class="btn btn-warning" style="z-index: 1">{{ __('ui.descubre') }}</a>
            <p class="mt-3 mb-0 text-right">{{ __('ui.vendedor') }}: <a href="#"
                    class="text-decoration-none" style="z-index: 1">{{$announcement->user->name}}</a></p>
            <p class="mt-3 mb-0 font-italic text-right">{{ __('ui.publicado') }}
                {{$announcement->created_at->format('d/m/Y')}}
            </p>
        </div>
    </div>
</div>
