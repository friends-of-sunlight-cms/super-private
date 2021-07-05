<?php

namespace SunlightExtend\Superprivate;

use Sunlight\Plugin\ExtendPlugin;
use Sunlight\Settings;
use Sunlight\User;

/**
 * Devkit plugin
 *
 * @author Jirka Daněk <jdanek.eu>
 */
class SuperPrivatePlugin extends ExtendPlugin
{
    public function overloadTemplate($args): void
    {
        if (!User::isLoggedIn() && Settings::get('notpublicsite')) {
            $args['path'] = __DIR__ . DIRECTORY_SEPARATOR . 'script.php';
        }
    }
}
