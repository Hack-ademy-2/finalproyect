<div class="col-4 mt-3">
        <div class="card mt-4" style="width: 19rem;">
            <img src="http://lorempixel.com/200/200?a" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title font-weight-bold">{{$announcement->title}}</h5>
                <p class="card-text">{{$announcement->body}}</p>
                <strong class="my-3">Categoria: <a
                        href="{{route('announcement.category',['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}"
                        class="text-decoration-none">{{$announcement->category->name}}</a></strong>
                <p class="card-text">Precio: {{$announcement->price}}€</p>
                <a href="#" class="btn btn-info my-3">Comprar</a>
                <a href="{{route('announcement.show',['id'=>$announcement->id])}}" class="btn btn-warning">Descubre
                    más!</a>
                <p class="mt-3 mb-0 text-right">Vendedor: <a href="#"
                        class="text-decoration-none">{{$announcement->user->name}}</a></p>
                <p class="mt-3 mb-0 font-italic text-right">Publicado el {{$announcement->created_at->format('d/m/Y')}}
                </p>
            </div>
        </div>
    </div>