GtmBundle
=================

This bundle provides Google Tag Manager in Symfony2

Documentation
-------------

You need to set GTM ID:

    gtm: GTM-xxx

Installation
------------

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

[1]:  http://makedev.org/
[2]:  http://www.google.com/tagmanager/