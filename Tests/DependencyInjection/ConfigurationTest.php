<?php

namespace Evheniy\GtmBundle\Tests\DependencyInjection;

use Evheniy\GtmBundle\DependencyInjection\Configuration;

/**
 * Class ConfigurationTest
 *
 * @package Evheniy\GtmBundle\Tests\DependencyInjection
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test getConfigTreeBuilder()
     */
    public function testGetConfigTreeBuilder()
    {
        $configuration = new Configuration();
        $tree = $configuration->getConfigTreeBuilder();
        $this->assertInstanceOf(
            'Symfony\Component\Config\Definition\Builder\TreeBuilder',
            $tree
        );
        $this->assertInstanceOf(
            'Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition',
            $tree->root('gtm')
        );
        $tree = $tree->buildTree();
        $this->assertEquals('gtm', $tree->getName());
        $this->assertFalse($tree->hasDefaultValue());
        $this->assertFalse($tree->isRequired());
    }
} 