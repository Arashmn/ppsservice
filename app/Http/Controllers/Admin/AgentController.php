<?php

namespace App\Http\Controllers\Admin;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function index()
    {
        $agents=Office::where('type','agent')->get();
        return view('panel.admins.agents.all',compact('agents'));
    }
}