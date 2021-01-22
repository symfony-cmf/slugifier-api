<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2017 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Api\Slugifier\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Cmf\Api\Slugifier\CallbackSlugifier;

class CallbackSlugifierTest extends TestCase
{
    public function testSlugify()
    {
        $slugifier = $this->createCallbackSlugifier();
        $this->assertEquals('this-is-slugified', $slugifier->slugify('this is slugified'));
    }

    public static function slugify($val)
    {
        return str_replace(' ', '-', $val);
    }

    /**
     * @return CallbackSlugifier
     */
    private function createCallbackSlugifier()
    {
        return new CallbackSlugifier(__CLASS__.'::slugify');
    }
}
