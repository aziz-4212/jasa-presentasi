<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB,Auth;
use Validator;


class RoleController extends Controller
{
    public function index()
    {
        return view('admin.roles.index');
    }

    public function create()
    {
        return view('admin.roles.create');
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Role $roles)
    {
        return view('admin.roles.show');
    }

    public function edit(Role $roles)
    {
    }

    public function update(Request $request, User $roles)
    {
        //
    }

    public function destroy(Role $roles)
    {
        //
    }
}
