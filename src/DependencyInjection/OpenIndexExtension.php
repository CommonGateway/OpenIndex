<?php

namespace CommonGateway\OpenIndex\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class OpenIndexExtension extends Extension
{


    /**
     * @param array            $configs   The config
     * @param ContainerBuilder $container The container builder
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../Resources/config'));
        $loader->load('services.yaml');

    }//end load()


}//end class
