<?php

namespace Application\Controllers;

use Application\Entities\User;
use Application\Services\Doctrine;
use Twig\Environment;

class AuthController
{
	protected Environment $twig;
	protected Doctrine $doctrine;

	public function __construct(Environment $twig, Doctrine $doctrine)
	{
		$this->twig = $twig;
		$this->doctrine = $doctrine;
	}

	public function login(){
		$erros = [];

		if(isset($_POST['submit'])){
			if (empty($_POST['email'])){
				$erros[] = "El correo es requerido";
			}

			if (empty($_POST['password'])){
				$erros[] = "La contraseña es requerido";
			}

			if (empty($erros)){
				$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
				$password = filter_input(INPUT_POST, "password");

				$user = $this->doctrine->em->getRepository(User::class)->findOneBy([
					"email" => $email,
				]);

				if ($user){
					if (password_verify($password, $user->getPassword())){
						$_SESSION['user_id'] = $user->getId();
						$_SESSION['username'] = $user->getUsername();
						$_SESSION['email'] = $email;

						redirect('home');
					}
				}

				$erros[] = "Las credenciales son incorrectas";
			}
		}

		echo $this->twig->render("auth/login.twig", [
			"errors" => $erros,
			"post" => $_POST,
		]);
	}

	public function register(){
		$erros = [];

		if(isset($_POST['submit'])){
			if (empty($_POST['username'])){
				$erros[] = "El nombre de ususario es requerido";
			}

			if (empty($_POST['email'])){
				$erros[] = "El correo es requerido";
			}

			if (empty($_POST['password'])){
				$erros[] = "La contraseña es requerido";
			}

			if (empty($erros)){
				$username = filter_input(INPUT_POST, "username");
				$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
				$password = filter_input(INPUT_POST, "password");

				$user = new User();
				$user->setEmail($email);
				$user->setUsername($username);
				$user->setPassword(password_hash($password, PASSWORD_DEFAULT));

				$this->doctrine->em->persist($user);
				$this->doctrine->em->flush();

				$_SESSION['user_id'] = $user->getId();
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;

				redirect('home');
				exit();
			}
		}
		echo $this->twig->render("auth/register.twig", [
			"errors" => $erros,
			"post" => $_POST,
		]);
	}

	public function logout(){
		if (isset($_POST['submit'])){
			session_destroy();
			redirect('login');
			exit();
		}

		dd('Hubo un error');
	}
}