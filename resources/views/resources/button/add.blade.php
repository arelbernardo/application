<button class="btn btn-default btn-sm" id="{{ isset($id) ? $id : '' }}" type="button" title="{{ isset($title) ? $title : 'add'}}">
    @if(isset($hasIcon) && $hasIcon)<i class="glyphicon glyphicon-plus"></i>@else{{ $label }}@endif
</button>