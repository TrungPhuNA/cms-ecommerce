<?php

namespace Frontend\Estate\Http\Controllers;

use App\Http\Controllers\Controller;

class EstateDashboardController extends Controller
{
    public function index()
    {
        return view('estate::dashboard.index');
    }
}
