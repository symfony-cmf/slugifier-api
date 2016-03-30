<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2016 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\CoreBundle\Slugifier;

use Symfony\Cmf\Api\Slugifier\CallbackSlugifier as ApiCallbackSlugifier;

/**
 * Slugifier service which uses a callback.
 * 
 * @deprecated Since 1.0, to be removed in 2.0. Use Symfony\Cmf\Api\Slugifier\CallbackSlugifier instead.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class CallbackSlugifier extends ApiCallbackSlugifier
{
    public function __construct($callback)
    {
        @trigger_error('The '.__CLASS__.' is deprecated as of version 1.0 and will be removed in 2.0. Use Symfony\Cmf\Api\Slugifier\CallbackSlugifier instead.', E_USER_DEPRECATED);

        parent::__construct($callback);
    }
}
