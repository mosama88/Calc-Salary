<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function index(){
        return view('dashboard.currencies.index');
    }
}
