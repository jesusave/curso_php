<?php

namespace Application\Controllers;

use Twig\Environment;
use Application\Services\Doctrine;

class HomeController {

	public function __construct(){
		if (!isset($_SESSION['user_id'])){
			redirect('login');
		}
	}

	public function home(Environment $twig){
		echo $twig->render("home.twig", [
			"session" => $_SESSION,
		]);
	}

    public function index(Doctrine $doctrine) {
        dd($_SESSION);
    }
}
