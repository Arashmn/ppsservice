<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Office;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AgentRequest;
use App\Models\companyIns;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Office::where('type', 'agent')->get();
        return view('panel.admins.agents.all', compact('agents'));
    }
    public function create()
    {
        $companies=companyIns::all();
        return view('panel.admins.agents.create',compact('companies'));

    }

    public function store(AgentRequest $request)
    {

        dd($request->all());
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
            'is_staff'=>0,
            'password'=>$token
        ];

            $user=User::create($dataUSer);

        $dataIns=[
            'user_id'=>$user->id,
            'subject'=>$request->subject,
            'title'=>$request->title,
            'management'=>$request->management,
            'agent_code'=>$request->agent_code,
            'work_history'=>$request->work_history,
            'is_owner'=>$request->is_owner,
            'phone_office'=>$request->phone_office,
            'address_office'=>$request->address_office,
            'file'=>$request->file,
        ];

        $user=Office::create($dataIns);

    }
}
