<?php

namespace App\Http\Controllers;


use Auth;
use App\Article;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Carbon\Carbon; 




class ArticlesController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth', ['except' => ['index','show']]);
   }
    
   public function index()
   {

   	$articles = Article::latest('published_at')->published()->get();
         $latest = Article::latest()->first();

         $tags = Tag::all();

   		return view('articles.index', compact('articles', 'latest', 'tags'));
   }

   public function show(Article $article)
   {

   		return view('articles.show', compact('article'));
   }

   public function create()
   {  
        
         $tags = Tag::lists('name', 'id');

   		return view('articles.create', compact('tags'));
   }
   
   public function store(ArticleRequest $request)
   {

      $this->createArticle($request);



    session()->flash('flash_message', 'Your Review has been posted!');
      

      return redirect('articles');
   }

   public function edit(Article $article)
   {

      $tags = Tag::lists('name', 'id');

      return view('articles.edit',compact('article', 'tags'));

   }

   public function update(ArticleRequest $request, Article $article)
   {
      
      $article->update($request->all());

      $this->syncTags($article, $request->input('tag_list'));
      
      return redirect('articles');
   }

   private function syncTags(Article $article, array $tags)
   {
      $article->tags()->sync($tags);
   }

   private function createArticle(ArticleRequest $request)
   {
      $article = Auth::user()->articles()->create($request->all());

      $this->syncTags($article, $request->input('tag_list'));

      return $article;
   }
}
