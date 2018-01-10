<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [],
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
];
