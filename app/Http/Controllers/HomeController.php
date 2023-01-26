<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    

    public function index()
    {
        return view('index');

    }

    public function lihatpengaduan()
    {
        $user = User::all();
        return view('layouts/lihatpengaduan')->with('data', $user);
    }

}
