<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/12
 * Time: 21:02
 */

namespace xiaot\webBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package xiaot\webBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name='user')
 */
class User {


    protected $id;
    protected $username;
    protected $password;
}