<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {

        $users=User::where('is_staff',1)->get();
        return view('panel.admins.users.all',compact('users'));

    }


    public function create()
    {
        $roles=Role::all();
        $agents=Office::where('type','agent')->get();
        return view('panel.admins.users.create',compact('agents','roles'));
    }


    public function store(UserRequest $request)
    {
        dd($request->all());
    }
}
