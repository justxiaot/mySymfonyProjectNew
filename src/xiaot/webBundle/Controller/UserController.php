<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/4/8
 * Time: 16:46
 */

namespace xiaot\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{
    /**
     * @Route("user/login")
     * @Template()
     */
    public function loginAction($name)
    {
        return array('name' => $name);
    }
}