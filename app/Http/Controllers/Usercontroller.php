<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issued;

class Usercontroller extends Controller
{
    public function index()
    {
        $page = "INDEX";
        $sliderContent = Issued::latest()->take(2)->select('id', 'name', 'image')->get();
        $recommendedIssues = Issued::orderBy('id', 'desc')->take(5)->get();

        $allissues = Issued::has('articles')
            ->join('articles', 'articles.issue_id', 'issued.id')
            ->groupBy('issued.id')
            ->select('issued.image', 'issued.name', 'issued.id')
            ->get();

        return view('user.index', compact('page', 'allissues', 'sliderContent', 'recommendedIssues','page'));

    }
}
