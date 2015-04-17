<?php

namespace Evheniy\GtmBundle\Tests\Twig;

use Evheniy\GtmBundle\Twig\GtmExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class GtmExtensionTest
 *
 * @package Evheniy\GtmBundle\Tests\Twig
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
        $this->container = new ContainerBuilder();
        $this->extension = new GtmExtension($this->container);
    }

    /**
     * Test normal config
     */
    public function testWithId()
    {
        $this->container->setParameter('gtm', array('id' => 'test'));

        $this->assertTrue($this->container->hasParameter('gtm'));
        $this->assertEquals($this->container->getParameter('gtm')['id'], 'test');
        $this->assertEquals($this->extension->getGlobals()['gtm']['id'], 'test');
    }

    /**
     * Test empty config
     */
    public function testWithOutId()
    {
        $this->assertFalse($this->container->hasParameter('gtm'));
        $this->setExpectedException(
            'Exception',
            'You have requested a non-existent parameter "gtm".'
        );
        $this->assertEmpty($this->extension->getGlobals()));
    }

    /**
     * Test getName()
     */
    public function testGetName()
    {
        $this->assertEquals($this->extension->getName(), 'gtm');
    }
} 
