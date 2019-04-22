<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'posts' => [
            'path' => '/journal/{slug}',
            'sort' => '-filename',
            'author' => 'Grant Fowlds'
        ],
        'associates' => [
            'path' => '/associates',
            'sort' => 'position'
        ]
    ],
];
