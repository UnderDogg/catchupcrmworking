<?php

namespace App\Repositories\Core;

use App\Models\Core\ActivityStatus;
use InfyOm\Generator\Common\BaseRepository;

class ActivityStatusRepository extends BaseRepository
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
        return ActivityStatus::class;
    }
}
