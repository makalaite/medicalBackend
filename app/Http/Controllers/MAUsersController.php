<?php

namespace App\Http\Controllers;

use App\Models\MARoles;
use App\Models\MAUsers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Namshi\JOSE\JWS;
use Ramsey\Uuid\Uuid;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class MAUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = JWTAuth::parseToken()->toUser();
        $users = MAUsers::all();
        $response = [
            'users' => $users,
            'user' => $user
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //frontend only
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new MAUsers();


        $user->id = Uuid::uuid4();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->role_id = $request->role_id;
        $user->password = bcrypt($request->password);
        $user->remember_token = 0;

        if ($user->save()) {
            return response()->json(['user' => $user], 201);
        } else {
            return response()->json(['error' => 'New user not save!'], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = MAUsers::find($id);
        $roles = MARoles::all();

        if ($user->save()) {
            return response()->json(['user' => $user,
                'roles' => $roles], 200);
        } else {
            return response()->json(['error' => 'User not found!'], 400);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //frontend only
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = MAUsers::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->position = $request->position;
        $user->role_id = $request->role_id;
        if ($user->save()) {
            return response()->json(['user' => $user], 200);
        } else {
            return response()->json(['error' => 'Not update'], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = MAUsers::where('id', $id)->delete();

        return response()->json(['success' => $user], 200);
    }

    public function signin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials!'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }
        return response()->json(['token' => $token], 200);

    }
}
