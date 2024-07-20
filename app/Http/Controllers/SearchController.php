<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tin;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Tin::where('tieu_de', 'LIKE', "%{$query}%")
                       ->orWhere('noi_dung_ngan', 'LIKE', "%{$query}%")
                       ->get();
    
        return view('search', compact('results', 'query'));
    }
    
}

