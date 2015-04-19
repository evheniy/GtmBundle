<?php

namespace Evheniy\GtmBundle\DependencyInjection;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Evheniy\GtmBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('gtm');
        $rootNode
            ->children()
                ->scalarNode('id')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}