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

        $officeTimes = officeStatus::all();
        return view('panel.admins.Tasks.all', compact('officeTimes'));
    }

    public function create()
    {
        $offices = Office::query()->where('status', 0)->get();
        return view('panel.admins.Tasks.create', compact('offices'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}