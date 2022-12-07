<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('welcome')
        ->with('article',$article);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
