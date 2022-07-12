<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        return view('admin.users.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $users)
    {
        // dd("halo");
        return view('admin.users.show');
    }

    public function edit(User $users)
    {
        //
    }

    public function update(Request $request, User $users)
    {
        //
    }

    public function destroy(User $users)
    {
        //
    }
}
