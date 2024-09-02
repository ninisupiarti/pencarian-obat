<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Article;
use App\Models\Drug;
use App\Models\DrugClassification;
use App\Models\Tag;
use Illuminate\Support\Facades\Lang;

class DashboardController extends Controller
{
    function index()
    {
        $data['title'] = Lang::get('admin/dashboard.title');
        $data['administrators_count'] = Admin::count();
        $data['drugs_count'] = Drug::count();
        $data['articles_count'] = Article::count();
        $data['tags_count'] = Tag::count();
        $data['drug_classifications_count'] = DrugClassification::count();

        return view('admin.index', $data);
    }
}
