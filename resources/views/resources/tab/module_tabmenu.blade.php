<ul class="module_nav-tabs nav nav-tabs">
@foreach($module_navarr[$module_navarr['active_module']]['tabs'] as $index => $tabs)
    @if($module_navarr[$module_navarr['active_module']]['active_tab'] == $index)
        <li class="active"><a href="{{$tabs['link']}}">{{$tabs['name']}}</a></li>
    @else
        <li><a href="{{$tabs['link']}}">{{$tabs['name']}}</a></li>
    @endif
@endforeach
</ul>