<a class="dropdown-item"
    href="{{route('announcement.category',['name'=>$category->name,'id'=>$category->id])}}">
        {{__($category->name)}}
</a>