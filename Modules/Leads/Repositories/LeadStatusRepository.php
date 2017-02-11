<?php

namespace Modules\Leads\Repositories;

use Modules\Leads\Models\LeadStatus;
use InfyOm\Generator\Common\BaseRepository;

class LeadStatusRepository extends BaseRepository
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
        return LeadStatus::class;
    }
}
