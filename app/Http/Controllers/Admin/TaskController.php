<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Office;
use App\Models\officeStatus;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {

        $officeTimes=officeStatus::all();
        return view('panel.admins.Tasks.all',compact('officeTimes'));

    }

    public function create()
    {


        $offices = Office::query()->where('type', 'office')->get();
        $agents=office::query()->where('type','agent')->get();
        $markets=office::query()->Where('type','market')->get();
        return view('panel.admins.Tasks.create',compact('offices','agents','markets'));

    }
}