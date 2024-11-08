<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CurrencyRequest;

class CurrencyController extends Controller
{
    public function index(){
        $data = Currency::orderBy('id','DESC')->get();
        return view('dashboard.currencies.index',compact('data'));
    }

    public function create(){
        return view('dashboard.currencies.create');
    }

    public function store(CurrencyRequest $request){

        $currency = new Currency();
        $currency['name'] = $request->name;
        $currency['description'] = $request->description;
        $currency['amount'] = $request->amount;

        $currency->save();
        return redirect()->route('dashboard.currencies.index')->with('success','تم أضافة العملة بنجاح');
        
    }
    }