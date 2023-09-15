<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featuredNews = News::where('is_featured', 1)->take(4)->get();
       
        $newsCount = $featuredNews->count();
        
        return view('frontend.pages.index', compact('featuredNews', 'newsCount'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
