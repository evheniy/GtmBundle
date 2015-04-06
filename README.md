GtmBundle
=================

[![knpbundles.com](http://knpbundles.com/evheniy/GtmBundle/badge)](http://knpbundles.com/evheniy/GtmBundle)

[![Latest Stable Version](https://poser.pugx.org/evheniy/gtm-bundle/v/stable.svg)](https://packagist.org/packages/evheniy/gtm-bundle) [![Total Downloads](https://poser.pugx.org/evheniy/gtm-bundle/downloads.svg)](https://packagist.org/packages/evheniy/gtm-bundle) [![Latest Unstable Version](https://poser.pugx.org/evheniy/gtm-bundle/v/unstable.svg)](https://packagist.org/packages/evheniy/gtm-bundle) [![License](https://poser.pugx.org/evheniy/gtm-bundle/license.svg)](https://packagist.org/packages/evheniy/gtm-bundle)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/evheniy/GtmBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/evheniy/GtmBundle/?branch=master)

This bundle provides Google Tag Manager in Symfony2

Documentation
-------------

You need to set GTM ID:

    gtm:
        id: GTM-xxx

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
        gtm:
            id: GTM-xxx


    {% include "GtmBundle:Gtm:gtm.html.twig" %}

License
-------

This bundle is under the [MIT][3] license.

[Документация на русском языке][1]

[Google Tag Manager][2]

[1]:  http://makedev.org/articles/symfony/bundles/gtm_bundle.html
[2]:  http://www.google.com/tagmanager/
[3]:  https://github.com/evheniy/GtmBundle/blob/master/Resources/meta/LICENSE
