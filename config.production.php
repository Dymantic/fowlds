<?php

return [
    'production' => true,
    'baseUrl' => 'https://peaceful-swirles-0c7b93.netlify.com/',
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
