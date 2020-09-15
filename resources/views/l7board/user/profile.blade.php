@extends("l7board.admin.layout")
@section("content")


@php( $i = @$profile)
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Profile</h1>

    <!-- Add Products -->
    <div class="row mt-3">
        <div class="col-md-8 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">About Yourself</h6>
                </div>
                <div class="card-body">

                    <x-errors />

                    @if(\App\profile::where('user_id', Auth::user()->id)->exists())
                    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="phone"><b>Phone</b></label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{ $profile->phone ?? '' }}">
                        </div>

                        <div class="form-group">
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

                        <div class="form-group">
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

                        <div class="form-group">
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

                        <div class="form-group">
                            <label for="file"> <b> Upload Avatar</b></label>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="file">
                                <label class="custom-file-label" for="file">Choose file</label>
                            </div>
                        </div>

                        <input type="submit" value="Update My Profile" class="btn btn-primary mt-5 btn-block">

                    </form>
                    @else
                    <form action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="phone"><b>Phone</b></label>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{ $profile->phone ?? '' }}">
                        </div>

                        <div class="form-group">
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

                        <div class="form-group">
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

                        <div class="form-group">
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

                        <div class="form-group">
                            <label for="file"> <b> Upload Avatar</b></label>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="file">
                                <label class="custom-file-label" for="file">Choose file</label>
                            </div>
                        </div>

                        <input type="submit" value="Update My Profile" class="btn btn-primary mt-5 btn-block">

                    </form>
                    @endif
                </div>
            </div>
        </div>
        @if(\App\profile::where('user_id', Auth::user()->id)->exists())
        <div class="col-md-4 col-xs-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <div class="card-body">
                    <div style="width: 100%;">
                        <img src="{{ asset('/storage/images/'.$profile->photo) }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- /.container-fluid -->


@endsection