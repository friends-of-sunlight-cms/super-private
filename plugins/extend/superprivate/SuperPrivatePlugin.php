<?php

namespace SunlightExtend\SuperPrivate;

use Sunlight\Core;
use Sunlight\Extend;
use Sunlight\GenericTemplates;
use Sunlight\Plugin\ExtendPlugin;
use Sunlight\Plugin\PluginManager;
use Kuria\Error\Screen\WebErrorScreen;

/**
 * Devkit plugin
 *
 * @author Jirka Daněk <jdanek.eu>
 */
class SuperPrivatePlugin extends ExtendPlugin
{
    function overloadTemplate($args){
        if (!_logged_in && _notpublicsite) {
            $args['path'] = __DIR__ . DIRECTORY_SEPARATOR . 'script.php';
        }
    }
}
