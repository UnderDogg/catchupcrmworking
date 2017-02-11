<?php

namespace Modules\Leads\Repositories;

use Modules\Leads\Models\Opportunities;
use InfyOm\Generator\Common\BaseRepository;

class OpportunitiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'amount',
        'close_date',
        'expected_revenue',
        'next_step',
        'probability',
        'competitors',
        'description',
        'lead_source_id',
        'stage_id',
        'type_id',
        'contact_id',
        'owner_id',
        'adder_id',
        'modifier_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Opportunities::class;
    }
}
