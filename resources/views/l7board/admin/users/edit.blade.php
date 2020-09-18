@extends("l7board.admin.layout")
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update User</h1>

    <!-- Add Category -->
    <div class="row mt-3">
        <div class="col-md-8 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
                </div>
                <div class="card-body">

                    <x-errors />

                    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        @php
                        $profile = $user->profile
                        @endphp
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="name"><b>Name</b></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                            </div>

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="email"><b>Email</b></label>
                                <input type="email" name="email" id="email" class="form-control" readonly value="{{ $user->email }}">
                            </div>

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="phone"><b>Phone</b></label>
                                <input type="number" name="phone" id="phone" class="form-control" value="{{ isset($user->profile) ? $user->profile->phone : ''  }}">
                            </div>
                            @if(isset($profile))

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="country"><b>Selcet Country</b></label>
                                <select name="country" class="form-control" id="country">
                                    <option value="null">Select</option>
                                    <option value="Pakistan" {{ ($profile->country == "Pakistan") ? "selected" : "" }}>Pakistan</option>
                                    <option value="Turkey" {{ ($profile->country == "Turkey") ? "selected" : "" }}>Turky</option>
                                    <option value="China" {{ ($profile->country == "China") ? "selected" : "" }}>China</option>
                                    <option value="Malaysia" {{ ($profile->country == "Malaysia") ? "selected" : "" }}>Malaysia</option>
                                    <option value="America" {{ ($profile->country == "America") ? "selected" : "" }}>America</option>
                                    <option value="India" {{ ($profile->country == "India") ? "selected" : "" }}>India</option>
                                </select>
                            </div>

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="city"><b>Select City</b></label>
                                <select name="city" class="form-control" id="city">
                                    <option value="null">Select</option>
                                    <option value="Karachi" {{ ($profile->city == "Karachi") ? "selected" : "" }}>Karachi</option>
                                    <option value="Lahore" {{ ($profile->city == "Lahore") ? "selected" : "" }}>Lahore</option>
                                    <option value="Dilli" {{ ($profile->city == "Dilli") ? "selected" : "" }}>Dilli</option>
                                    <option value="Bejing" {{ ($profile->city == "Bejing") ? "selected" : "" }}>Bejing</option>
                                    <option value="Washington" {{ ($profile->city == "Washington") ? "selected" : "" }}>Washington</option>
                                    <option value="Istambul" {{ ($profile->city == "Istambul") ? "selected" : "" }}>Istambul</option>
                                </select>
                            </div>

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="gender"><b>Gender</b></label>

                                <div class="form-row ml-2">

                                    @if($profile->gender == "Male")
                                    @php ($male = "checked")
                                    @else
                                    @php ($female = "checked")
                                    @endif

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="male" {{ $male ?? '' }} name="gender" value="Male">
                                        <label class="custom-control-label mr-3" for="male">Male</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="female" {{ $female ?? '' }} name="gender" value="Female">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>

                            </div>
                            @else

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="country"><b>Selcet Country</b></label>
                                <select name="country" class="form-control" id="country">
                                    <option value="null">Select</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Turkey">Turky</option>
                                    <option value="China">China</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="America">America</option>
                                    <option value="India">India</option>
                                </select>
                            </div>

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="city"><b>Select City</b></label>
                                <select name="city" class="form-control" id="city">
                                    <option value="null">Select</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Dilli">Dilli</option>
                                    <option value="Bejing">Bejing</option>
                                    <option value="Washington">Washington</option>
                                    <option value="Istambul">Istambul</option>
                                </select>
                            </div>

                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="gender"><b>Gender</b></label>

                                <div class="form-row ml-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="male" name="gender" value="Male">
                                        <label class="custom-control-label mr-3" for="male">Male</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="female" name="gender" value="Female">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>

                            @endif


                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label for="file"> <b> Profile Photo</b></label>
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" id="file">
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>

                            </div>
                        </div>
                        <input type="submit" value="Update User" class="btn btn-primary mt-4 btn-block">

                    </form>
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