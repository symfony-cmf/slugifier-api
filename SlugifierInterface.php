<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2016 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Api\Slugifier;

/**
 * Slugifier interface.
 *
 * @author Daniel Leech <daniel@dantleech.com>
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
