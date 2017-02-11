<?php

namespace Modules\Relations\Repositories;

use Modules\Relations\Models\RelationContracts;


class RelationContractsRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'contractname',
        'contracttype_id',
        'relation_id',
        'relationcontact_id',
        'slaplan_id',
        'contract_start_date',
        'contract_end_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelationContracts::class;
    }
}
