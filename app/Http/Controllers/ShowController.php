<?php

namespace App\Http\Controllers;

class ShowController extends Controller
{
    public function index()
    {
        return view('market');
    }

    public function showCreateAction()
    {
        return view('createMarket');
    }
}
