<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $roles = User::with('roleBy')->orderBy('id', 'desc')->paginate(12);
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

    public function show(User $user)
    {
        $user->all();
        return view('admin.user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    public function update(User $user, UserUpdateRequest $request)
    {
        $user->all();
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        $role_id = DB::table('roles')->where('name',$data['role'] )->value('id');
        User::where('id',$user['id'])->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone_no' => $data['phone_no'],
            'email' => $data['email'],
            'role_id' =>  $role_id,
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('user.index')->with('success', 'User has been updated successfuly!');
    }

    public function delete(User $user)
    {
        return view('admin.user.delete',compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User has been deleted successfuly!');
    }
}
