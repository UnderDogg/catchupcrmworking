<?php

namespace Modules\Taxes\Repositories;

use Modules\Taxes\Models\TaxRate;
use InfyOm\Generator\Common\BaseRepository;

class TaxRatesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'name',
        'user_id',
        'public_id',
        'rate',
        'is_inclusive'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TaxRate::class;
    }
}
