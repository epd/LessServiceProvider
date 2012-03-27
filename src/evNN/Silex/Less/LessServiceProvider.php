<?php
/**
 * LESS Compiler Service Provider for Silex PHP microframework.
 *
 * This provider uses the 'cypresslab/less-elephant' Composer package.
 */

namespace evNN\Silex\Less;

use Silex\Application;
use Silex\ServiceProviderInterface;

class LessServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['less'] = $app->share(function() use($app)
        {
            return new LessElephant\LessProject($app['less.less_dir'], $app['less.app_less'], $app['less.app_css']);
        });
    }
}
