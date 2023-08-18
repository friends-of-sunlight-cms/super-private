<?php

use Sunlight\Settings;
use Sunlight\User;

return function (array $args) {
    if (User::isLoggedIn() || !Settings::get('notpublicsite')) {
        return;
    }
    $args['index']->title = _lang('login.required.title');
    $args['index']->output = require __DIR__ . DIRECTORY_SEPARATOR . '../script/login.php';
    exit;
};
