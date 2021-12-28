<?php

namespace Application\Controllers;

use Application\Entities\User;
use Application\Services\Doctrine;
use Exception;

class HomeController {

    public function index(Doctrine $doctrine){
        dd($doctrine);
    }

    public function insert(Doctrine $doctrine){

        try {
            $user = new User;
            $user->setEmail('jesus@gmail.com');
            $user->setUsername('avelar');
            $user->setPassword(password_hash('password', PASSWORD_DEFAULT));

            $doctrine->em->persist($user);
            $doctrine->em->flush();
            dd("Se a creado el usuario con el id {$user->getId()} en la base de datos");
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }

    }

    public function all(Doctrine $doctrine){
        $users = $doctrine->em->getRepository(User::class)->findAll();
        foreach($users as $user){
            dd($this->formatUser($user));
        }
    }

    public function find(Doctrine $doctrine, int $id){
        $user = $doctrine->em->find(User::class, $id);
        if ($user) {
            dd($this->formatUser($user));
        } else {
            dd("No se encontrò el usuario con el id {$id} en la base de datos");
        }
    }

    public function update(Doctrine $doctrine, int $id){
        $user = $doctrine->em->find(User::class, $id);
        $user->setUsername('avenav');
        $doctrine->em->persist($user);
        $doctrine->em->flush();
        dd("Se a actualizado el usuario con el id {$user->getId()} en la base de datos");
    }

    public function remove(Doctrine $doctrine, int $id){
        $user = $doctrine->em->find(User::class, $id);
        
        if (!$user) {
            dd("No se encontrò el usuario en la base de datos");
            exit;
        }

        $doctrine->em->remove($user);
        $doctrine->em->flush();
        dd("Se a eliminado el usuario con el id {$id} en la base de datos");
    }

    public function username(Doctrine $doctrine, string $username){
        $user = $doctrine->em->getRepository(User::class)->getUserByUsername($username);
        if ($user) {
            dd($this->formatUser($user));
        } else {
            dd("No se encontrò el usuario {$username} en la base de datos");
        }
    }

    protected function formatUser(User $user) : string {
        return sprintf("%s, %s, %s, %s <br>", $user->getUsername(), $user->getPassword(), $user->getEmail(), $user->getCreated()->format("d/m/Y"));
    }
}