<?php

namespace SunlightExtend\Superprivate;

use Sunlight\Plugin\ExtendPlugin;

/**
 * Devkit plugin
 *
 * @author Jirka Daněk <jdanek.eu>
 */
class SuperPrivatePlugin extends ExtendPlugin
{
    public function overloadTemplate($args): void
    {
        if (!_logged_in && _notpublicsite) {
            $args['path'] = __DIR__ . DIRECTORY_SEPARATOR . 'script.php';
        }
    }
}
