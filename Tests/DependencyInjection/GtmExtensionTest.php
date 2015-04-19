<?php

namespace Evheniy\GtmBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Evheniy\GtmBundle\DependencyInjection\GtmExtension;

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
     * Test empty config
     */
    public function testWithoutConfiguration()
    {
        $this->setExpectedException(
            'Symfony\Component\Config\Definition\Exception\InvalidConfigurationException',
            'The child node "id" at path "gtm" must be configured.'
        );

        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();

        $this->assertFalse($this->container->hasParameter('gtm'));
    }

    /**
     * Test normal config
     */
    public function testWithId()
    {
        $this->loadConfiguration($this->container, 'withId');
        $this->container->compile();
        $this->assertTrue($this->container->hasParameter('gtm'));
        $gtm = $this->container->getParameter('gtm');
        $this->assertNotEmpty($gtm['id']);
        $this->assertEquals($gtm['id'], 'test');
    }

    /**
     * Test wrong config
     */
    public function testWithOutId()
    {
        $this->setExpectedException(
            'Symfony\Component\Config\Definition\Exception\InvalidConfigurationException',
            'The child node "id" at path "gtm" must be configured.'
        );

        $this->loadConfiguration($this->container, 'withOutId');
        $this->container->compile();
        $this->assertFalse($this->container->hasParameter('gtm'));
    }
}