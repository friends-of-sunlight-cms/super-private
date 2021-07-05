<?php

use Sunlight\User;

defined('SL_ROOT') or exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo _lang('login.required.title'); ?></title>
    <style>
        body {
            background: radial-gradient(at center 270px, #ededed, #bbbbbb) no-repeat fixed;
        }

        div.superprivate-wrapper {
            max-width: 1400px;
            min-width: 700px;
            margin: 0 auto;
        }

        .loginbox {
            width: 500px;
            min-width: 0;
            padding: 24px 16px;
            box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.15);
            text-align: center;
            background-color: #fff;
            margin: 30px auto 0 auto;
        }

        .loginbox form {
            display: inline-block;
        }

        .loginbox ul.login-form-links {
            margin-left: 0px;
            padding: 0 0 0 3px;
            list-style-type: none;
            font-size: 12px;
        }

        .loginbox ul.login-form-links, .loginbox form {
            text-align: left;
        }

        form > table > tbody > tr > th, .cform th {
            padding-right: 10px;
            text-align: right;
            white-space: nowrap;
        }

        th {
            text-align: left;
            font-weight: bold;
        }

        td, th {
            font-size: 12px;
            padding: 1px;
        }
    </style>
</head>
<body>
<div class="superprivate-wrapper">
    <div class="loginbox">
        <h1><?php echo _lang('login.required.title'); ?></h1>
        <?php echo User::renderLoginForm(false, User::isLoggedIn()); ?>
    </div>
</div>
</body>
</html>