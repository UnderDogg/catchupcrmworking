<?php

namespace Modules\Workflows\Repositories;

use Modules\Workflows\Models\WorkflowName;
use InfyOm\Generator\Common\BaseRepository;

class WorkflowNameRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'status',
        'order',
        'target',
        'internal_note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return WorkflowName::class;
    }
}
