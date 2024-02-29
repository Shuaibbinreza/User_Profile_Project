<?php

namespace App\Http\Controllers;
use App\Models\Addresses;
use App\Models\ProfileImg;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        addJavascriptFile('assets/js/multi.js');
        $uid = Addresses::where('user_id', \Auth::user()->id)->first();
        $pi = ProfileImg::where('user_id', \Auth::user()->id)->first();
        return view('pages.dashboards.index', ['address'=> $uid, 'image'=> $pi]);
    }
}
