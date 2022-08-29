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

class CustomerController extends Controller
{

    public function index()
    {

        $customers=User::where('is_staff',0)->get();


        return view('panel.admins.customers.all',compact('customers'));

    }
    public function create()
    {
        $agents=Office::where('type','agent')->get();
        $roles=Role::all();
        return view('panel.admins.customers.create',compact('agents','roles'));
    }

    public function store(UserRequest $request)
    {

        $token =  Str::random(8);
        $data=$request->all();
        $data['password']=$token;
        $data['is_staff']=0;
        $user=User::create($data);

        Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success staff add'));

        return back();
    }
}