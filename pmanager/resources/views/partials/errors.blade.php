@if(isset($errors) && count($errors) > 0)
<div class="alert alret-dismissable fade show alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alret" aria-lable="close">
        <span aria-hidden="true">&times;</span>
    </button>
    
    @foreach($errors->all as $error)
    <li>
    <strong>{!! $error !!}</strong>
    </li>
    @endforeach
    
</div>
@endif