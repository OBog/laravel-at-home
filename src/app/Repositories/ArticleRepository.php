<?php
namespace App\Repositories;

class ArticleRepository
{
    public function all()
    {
        return [
            ['id'=>1,'title'=>'Title1','content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            ['id'=>2,'title'=>'Title2','content'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'],
            ['id'=>3,'title'=>'Title3','content'=>'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'],
            ['id'=>4,'title'=>'Title3','content'=>'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?']
        ];
    }

    public function find($filter='id',$val)
    {
        foreach ($this->all() as $article) {
            if ($article[$filter] == $val) {
                return $article;
            }
        }
        return null;
    }

    public function findByTitle($val)
    {
        $res=[];

        foreach ($this->all() as $article) {
            $pos = strpos(strtolower($article['title']), strtolower($val));
            if ($pos !== false) {
                $res[] = $article;
            }

        }
        return $res;
    }


}
