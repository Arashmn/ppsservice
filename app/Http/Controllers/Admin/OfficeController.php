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

<<<<<<< HEAD
        dd($request->all());

        $token =  Str::random(8);
        $dataUSer = [
            'name' => $request->name,
            'family' => $request->family,
            'father' => $request->father,
            'code_meli' => $request->code_meli,
            'email' => $request->email,
            'sex' => $request->sex,
            'mobile_number' => $request->mobile_number,
            'birthday' => $request->birthday,
            'is_staff' => 0,
            'password' => $token
        ];

        $user = User::create($dataUSer);
        dd($user);


        $dataIns = [
            'type' => 'office',
            'subject' => $request->subject,
            'title' => $request->title,
            'management' => $request->management,
            'license_number' => $request->license_number,
            'work_history' => $request->work_history,
            'area' => $request->area,
            'apprentice' => $request->apprentice,
            'address_office' => $request->address_office,
            'phone_office' => $request->phone_office,
            'subject' => $request->type,
            'is_owner' => $request->is_owner,
            'is_parking' => $request->ins_serialNumber,
            'accept' => $request->accept,
        ];

        $user->offices()->create($dataIns);
=======
>>>>>>> 6c76bc12e993199380f6ad3af45a6cc287d1b6fe
    }

    public function show(Office $office)
    {
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