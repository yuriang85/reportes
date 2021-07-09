<?php

namespace ContainerBA6cjLx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateSchemaListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'DH\Auditor\Provider\Doctrine\Persistence\Event\CreateSchemaListener' shared service.
     *
     * @return \DH\Auditor\Provider\Doctrine\Persistence\Event\CreateSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/damienharper/auditor/src/Provider/Doctrine/Persistence/Event/CreateSchemaListener.php';

        return $container->privates['DH\\Auditor\\Provider\\Doctrine\\Persistence\\Event\\CreateSchemaListener'] = new \DH\Auditor\Provider\Doctrine\Persistence\Event\CreateSchemaListener(($container->privates['DH\\Auditor\\Provider\\Doctrine\\DoctrineProvider'] ?? $container->getDoctrineProviderService()));
    }
}