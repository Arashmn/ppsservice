<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\roleRequest;
use Illuminate\Support\Facades\Lang;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('panel.admins.roles.all', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('panel.admins.roles.create', compact('permissions'));
    }

    public function store(roleRequest $request)
    {
        $role = Role::create(['name'=>$request->name,'persian_name'=>$request->persian_name]);
        $role->syncPermissions($request->permissions);

        Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success role add'));

        return back();

    }

}