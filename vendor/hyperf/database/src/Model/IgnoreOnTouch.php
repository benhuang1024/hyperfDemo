<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Database\Model;

class IgnoreOnTouch
{
    /**
     * The list of models classes that should not be affected with touch.
     *
     * @var array
     */
    public static $container = [];
}
