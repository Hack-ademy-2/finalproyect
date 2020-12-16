<div>
    <div class="dropdown mt-4 pt-5 pr-3 text-right fixed-top">
        <button style="width:53px;" class="btn btn-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe-americas"></i></button>
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
</div>