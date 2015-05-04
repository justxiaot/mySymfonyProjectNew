<?php

namespace xiaot\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class DefaultController extends Controller
{
    /**
     * @Route("/page/{page_num}", defaults={"page_num":1}, requirements={"page_num"="\d+"})
     * @Method("POST")
     * @Template()
     */
    public function indexAction($page_num)
    {
        $this->getRequest()->isXmlHttpRequest();
        //return array('name' => $page_num);
        $this->getDoctrine()->getManager()->flush();
    }
}
