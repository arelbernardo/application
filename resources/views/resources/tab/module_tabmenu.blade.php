<ul class="nav nav-tabs">
@foreach($module_navarr[$module_navarr['active_module']]['tabs'] as $index => $tabs)
    <li ><a href="#">{{$tabs['name']}}</a></li>
@endforeach
</ul>