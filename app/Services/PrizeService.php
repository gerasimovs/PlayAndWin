<?php

namespace App\Services;

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
     * @return type
     */
    public function getPrize()
    {
        $type = array_rand($this->getTypes());

        return (object) $this->types[$type];
    }
}
