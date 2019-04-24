<?php

return [
    'types' => [
        App\PrizeBonus::class => [
            'name' => 'bonuses',
            'limit' => null,

        ],
        App\PrizeMoney::class => [
            'name' => 'money',
            'limit' => 100,
        ],
        App\PrizeThing::class => [
            'name' => 'thing',
            'limit' => 10,
        ],
    ],
];
