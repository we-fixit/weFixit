<?php

namespace FixitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FixitController extends Controller
{
    function contAction()
    {
        return $this->render("@Fixit/contact/contact.html.twig");
    }
    function forumAction()
    {
        return $this->render("@Fixit/forum/forum.html.twig");
    }
    function aboutAction()
    {
        return $this->render('@Fixit/apropos/p.html.twig');
    }

}
