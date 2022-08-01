<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Admin\PermissionRequest;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('panel.admins.permissions.all', compact('permissions'));
    }

    public function create()
    {

        return view('panel.admins.permissions.create');
    }

    public function store(PermissionRequest $request)
    {

        Permission::create($request->validated());
        Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success permission add'));

        return back();
    }

    public function edit(Permission $permission)
    {
        return view('panel.admins.permissions.edit',compact('permission'));
    }

    public function update(Request $request,Permission $permission)
    {
         $date=$request->validate([

            'persian_name' => 'required|string|max:255|unique:permissions']);
            $permission->update($date);
            Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success permission add'));

            return back();
    }
}