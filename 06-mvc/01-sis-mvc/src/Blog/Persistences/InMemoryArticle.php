<?php

namespace Blog\Persistences;

use Blog\Interfaces\IArticle;
use Blog\Models\Article;

class InMemoryArticle implements IArticle {

    protected array $articles;

    public function __construct()
    {
        $this->articles = [
            1 => new Article(1, "Artículo 01", "Nuevo contenido artículo 01"),
            2 => new Article(2, "Artículo 02", "Nuevo contenido artículo 02"),
        ];
    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function getArticle(int $id)
    {
        return $this->articles[$id];
    }
}
