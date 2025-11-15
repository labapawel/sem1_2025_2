<ul>
@foreach($menu as $item)    
    <li><a href="{{$item->url}}">{{$item->tytul}}</a></li>
@endforeach    
</ul>