<?php

namespace Modules\Leads\Repositories;

use Modules\Leads\Models\OpportunityType;
use InfyOm\Generator\Common\BaseRepository;

class OpportunityTypeRepository extends BaseRepository
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
        return OpportunityType::class;
    }
}
