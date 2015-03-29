GtmBundle
=================

This bundle provides Google Tag Manager in Symfony2

Documentation
-------------

You need to set GTM ID:

    gtm: GTM-xxx

Installation
------------

    $ composer require evheniy/gtm-bundle "1.*"

    Or add to composer.json

    "evheniy/gtm-bundle": "1.*"


    AppKernel:
        public function registerBundles()
            {
                $bundles = array(
                    ...
                    new Evheniy\GtmBundle\GtmBundle(),
                );
                ...


    config.yml:
        #GtmBundle
        gtm: GTM-xxx


    {% include "GtmBundle:Gtm:gtm.html.twig" %}

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE

[MakeDev.org][1]

[Google Tag Manager][2]

[1]:  http://makedev.org/articles/symfony/bundles/gtm_bundle.html
[2]:  http://www.google.com/tagmanager/
