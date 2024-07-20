<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;
use App\Models\LoaiTin;

class TinController extends Controller
{
    public function index()
    {
        $categories = LoaiTin::all();
        $latestNews = Tin::orderBy('id', 'desc')->limit(5)->get();
        return view('home', compact('categories', 'latestNews'));
    }

    public function chitiet($id)
    {
        $tin = Tin::find($id);
        $categories = LoaiTin::all();
        return view('chitiet', compact('tin', 'categories'));
    }

    public function tintrongloai($idLT)
    {
        $categories = LoaiTin::all();
        $listtin = Tin::where('idLT', $idLT)->get();
        return view('tintrongloai', compact('listtin', 'categories'));
    }
}

