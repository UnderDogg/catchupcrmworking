<?php

namespace App\Repositories\Core;

use App\Models\Core\ActivityPriority;
use InfyOm\Generator\Common\BaseRepository;

class ActivityPriorityRepository extends BaseRepository
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
        return ActivityPriority::class;
    }
}
