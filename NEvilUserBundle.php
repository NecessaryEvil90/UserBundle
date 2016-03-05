<?php

namespace NEvil\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use NEvil\UserBundle\DependencyInjection\NEvilUserExtension;
class NEvilUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->registerExtension(new NEvilUserExtension());
    }
}