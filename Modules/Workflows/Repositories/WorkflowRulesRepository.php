<?php

namespace Modules\Workflows\Repositories;

use Modules\Workflows\Models\WorkflowRules;
use InfyOm\Generator\Common\BaseRepository;

class WorkflowRulesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'workflow_id',
        'matching_criteria',
        'matching_scenario',
        'matching_relation',
        'matching_value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return WorkflowRules::class;
    }
}
