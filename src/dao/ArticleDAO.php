<?php

namespace App\src\DAO;


class ArticleDAO
{
    public function getArticles()
    {
        $db = new DAO();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC');
        return $result;
    }

    public function getArticle($articleId)
    {
        $db = new DAO();
        $connection = $db->getConnection();
        $result = $connection->prepare('SELECT id, title, content, author, createdAt FROM article WHERE id = ?');
        $result->execute([
            $articleId
        ]);
        return $result;
    }
}