<?php

namespace agueric\ConektaCashier;

interface BillableRepositoryInterface
{
    /**
     * Find a BillableInterface implementation by Conekta ID.
     *
     * @param string $conektaId
     *
     * @return \agueric\ConektaCashier\BillableInterface
     */
    public function find($conektaId);
}