<?php

namespace App\Http\Controllers\Admin;

use App\Models\Office;
use App\Models\companyIns;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MarketerRequest;
use App\Http\Requests\Admin\MarketetRequest;

class MarketerController extends Controller
{
    public function index()
    {
        $marketers = Office::where('type', 'marketer')->get();
        return view('panel.admins.marketers.all', compact('marketers'));
    }

    public function create()
    {
        $agents=office::query()->where('type','agent')->get();
        $companies=companyIns::all();
        return view('panel.admins.marketers.create',compact('agents','companies'));
    }

    public function store(MarketerRequest $request)
    {
        dd($request->all());
    }
}