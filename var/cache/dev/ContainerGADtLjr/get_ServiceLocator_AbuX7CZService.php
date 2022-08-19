<?php

namespace ContainerGADtLjr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AbuX7CZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AbuX7CZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AbuX7CZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.AbuX7CZ.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.AbuX7CZ": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'hasher' => '?',
            'manager' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
