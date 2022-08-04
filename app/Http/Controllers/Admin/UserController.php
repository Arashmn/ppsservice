<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Office;
use App\Models\car_ins;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\parentRequest;
use App\Http\Requests\Admin\update\storeUserRequest;

class UserController extends Controller
{
    public function index()
    {

        $users=User::with('roles')->where('is_staff',1)->get();
        return view('panel.admins.users.all',compact('users'));

    }


    public function create()
    {
        $roles=Role::all();
        return view('panel.admins.users.create',compact('roles'));
    }


    public function store(UserRequest $request)
    {
        $token =  Str::random(8);
        $data=$request->all();
        $data['password']=$token;
        $data['is_staff']=1;
        $user=User::create($data);

        $user->assignRole($data['roles']);

        Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success staff add'));

        return back();

    }
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('panel.admins.users.edit',compact('user','roles'));
    }

    public function update(storeUserRequest $request,User $user)
    {

        dd($request->all());

    }


    public function show(User $user)
    {

        return view('panel.admins.users.show',compact('user'));
    }


}
