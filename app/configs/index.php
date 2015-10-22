<?php

return array_replace_recursive(
    require(__DIR__ . '/common.php'),
    require(__DIR__ . '/common-local.php'),
    require(__DIR__ . '/web.php'),
    require(__DIR__ . '/web-local.php')
);
