<?php

return [
    'types' => [
        App\PrizeBonus::class => [
            'name' => 'bonuses',
            'limit' => false,

        ],
        App\PrizeMoney::class => [
            'name' => 'money',
            'limit' => true,
        ],
        App\PrizeThing::class => [
            'name' => 'thing',
            'limit' => true,
        ],
    ],
];
