<?php

namespace Evheniy\GtmBundle\Tests\Twig;

use Evheniy\GtmBundle\Twig\GtmExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

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
        $this->container = new ContainerBuilder();
        $this->extension = new GtmExtension($this->container);
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

    /**
     * 
     */
    public function testGetName()
    {
        $this->assertEqual($this->extension->getName(), 'gtm');
    }
} 