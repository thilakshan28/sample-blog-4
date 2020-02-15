<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $roles = User::with('roleby')->orderBy('id', 'desc')->paginate(12);
        return view('admin.user.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

}
