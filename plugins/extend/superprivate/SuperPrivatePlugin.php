<?php

namespace SunlightExtend\Superprivate;

use Sunlight\Plugin\ExtendPlugin;
use Sunlight\Settings;
use Sunlight\User;

/**
 * Super private pages
 *
 * @author Jirka Daněk <jdanek.eu>
 */
class SuperPrivatePlugin extends ExtendPlugin
{
    public function overloadTemplate(array $args): void
    {
        if (!User::isLoggedIn() && Settings::get('notpublicsite')) {
            $args['index']->templateEnabled = false;
            $args['index']->output = require __DIR__ . '/script.php';
        }
    }
}
