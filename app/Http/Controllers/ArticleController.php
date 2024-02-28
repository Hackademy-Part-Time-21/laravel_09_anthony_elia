<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{


    public function articoli(){
        $articoli = Article::all();
        return view('articoli',compact('articoli'));
    }

    public function articolo($id){
        //$articolo = Article::where('id','=',$id)->first();
        $articolo = Article::findOrFail($id);
        return view('articolo',compact('articolo'));
    }

    public function create(){
        return view('articoli.create');
    }

    public function store(Request $request){

        //Article::create([
        //    'title'=>$request->input('title'),
        //    'content'=>$request->input('content')
        //]);

        Article::create($request->all());
    }
}
