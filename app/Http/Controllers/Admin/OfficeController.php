<?php

namespace App\Http\Controllers\Admin;

use App\Models\type;
use App\Models\User;
use App\Models\Office;
use App\Models\companyIns;
use Illuminate\Support\Str;
use App\Models\officeStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\officeRequest;
use App\Http\Requests\Admin\update\updateOfficeRequest;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::where('type', 'office')->get();
        return view('panel.admins.offices.all', compact('offices'));
    }
    public function create()
    {
        $types = type::all();
        $users=User::where('is_staff',0)->get();
        return view('panel.admins.offices.create', compact('types','users'));
    }

    public function store(officeRequest $request)
    {
        Office::create($request->all());
        Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success staff office'));
        return redirect()->back();

    }

    public function show(Office $office)
    {
        dd($office);
        $officeStatus=officeStatus::where('office_id',$office->id)->get();
        return view('panel.admins.offices.show', compact('office','officeStatus'));
    }

    public function edit(Office $office)
    {
        $types=type::all();
        return view('panel.admins.offices.edit',compact('office','types'));
    }

    public function update(updateOfficeRequest $request)
    {
         dd($request->all());
    }
}
