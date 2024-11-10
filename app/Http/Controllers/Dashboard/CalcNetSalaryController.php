<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\CalcNetSalary;
use App\Http\Controllers\Controller;

class calcNetSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CalcNetSalary::select("*")->orderBy('id','DESC')->get();
        return view('dashboard.calcNetSalaries.index',compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $other['currencies'] = Currency::get();
        return view('dashboard.calcNetSalaries.create',['other'=>$other]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}