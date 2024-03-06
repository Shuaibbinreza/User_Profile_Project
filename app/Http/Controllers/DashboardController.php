<?php

namespace App\Http\Controllers;
use App\Models\Addresses;
use App\Models\ProfileImg;
use App\Models\UserDobs;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserWorkType;
use App\Models\UserWT;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);
        addJavascriptFile('JS/multi.js');
        $uid = Addresses::where('user_id', \Auth::user()->id)->first();
        $pi = ProfileImg::where('user_id', \Auth::user()->id)->first();
        // $pi2 = UserWorkType::where('user_id', \Auth::user()->id);
        $posts = UserEducation::all();
        $vv = UserEducation::findOrFail(16);
        // dd($posts);
        return view('pages.dashboards.index', ['eee'=> $uid, 'vv'=> $vv]);
    }
}
