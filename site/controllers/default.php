<?php

use Kirby\Cms\Site;

return function (Site $site): array {
    return [
        'defaultPages' => $site->children()->template('default'),
    ];
};