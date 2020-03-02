<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $roles = User::with('roleby')->orderBy('id', 'desc')->paginate(12);
        return view('admin.user.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.user.create',);
    }

    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        $role_id = DB::table('roles')->where('name',$data['role'] )->value('id');
        User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone_no' => $data['phone_no'],
            'email' => $data['email'],
            'role_id' =>  $role_id,
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('user.index')->with('success', 'User has been created successfuly!');
    }
}
