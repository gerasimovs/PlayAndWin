<?php

return [
    'types' => [
        App\PrizeBonus::class => [
            'name' => 'bonuses',
            'limit' => false,
            'once' => [10, 500],
        ],
        App\PrizeMoney::class => [
            'name' => 'money',
            'limit' => true,
            'once' => [1, 50],
        ],
        App\PrizeThing::class => [
            'name' => 'thing',
            'limit' => true,
            'once' => 1,
        ],
    ],
];
