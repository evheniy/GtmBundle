<?php

namespace Evheniy\GtmBundle\Tests\DependencyInjection;

use Evheniy\GtmBundle\DependencyInjection\GtmExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class GtmExtensionTest
 *
 * @package Evheniy\GtmBundle\Tests\DependencyInjection
 */
class GtmExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GtmExtension
     */
    private $extension;
    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     *
     */
    protected function setUp()
    {
        $this->extension = new GtmExtension();

        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
    }

    /**
     * @param ContainerBuilder $container
     * @param string           $resource
     */
    protected function loadConfiguration(ContainerBuilder $container, $resource)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/Fixtures/'));
        $loader->load($resource . '.yml');
    }

    /**
     *
     */
    public function testWithoutConfiguration()
    {
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();

        $this->assertFalse($this->container->has('gtm.id'));
    }

    /**
     *
     */
    public function testWithId()
    {
        $this->loadConfiguration($this->container, 'withId');
        $this->container->compile();

        $this->assertFalse($this->container->has('gtm.id'));
    }

    /**
     *
     */
    public function testWithOutId()
    {
        $this->loadConfiguration($this->container, 'withOutId');
        $this->container->compile();

        $this->assertTrue($this->container->has('gtm.id'));
    }
} 