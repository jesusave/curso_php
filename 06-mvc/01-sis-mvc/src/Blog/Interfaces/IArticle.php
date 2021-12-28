<?php 

namespace Blog\Interfaces;

interface IArticle {

    public function getArticle(int $id);
    public function getArticles();

}