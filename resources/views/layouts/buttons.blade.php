<div class="box-lang mr-2 pr-1">
    <button class="btn btn-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false"><i id="giratorio" class="fas fa-globe-americas fa-2x"></i></button>
    <div class="box-idiomas pr-1" style="width:55px" aria-labelledby="dropdownMenuButton">
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
