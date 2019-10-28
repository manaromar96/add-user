<?php

namespace App\Http\Controllers;

use App\UserInformation;
use Illuminate\Http\Request;

//npm audit
//npm i -f

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(UserInformation::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {

        $user = UserInformation::create($request->all());

        return response()->json($user);
    }


    public function getUsers(Request $request) {
        if ( $request->input('showdata') ) {
            return UserInformation::orderBy('name', 'desc')->get();
        }
        $columns = ['name', 'email', 'phone'];
        $length = $request->input('length');
        $column = $request->input('column');
        $search_input = $request->input('search');
        $query = UserInformation::select('name', 'email', 'phone')
            ->orderBy($columns[$column]);
        if ($search_input) {
            $query->where(function($query) use ($search_input) {
                $query->where('name', 'like', '%' . $search_input . '%')
                    ->orWhere('email', 'like', '%' . $search_input . '%')
                    ->orWhere('phone', 'like', '%' . $search_input . '%');
            });
        }
        $users = $query->paginate($length);
        return ['data' => $users];
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
