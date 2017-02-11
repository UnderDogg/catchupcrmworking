<?php

namespace Modules\Workflows\Repositories;

use Modules\Workflows\Models\WorkflowAction;
use InfyOm\Generator\Common\BaseRepository;

class WorkflowActionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'workflow_id',
        'condition',
        'action'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return WorkflowAction::class;
    }
}
