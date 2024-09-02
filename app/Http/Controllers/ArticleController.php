<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;

class ArticleController extends Controller
{
    function index()
    {
        $data['title'] = Lang::get('admin/article.title');
        $data['articles'] = Article::orderBy('id', 'desc')->get();

        return view('admin.artikel.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = Lang::get('admin/article.title');
        $data['article'] = Article::where('id', Crypt::decrypt($request->id))->firstOrFail();

        return view('admin.artikel.detail', $data);
    }

    function create()
    {
        $data['title'] = Lang::get('admin/article.title');
        $data['tags'] = Tag::all();

        return view('admin.artikel.form', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = Lang::get('admin/article.title');
        $data['article'] = Article::where('id', Crypt::decrypt($request->id))->firstOrFail();
        $data['tags'] = Tag::all();

        return view('admin.artikel.form', $data);
    }

    function check(Request $request)
    {
        $data = Article::findOrFail($request->id);
        $created_at = Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss');
        $updated_at = Carbon::parse($data->updated_at)->isoFormat('dddd, D MMMM Y | HH:mm:ss');

        return response()->json([
            'data' => $data,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ]);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|unique:articles,title,' . $request->id . ',id',
                'tag' => 'required',
                'content' => 'required',
            ],
            (App::getLocale() == 'id') ? [
                'title.required' => 'Kolom Judul Wajib Diisi.',
                'title.unique' => 'Judul Sudah Ada Sebelumnya.',
                'tag.required' => 'Kolom Tagar Wajib Diisi.',
                'content.required' => 'Kolom Konten Wajib Diisi.',
            ] : [
                'title.required' => 'The Title Field is Required',
                'title.unique' => 'Title Has Already Been Taken.',
                'tag.required' => 'The Tag Field is Required',
                'content.required' => 'The Content Field is Required',
            ],
        );

        $image = $request->hidden_image;
        if ($request->file('image')) {
            $path = 'public/article-images/';
            $file = $request->file('image');
            $file_name = $request->title . '-[' . time() . '].' . $file->getClientOriginalExtension();
            $file->storeAs($path, $file_name);
            $image = "storage/article-images/" . $file_name;
        }

        $data = Article::updateOrCreate([
            'id' => $request->id,
        ], [
            'image' => $image,
            'title' => $request->title,
            'tags' => array_map('intval', $request->tag),
            'source_url' => $request->source_url,
            'content' => $request->content,
        ]);

        if ($request->id == $data->id) {
            return  redirect('articles')->with([
                'message' => __('responses.data.updated.message') . "\t" . __('responses.data.updated.caption'),
            ]);
        } else {
            return redirect('articles')->with([
                'message' => __('responses.data.created.message') . "\t" . __('responses.data.created.caption'),
            ]);
        }
    }

    function destroy(Request $request)
    {
        $data = Article::findOrFail($request->id);
        $data->delete();

        return back()->withErrors([
            'message' => __('responses.data.destroyed.message') . "\t" . __('responses.data.destroyed.caption'),
        ]);
    }
}
