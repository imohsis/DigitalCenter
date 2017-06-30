<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;
use DB;

class ArticlesController extends Controller

  {             
    public function index()
    {
       /* $articles = DB::table('articles')->get();
        return $articles;*/
       // $articles = Article::all(); The first one i used
        $articles = Article::paginate(10);
        return view('articles.index', compact('articles'));
    }

    
    public function create()
    {
          return view('articles.create');
    }

    public function store(Request $request)
    {
          
        /*$article = new Article
        $article->user_id = Auth::user()->id;
        $article->content = $request->content;
        $article->live = (boolean)$request->live;
        $article->post_on = $request->post_on;
        $article->save();*/
        Article::create($request->all());
        return redirect('/articles');
    }

    
    public function show($id)
    {
        $article = Article::findOrfail($id);
        return view( 'articles.show', compact('article'));
    }

   
    public function edit($id)
    {
        $article = Article::findOrfail($id);
        return view( 'articles.edit', compact('article'));
    }

   
    public function update(Request $request, $id)
    {
        $article = Article::findOrfail($id);
        if (!isset($request->live)) 
            $article->update(array_merge($request->all(),['live' => false]));

         else
             $article->update($request->all());   
         return redirect('/articles');
        }
    

 
    public function destroy($id)
    {
       // $article = Article::findOrfail($id);
       // $article ->delete(); The first method
       
       Article::destroy($id);

        return redirect('/articles');
    }
}
