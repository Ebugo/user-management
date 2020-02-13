<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo 'Index';
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo 'Create';
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo 'Store';
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // echo 'Show';
        // return User::find($user);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(User $user)
    // {
    //     // echo 'Edit';
    //     // $user = User::findOrFail($user);
    //     $user->update($request->all());

    //     return response()->json($user, 200);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // echo 'Update'. " " . $id;
        // $user = User::findOrFail($user);
        $user->update($request->all());

        return response()->json($user, 200);
    }

    // protected function update(array $data)
    // {
    //     return User::update([
    //         'name' => $data['name'],
    //         'email' => $data['email']
    //     ]);
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // echo 'Destroy'. " " . $id;
        // $user = User::findOrFail($user);
        $user->delete();

        return response()->json(null, 204);
    }
}
