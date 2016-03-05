<?php

namespace NEvil\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginController extends BaseController
{
        /**
     * Renders the login template with the given parameters. Overwrite this function in
     * an extended controller to provide additional data for the login template.
     *
     * @param array $data
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderLogin(array $data)
    {
        return $this->render('NEvilUserBundle:Security:login.html.twig', $data);
    }
}