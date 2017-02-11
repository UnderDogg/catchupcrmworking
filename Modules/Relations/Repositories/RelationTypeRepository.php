<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\RelationType;


class RelationTypeRepository
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
        return RelationType::class;
    }
}
