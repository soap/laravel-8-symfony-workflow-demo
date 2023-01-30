<?php

return [
    'straight'   => [
        'type'          => 'workflow',
        'marking_store' => [
            'type' => 'single_state',
            'property' => 'state'
        ],
        'supports'      => ['App\Models\Article'],
        'places'        => ['draft', 'pending', 'published', 'rejected'],
        'transitions'   => [
            'submit' => [
                'from' => 'draft',
                'to'   => 'pending',
            ],
            'approve' => [
                'from' => 'pending',
                'to'   => 'published',
            ],
            'reject' => [
                'from' => 'pending',
                'to' => 'rejected'
            ]
        ],
    ]
];
