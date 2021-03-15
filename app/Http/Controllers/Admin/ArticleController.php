<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('user')->latest()->paginate(25);

        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'mimes:jpg,jpeg,png',
            'content' => 'required',
        ]);

        if($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->extension();
            $imgName = Str::slug($request->title . '-' . time() . '.' . $extension);
            $file->storeAs('artikel', $imgName, 'public');
        } else {
            $imgName = '';
        }

        $article = Article::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'picture' => $imgName,
            'content' => $request->content,
        ]);

        session()->flash('success', 'Article was created successfully');
        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'mimes:jpg,jpeg,png',
            'content' => 'required',
        ]);

        $oldArticle = Article::findOrFail($id);

        if($request->hasFile('picture')) {
            Storage::delete('public/artikel/' . $oldArticle->picture);
            $file = $request->file('picture');
            $extension = $file->extension();
            $imgName = Str::slug($request->title . '-' . time() . '.' . $extension);
            $file->storeAs('artikel', $imgName, 'public');
        } else {
            $imgName = $oldArticle->picture;
        }

        $oldArticle->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'picture' => $imgName,
            'content' => $request->content,
        ]);

        session()->flash('success', 'Article was edited successfully');
        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        Storage::delete('public/artikel' . $article->picture);
        $article->delete();

        session()->flash('success', 'Article was deleted successfully');
        return redirect()->route('admin.article.index');
    }
}
