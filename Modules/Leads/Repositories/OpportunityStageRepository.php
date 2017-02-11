<?php

namespace Modules\Leads\Repositories;

use Modules\Leads\Models\OpportunityStage;
use InfyOm\Generator\Common\BaseRepository;

class OpportunityStageRepository extends BaseRepository
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
        return OpportunityStage::class;
    }
}
