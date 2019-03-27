<?php

namespace CityWifi\ConektaCashier;

interface BillableRepositoryInterface
{
    /**
     * Find a BillableInterface implementation by Conekta ID.
     *
     * @param string $conektaId
     *
     * @return \CityWifi\ConektaCashier\BillableInterface
     */
    public function find($conektaId);
}