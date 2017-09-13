<?php

namespace AppBundle\Form\Extension;

use AppBundle\Model\RandomValue;

class PlaygroundExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('sleep', [$this, 'getSleep'])
        ];

    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        ];
    }

    public function priceFilter($price, $space = false)
    {
        if ($space) {
            return $price . ' $';
        }

        return $price . '$';
    }

    public function getSleep($seconds)
    {
        sleep($seconds);
    }

    public function getGlobals()
    {
        return [
            'random' => new RandomValue()
        ];
    }

    public function getName()
    {
        return 'playground';
    }
}
