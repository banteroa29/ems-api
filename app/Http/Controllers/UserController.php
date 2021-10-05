<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        try {
            $user = new User();
            $user->name = request('name');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));
            
            $user->save();
            return new UserResource($user);
        } catch (Exception $ex) {
            return response()->json([
                'error' => $ex->getMessage()
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
           'name' => 'required|max:255',
           'email' => 'required|unique:users',
           'password' => 'required'
        ]);
        
        try {
            $user = User::findOrFail($id);
            $user->name = request('name');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));
            $user->save();
            return new UserResource($user);
        } catch (Exception $ex) {
            return response()->json([
                'error' => $ex->getMessage()
            ], 404);
        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        return User::destroy($id);
    }
}
