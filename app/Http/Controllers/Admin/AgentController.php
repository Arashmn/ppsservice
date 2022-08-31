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
use App\Http\Requests\Admin\AgentRequest;
use App\Http\Requests\Admin\update\agntesRequest;
use Carbon\Carbon;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Office::where('type', 'agent')->get();
        return view('panel.admins.agents.all', compact('agents'));
    }
    public function create()
    {
        $companies = companyIns::all();
        $users = User::where('is_staff', 0)->get();
        return view('panel.admins.agents.create', compact('companies', 'users'));
    }

    public function store(AgentRequest $request)
    {
        Office::create($request->all());
        Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success staff office'));
        return redirect()->back();
    }

    public function show(office $agent)
    {
        $officeStatus = officeStatus::where('office_id', $agent->id)->get();
        return view('panel.admins.agents.show', compact('agent', 'officeStatus'));
    }

    public  function  edit(office $agent)
    {
        $companies = companyIns::all();
        return view('panel.admins.agents.edit', compact('agent', 'companies'));
    }

    public function update(agntesRequest $request, office $agent)
    {

        $agent->update($request->all());
        Alert::success(__('public.sweetAlert.success.Success Title'), __('public.sweetAlert.success.Success staff office'));
        return redirect(route('agents.index'));
    }
}