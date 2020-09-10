<div>
    @if(session()->has('message'))
    <div class="alert alert-success"> {{ session()->get('message')  }} </div>
    @elseif(session()->has('errors'))
    <div class="alert alert-danger"> {{ session()->get('errors') }} </div>
    @endif
</div>