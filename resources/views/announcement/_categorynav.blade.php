<a class="dropdown-item text-white"
    href="{{route('announcement.category',['name'=>$category->name,'id'=>$category->id])}}">
        {{__($category->name)}}
</a>