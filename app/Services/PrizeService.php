<?php

namespace App\Services;

use App\User;
use App\AbstractPrize;
use Illuminate\Support\Fluent;

class PrizeService
{
    protected $types;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->types = config('prizes.types');
    }

    /**
     * Get all types
     *
     * @return array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Get random prize
     *
     * @return Fluent
     */
    public function getPrize()
    {
        $type = array_rand($this->getTypes());
        $prize = $this->types[$type];

        return new Fluent([
            'model' => $type,
            'name' => $prize['name'],
            'count' => $this->getCount($type),
        ]);
    }

    /**
     * Play a prize between the user
     *
     * @param User $user
     * @param Fluent $prize
     * @return type
     */
    public function toPlay(User $user, Fluent $fluent)
    {
        $prize = new $fluent->model;
        $prize->count = $fluent->count;
        $prize->user_id = $user->id;
        $prize->save();

        return $user->prizes()->create([
            'model_type' => $fluent->model,
            'model_id' => $prize->id,
        ]);
    }


    /**
     * Get count prize
     *
     * @param type $type
     * @return type
     */
    private function getCount($type)
    {
        $prize = $this->types[$type];
        $once = $prize['once'];

        return is_array($once)
            ? rand(...$once)
            : $once;
    }
}
