<?php 

namespace Application\Repositories;

use Application\Entities\User;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository {
    protected string $entity = User::class;

    public function getUserByUsername(string $username){
        return $this->_em->getRepository($this->entity)->findOneBy(["username" => $username]);
    }
}