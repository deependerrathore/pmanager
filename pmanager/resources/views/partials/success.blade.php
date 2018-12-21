@if(session()->has('success'))
<div class="alert alret-dismissable alert-success fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-lable="close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>
    {!! session()->get('success') !!}
    </strong>
</div>
@endif