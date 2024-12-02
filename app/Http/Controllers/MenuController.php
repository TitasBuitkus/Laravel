<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Funkcija, kuri grąžins 'menu' vaizdą
    public function index()
    {
        return view('menu'); // Grąžins menu.blade.php
    }
}
