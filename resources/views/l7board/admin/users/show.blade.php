@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">View User</h1>

    <!-- Add Products -->
    <div class="row mt-3">
        <div class="col-md-8 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">About User</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <b class="mr-2">Name:</b> {{ $user->name }} </li>
                        <li class="list-group-item"> <b class="mr-2">Email:</b> {{ $user->email }} </li>
                        <li class="list-group-item"> <b class="mr-2">Phone:</b> {{ isset($user->profile) ? $user->profile->phone : ''  }} </li>
                        <li class="list-group-item"> <b class="mr-2">Country:</b> {{ isset($user->profile) ? $user->profile->country : ''  }} </li>
                        <li class="list-group-item"> <b class="mr-2">City:</b> {{ isset($user->profile) ? $user->profile->city : ''  }} </li>
                        <li class="list-group-item"> <b class="mr-2">Gender:</b> {{ isset($user->profile) ? $user->profile->gender : ''  }} </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Photo</h6>
                </div>
                <div class="card-body">
                    <div style="width: 100%;">
                        @if(isset($user->profile->phone))
                        <img src="{{ asset('/storage/images/'.$user->profile->photo) }}" class="img-fluid" alt="">
                        @else
                        <img src="{{ asset('/storage/images/profile/user.png') }}" class="img-fluid" alt="">
                        @endif

                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('users.edit', $user->id) }}"> <button class="btn btn-success"><i class="fa fa-pencil-alt mr-2"></i> Edit</button> </a>

                    <button class="btn btn-danger" onclick="if(confirm('Are you really want to delete this user?')) { preventDefault(); document.getElementById('delform').submit() }">
                        <i class="fas fa-trash mr-2"></i> Delete Account
                    </button>
                    <form action="{{ route('users.destroy', $user['id']) }}" method="POST" id="delform">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$user['id']}}">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->


@endsection