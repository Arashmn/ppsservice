<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Office;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\car_ins;

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
        $dataUSer=[
            'name'=>$request->name,
            'family'=>$request->family,
            'father'=>$request->father,
            'code_meli'=>$request->code_meli,
            'email'=>$request->email,
            'sex'=>$request->sex,
            'mobile_number'=>$request->mobile_number,
            'birthday'=>$request->birthday,
            'is_staff'=>1,
            'password'=>$token
        ];

            $user=User::create($dataUSer);

        $dataIns=[
            'user_id'=>$user->id,
            'car_name'=>$request->car_name,
            'car_year'=>$request->car_year,
            'car_tage'=>$request->car_tage,
            'car_number'=>$request->car_number,
            'car_chassis'=>$request->car_chassis,
            'ins_type'=>$request->ins_type,
            'ins_company'=>$request->ins_company,
            'ins_serialNumber'=>$request->ins_serialNumber,
            'ins_premium'=>$request->ins_premium,
            'ins_serialNumber'=>$request->ins_serialNumber,
            'ins_expire'=>$request->ins_expire,

        ];

        $user=car_ins::create($dataIns);

    }
}
