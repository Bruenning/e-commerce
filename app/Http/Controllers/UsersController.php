<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Users::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Users $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $user)
    {
        //
    }
}
