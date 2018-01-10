<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => 'posts',
            'sort' => 'date',
        ],
        'articles' => [
            'path' => 'music/articles/{-article}/{-title}',
            'sort' => '-date',
        ],
    ],
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
];
