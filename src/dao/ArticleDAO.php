<?php

namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Article;

class ArticleDAO extends DAO
{
    //...

    public function editArticle(Parameter $post, $articleId)
    {
        $sql = 'UPDATE article SET title=:title, content=:content, author=:author WHERE id=:articleId';
        $this->createQuery($sql, [
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'author' => $post->get('author'),
            'articleId' => $articleId
        ]);
    }
}