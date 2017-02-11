<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\Salutation;


class SalutationRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Salutation::class;
    }
}
