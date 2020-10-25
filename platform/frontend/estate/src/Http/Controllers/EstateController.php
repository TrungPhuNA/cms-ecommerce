<?php

namespace Frontend\Estate\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    public function index()
    {
        return view('estate::estate.index');
    }

    public function create()
    {
        return view('estate::estate.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
