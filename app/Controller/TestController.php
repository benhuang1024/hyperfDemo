<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use Hyperf\DbConnection\Db;

class TestController extends AbstractController
{
    public function queryDb()
    {
//        return 'yoyo';
        /*$act_time = microtime(true);
        $sum = 0;
        for ($i = 1; $i < 100000; $i++) {
            $sum = $sum * round(0, 1) + $sum;
        }
        return microtime(true) - $act_time;*/

        $act_time = microtime(true);
        for ($i = 1; $i < 10; $i++) {
            $res = Db::select("SELECT * FROM tmpls LIMIT {$i},1;");
        }
        return microtime(true) - $act_time;
    }
}
