<?php

namespace Symfony\Cmf\Bundle\CoreBundle\Slugifier;

/**
 * @deprecated Since 1.0, to be removed in 2.0. Use Symfony\Cmf\Api\Slugifier\SlugifierInterface instead.
 */
interface SlugifierInterface 
{
    /**
     * Return a slugified (or urlized) representation of a given string.
     *
     * @param string $string
     *
     * @return string
     */
    public function slugify($string);
}
