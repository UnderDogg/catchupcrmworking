<?php

namespace App\Repositories\Core;

use App\Models\Core\ActivityType;
use InfyOm\Generator\Common\BaseRepository;

class ActivityTypeRepository extends BaseRepository
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
        return ActivityType::class;
    }
}
