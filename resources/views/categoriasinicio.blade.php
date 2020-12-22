<code style="color: transparent;">wrapAround: true</code>
<div class="gallery js-flickity px-5"
    data-flickity-options='{"prevNextButtons": false,"pageDots": false, "wrapAround": true, "autoPlay": 1800, "pauseAutoPlayOnHover": true}'>
    @foreach ($categories as $category)
    <div class="col-4 col-sm-3 col-lg-1 mx-4">
        <div class="card" style="width: 7rem;">
            <a href="{{route('announcement.category',['name'=>$category->name,'id'=>$category->id])}}"
                class="btn btn-primary"><i class="{{($category->icons)}} fa-3x mb-3 mt-2"></i><br>{{__($category->name)}}</a>
        </div>
    </div>
    @endforeach
</div>
