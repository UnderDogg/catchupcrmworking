<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\Relation;


class RelationsRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'shortname',
        'relationtype_id',
        'language_id',
        'slaplanid',
        'slaexpirytimeline'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Relation::class;
    }
}
