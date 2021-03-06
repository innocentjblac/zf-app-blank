<?php

namespace ExAssetic\Command;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use AsseticBundle\Cli\BuildCommand;

class BuildCommandFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): BuildCommand
    {
        $cmd = new BuildCommand($container->get('AsseticService'));
        return $cmd->setName('assetic:build');
    }
}
