<div class="d-none d-lg-block d-flex justify-content-end">
    <div class="mt-3 mb-1 text-right px-3 pb-5 fixed-bottom d-flex justify-content-end"><a href="{{url()->previous()}}" class="btn btn-warning"
            style="width:53px;"><i class="fas fa-arrow-circle-left"></i></a>
    </div>
    <div class="mt-3 mb-1 text-right px-3 pb-1 fixed-bottom d-flex justify-content-end"><a href="{{route('home')}}"
            class="btn btn-info" style="width:53px"><i class="fas fa-home"></i></a>
    </div>
</div>
<div class="dropdown mt-4 pt-5 pr-3 text-right fixed-top" style="z-index: 1;">
    <button style="z-index: 0; width:53px" class="btn btn-dark" type="button" id="dropdownMenuButton"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i></button>
    <div class="dropdown-menu mydropdownmenu dropdown-menu-right" style="width:44px"
        aria-labelledby="dropdownMenuButton">
        <form action="{{route('locale',['locale'=>'es'])}}" method="POST" style="width:44px">
            @csrf
            <button type="submit" class="dropdown-item px-0 pl-3" style="border:none;background-color:transparent">
                <span class="flag-icon flag-icon-es"></span>
            </button>
        </form>
        <form action="{{route('locale',['locale'=>'en'])}}" method="POST" style="width:44px">
            @csrf
            <button type="submit" class="dropdown-item px-0 pl-3" style="border:none;background-color:transparent">
                <span class="flag-icon flag-icon-gb"></span>
            </button>
        </form>
        <form action="{{route('locale',['locale'=>'it'])}}" method="POST" style="width:44px">
            @csrf
            <button type="submit" class="dropdown-item px-0 pl-3" style="border:none;background-color:transparent">
                <span class="flag-icon flag-icon-it"></span>
            </button>
        </form>
    </div>
</div>
</div>
