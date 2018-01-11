<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => '{-title}',
            'sort' => '-date',
            'dateFormatted' => function ($page) {
                list($year, $month, $day) = parseDate($page['date']);
                return sprintf('%s %s, %s', $month, $day, $year);
            },
        ]
    ]
];

function parseDate($timestamp)
{
    $date = DateTime::createFromFormat('U', $timestamp);
    return [
        $date->format('Y'),
        $date->format('F'),
        $date->format('d'),
    ];
}
