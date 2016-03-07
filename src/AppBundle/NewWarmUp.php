<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 07.03.16
 * Time: 10:56
 */

namespace AppBundle;


use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

class NewWarmUp  implements CacheWarmerInterface
{
    public function warmUp($cacheDir)
    {
        echo $cacheDir . '\n';

    }

    public function isOptional()
    {
        return true;
    }

} 