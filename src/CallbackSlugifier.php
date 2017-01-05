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
 * Slugifier service which uses a callback.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class CallbackSlugifier implements SlugifierInterface
{
    protected $callback;

    /**
     * @param callable $callback
     */
    public function __construct($callback)
    {
        if (!is_callable($callback)) {
            throw new \InvalidArgumentException(sprintf('Expected a valid callable as callback, %s given.', gettype($callback)));
        }

        $this->callback = $callback;
    }

    /**
     * {@inheritdoc}
     */
    public function slugify($string)
    {
        return call_user_func($this->callback, $string);
    }
}
