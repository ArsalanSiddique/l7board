<?php

namespace App\Http\Controllers;

use app\User;
use app\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where("id", "!=", 1)->orderBy('created_at', 'desc')->paginate(10);
        return view("l7board.admin.users.users", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("l7board.admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        $user_id = $user->id;

        $result = DB::table('user_roles')->insert(
            ['user_id' => $user_id, 'role_id' => 1]
        );

        return back()->with(["message" => "User created successfully."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view("l7board.admin.users.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view("l7board.admin.users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user_id = $user->id;

        if (isset($user->profile)) {
            $result = true;
        } else {
            $result = false;
        }

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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $role = $user->role()->detach();
        $Profile = $user->profile()->delete();
        $user_record = $user->delete();

        return back()->with(["message" => "Record deleted successfully"]);
    }
}
