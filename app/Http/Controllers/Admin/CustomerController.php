<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Office;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

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
        return view('panel.admins.customers.create',compact('agents'));
    }
}