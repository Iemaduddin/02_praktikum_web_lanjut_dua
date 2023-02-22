<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Iemaduddin | 2141720055';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
