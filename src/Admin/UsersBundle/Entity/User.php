<?php
// src/tuto/UserBundle/Entity/User.php

namespace Admin\UsersBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="tuto_usera")
*/
class User extends BaseUser
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   protected $id;

   public function __construct()
   {
       parent::__construct();
       // your own logic
   }

   public function __toString()
   {
      return $this->getUsername();
   }
}