<?php

namespace Evheniy\GtmBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class GtmExtension
 *
 * @package Evheniy\GtmBundle\Twig
 */
class GtmExtension extends \Twig_Extension
{
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @return array
     */
    public function getGlobals()
    {
        return array(
            'gtmId' => $this->container->getParameter('gtm')
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'gtm';
    }
}
