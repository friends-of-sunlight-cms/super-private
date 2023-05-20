<?php

namespace SunlightExtend\Superprivate;

use Sunlight\Plugin\ExtendPlugin;
use Sunlight\Settings;
use Sunlight\User;
use Sunlight\WebState;

class SuperPrivatePlugin extends ExtendPlugin
{
    public function overloadTemplate(array $args): void
    {
        if (!User::isLoggedIn() && Settings::get('notpublicsite')) {
            $args['index']->output = require __DIR__ . DIRECTORY_SEPARATOR . '../script/script.php';
            exit;
        }
    }
}
