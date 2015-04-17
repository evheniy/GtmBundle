<?php

namespace Evheniy\GtmBundle\Tests\DependencyInjection;

use Evheniy\GtmBundle\DependencyInjection\Configuration;
use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;

/**
 * Class ConfigurationTest
 *
 * @package Evheniy\GtmBundle\Tests\DependencyInjection
 */
class ConfigurationTest extends AbstractConfigurationTestCase
{
    /**
     * @return Configuration
     */
    protected function getConfiguration()
    {
        return new Configuration();
    }

    /**
     * Test getConfigTreeBuilder()
     */
    public function testGetConfigTreeBuilder()
    {
        $this->assertConfigurationIsInvalid(
            array(
                'id' => array()
            ),
            'gtm'
        );
        $this->assertConfigurationIsInvalid(
            array(
            ),
            'gtm'
        );
        $this->assertConfigurationIsInvalid(
            array(
                array()
            ),
            'gtm'
        );
        $this->assertConfigurationIsInvalid(
            array(
            )
        );
    }
} 