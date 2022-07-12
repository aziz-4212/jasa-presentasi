<?php

namespace App\Http\Controllers;

use App\Models\MasterCategories;
use Illuminate\Http\Request;

class MasterCategoriesController extends Controller
{

    public function index()
    {
        // if ($request->ajax()) 
        // {
        //     $data = MasterCategories::latest()->get();
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
            
        //             $action = '<a class="btn btn-info" id="show-user" data-toggle="modal" data-id='.$row->id.'>Show</a>
        //             <a class="btn btn-success" id="edit-user" data-toggle="modal" data-id='.$row->id.'>Edit </a>
        //             <meta name="csrf-token" content="{{ csrf_token() }}">
        //             <a id="delete-user" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';
                
        //             return $action;
            
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }
        return view('admin.master-category.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MasterCategories $masterCategories)
    {
        //
    }

    public function edit(MasterCategories $masterCategories)
    {
        //
    }

    public function update(Request $request, MasterCategories $masterCategories)
    {
        //
    }

    public function destroy(MasterCategories $masterCategories)
    {
        //
    }
}
