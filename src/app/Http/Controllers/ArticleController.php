<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function list()
    {
        $article = $this->articleRepository->all();
        return view('articles.list',['articles'=>$article]);
    }

    public function article($id)
    {
        if (!$article=$this->articleRepository->find('id',$id)){
           abort (404);
        }
        return view('articles.article', ['article'=>$article]);
    }

}
