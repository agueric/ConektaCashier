<?php
namespace CityWifi\ConektaCashier;
use CityWifi\ConektaCashier\Contracts\Billable as BillableContract;
use Illuminate\Support\Facades\Config;
class EloquentBillableRepository implements BillableRepositoryInterface
{
    /**
     * Find a BillableInterface implementation by Conekta ID.
     *
     * @param string $conektaId
     *
     * @return \CityWifi\ConektaCashier\BillableInterface
     */
    public function find($conektaId)
    {
        $model = $this->createCashierModel(Config::get('services.conekta.model'));
        return $model->where($model->getConektaIdName(), $conektaId)->first();
    }
    /**
     * Create a new instance of the Auth model.
     *
     * @param string $model
     *
     * @return \CityWifi\ConektaCashier\BillableInterface
     */
    protected function createCashierModel($class)
    {
        $model = new $class();
        if (!$model instanceof BillableContract) {
            throw new \InvalidArgumentException('Model does not implement Billable.');
        }
        return $model;
    }
}