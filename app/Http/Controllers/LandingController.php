<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Drug;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index(Request $request)
    {
        if ($request->search) {
            $data['drugs'] = Drug::search($request->search)->limit(4)->get();
            $data['articles'] = Article::search($request->search)->limit(4)->get();
        } else {
            $data['articles'] = Article::inRandomOrder()->limit(4)->get();
            $data['drugs'] = [];
        }

        return view('landing.index', $data);
    }

    function article()
    {
        $data['articles'] = Article::orderBy('id', 'desc')->paginate(16);

        return view('landing.article', $data);
    }

    function drugDetail(Request $request)
    {
        $data['drug'] = Drug::findOrFail($request->id);

        return view('landing.drug-detail', $data);
    }
}
