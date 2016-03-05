<?php

namespace NEvil\UserBundle\Handler;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected $urlGenerator;
    protected $security;

    public function __construct(UrlGeneratorInterface $urlGenerator, AuthorizationChecker $security)
    {
        $this->urlGenerator   = $urlGenerator;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if ($this->security->isGranted('ROLE_USER'))
        {
            $response = new RedirectResponse($this->urlGenerator->generate('front_lobby'));
        }

        return $response;
    } 
}