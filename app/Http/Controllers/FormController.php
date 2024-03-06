<?php

namespace App\Http\Controllers;

use App\Models\UserEducation;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $vv = UserEducation::findOrFail(16);
        // dd($vv->education_title);
        return view('pages.dashboards.user1', ['vv' => $vv]);
    }
}
