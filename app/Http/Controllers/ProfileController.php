<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        $result = Profile::where('user_id', $user_id)->exists();
        if ($result === false) { 
            return view("l7board.admin.profile");
        }else {
            $profile = Profile::where('user_id', $user_id)->first();
            return view("l7board.admin.profile", compact("profile"));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $result = Profile::where('user_id', $user_id)->exists();

        if ($result === false) {
            if ($request->hasFile('photo')) {
                $rand_number = rand(100000, 999999);
                $fileName = $request->photo->getClientOriginalName();
                $unique_filename = "profile/" . ($rand_number . "_" . $fileName);
                $request->photo->storeAs("images", $unique_filename, 'public');
            } else {
                echo "File not found";
            }

            Profile::create([
                "user_id" => $user_id,
                "phone" => $request->phone,
                "country" => $request->country,
                "city" => $request->city,
                "gender" => $request->gender,
                "photo" => $unique_filename,
            ]);

            return back()->with(["message" => "Profile Created Successfully."]);
        } else {
            $user_id = Auth::id();
            $result = Profile::where('user_id', $user_id)->first();
            
            if ($request->hasFile('photo')) {

                unlink(public_path('/storage/images/' . $result->photo));

                $rand_number = rand(100000, 999999);
                $fileName = $request->photo->getClientOriginalName();
                $unique_filename = "profile/" . ($rand_number . "_" . $fileName);
                $request->photo->storeAs("images", $unique_filename, 'public');

                $result->update([
                    "user_id" => $user_id,
                    "phone" => $request->phone,
                    "country" => $request->country,
                    "city" => $request->city,
                    "gender" => $request->gender,
                    "photo" => $unique_filename,
                ]);

            } else {

                $result->update([
                    "user_id" => $user_id,
                    "phone" => $request->phone,
                    "country" => $request->country,
                    "city" => $request->city,
                    "gender" => $request->gender,
                    "photo" => $result->photo,
                ]);

            }
            return back()->with(["message" => "Profile Updated Successfully."]);
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
