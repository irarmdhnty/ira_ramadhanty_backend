<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('articles.index')
        ->with('article',$article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            
        ]);
        $title = $request->title;

        $path_name = $request->file('image');
        $name = $path_name->getClientOriginalName();
        $path_name->move('images', $name);

        $content = $request->content;

        $save = new Article;
        $save->title = $title;
        $save->image = $name;
        $save->content = $content;
        $save->save();

        return redirect('/article')->with('status','Data Has been uploaded successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, $id)
    {
        $article = Article::find($id);
        $user = User::find($id);

        return view('articles.edit')
        ->with('article', $article, 'user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);
        $title = $request->title;

        $path_name = $request->file('image');
        $name = $path_name->getClientOriginalName();
        $path_name->move('images', $name);

        $content = $request->content;

        Article::where('id',$id)->update([
            'title' => $title,
            'image' => $name,
            'content' => $content
        ]);

        return redirect('/article')->with('status','Data Has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article,$id)
    {
        $data = Article::find($id);
        $data->delete();
        return redirect('/article')->with('status','Data Has been Deleted successfully');
    }
}
