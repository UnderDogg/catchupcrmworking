<?php

namespace Modules\Leads\Repositories;

use Modules\Leads\Models\LeadSource;
use InfyOm\Generator\Common\BaseRepository;

class LeadSourceRepository extends BaseRepository
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
        return LeadSource::class;
    }
}
