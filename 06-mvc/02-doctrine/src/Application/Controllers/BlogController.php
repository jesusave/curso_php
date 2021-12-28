<?php

namespace Application\Controllers;

use Application\Entities\Post;
use Application\Entities\User;
use Application\Services\Doctrine;
use Exception;

class BlogController
{
	public function index(){
		dd('Index');
	}

	public function insertPost(Doctrine $doctrine, int $user_id){
		try {
			$user = $doctrine->em->find(User::class, $user_id);

			$post = new Post();
			$post->setUser($user);
			$post->setTitle('Post 01');
			$post->setBody('Contenido del post 01');
			$doctrine->em->persist($post);
			$doctrine->em->flush();

			dd("Nuevo post vinculado al usuario {$user_id}");
		} catch (Exception $exception) {
			dd($exception->getMessage());
		}
	}

	public function userPost(Doctrine $doctrine, int $user_id){
		$user = $doctrine->em->find(User::class, $user_id);
		if ($user){
			foreach ($user->getPosts() as $post){
				dd($post);
			}
		}
	}
}