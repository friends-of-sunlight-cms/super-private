<?php

use Sunlight\GenericTemplates;
use Sunlight\Router;
use Sunlight\User;

global $_index;

defined('SL_ROOT') or exit;

echo GenericTemplates::renderHead();
echo GenericTemplates::renderHeadAssets([
    'css' => [
        Router::path('plugins/extend/superprivate/public/style.css'),
    ]
]);
?>
</head>
<body class="<?= implode(' ', $_index->bodyClasses) ?>">
<div class="superprivate-wrapper">
    <div class="loginbox">
        <h1><?= _lang('login.required.title') ?></h1>
        <?= User::renderLoginForm(false) ?>
    </div>
</div>
</body>
</html>