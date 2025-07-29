<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Beasiswa;
use App\Models\feedback;
use App\Models\News;
use App\Models\Pencapaian;

class HomeController extends Controller
{
    public function index()
    {
        
        $highlightNews = News::latest('publish_date')->take(3)->get();
        $highlightBeasiswas = Beasiswa::latest('publish_date')->take(3)->get();
        $highlightArtikels = Artikel::latest('publish_date')->take(3)->get();
        $highlightPencapaians = Pencapaian::latest('publish_date')->take(3)->get();
        $recentFeedbacks = feedback::latest('send_at')->take(6)->get();

        return view('welcome', compact('highlightNews','highlightBeasiswas', 'highlightArtikels', 'highlightPencapaians','recentFeedbacks'));
    }
}
