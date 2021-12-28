<?php
namespace Blog\Controllers;

use Blog\Interfaces\IArticle;
use Twig\Environment;

class HomeController {

    protected IArticle $articleRepository;
    protected Environment $twig;

    public function __construct(IArticle $articleRepository, Environment $twig)
    {
        $this->articleRepository = $articleRepository;
        $this->twig = $twig;
    }

    public function index() {
        echo "Hola desde HomeController";
    }

    public function articles(){
        echo $this->twig->render('home.twig', [
            "articles" => $this->articleRepository->getArticles(),
        ]);
    }

    public function article(int $id){
        $article = $this->articleRepository->getArticle($id);
    }
}