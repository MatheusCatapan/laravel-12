<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();  //User::all();
        return view('admin.users.index', compact('users'));
    }
    
    public function create()
    {
        return view('admin.users.create');
    }

    // Removed duplicate store method with Request $request parameter

    public function store(StoreUserRequest $request) 
    {
        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully.');
        
    }

    public function edit (string $id)
    {
        $user = User::where('id', '=', $id)->first();
        
    }
}
