<?php

require 'config.php';

$appUrl = isset($config['CallBack'])?$config['CallBack']:'javaScript:;';

Header('Location: ' . $appUrl);
?>