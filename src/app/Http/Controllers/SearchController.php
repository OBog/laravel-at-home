<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public $repository;
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository=$articleRepository;
    }

    public function search(Request $request)
    {
        $result ='';

        $search = $request ->get('search');
        foreach ($this->articleRepository->findByTitle($search) as $article){
            $result.= view('articles.list_article',['article'=>$article]);
        }
        return $result;
    }

}
