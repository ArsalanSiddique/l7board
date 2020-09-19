<div>
    @if(session()->has('message'))
    <div class="alert alert-success"> {{ session()->get('message')  }} </div>
    @elseif(session()->has('errors'))

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger"> {{ $error }} </div>
    @endforeach

    @endif
</div>