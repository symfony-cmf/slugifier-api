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

use Symfony\Cmf\Api\Slugifier\CallbackSlugifier;

class CallbackSlugifierTest extends \PHPUnit_Framework_TestCase
{
    private $slugifier;

    protected function setUp()
    {
        $this->slugifier = new CallbackSlugifier(__CLASS__.'::slugify');
    }

    public function testSlugify()
    {
        $this->assertEquals('this-is-slugified', $this->slugifier->slugify('this is slugified'));
    }

    public static function slugify($val)
    {
        return str_replace(' ', '-', $val);
    }
}
