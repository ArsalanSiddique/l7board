<div>
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show col-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading"> Wow!</h4>

        <p>{{ session()->get('message')  }} </p>
    </div>
    @elseif(session()->has('errors'))

    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show col-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading"> Error!</h4>

        <p>{{ $error }} </p>
    </div>
    @endforeach

    @endif
</div>