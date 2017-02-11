<?php

namespace Modules\Workflows\Repositories;

use Modules\Workflows\Models\WorkflowClose;
use InfyOm\Generator\Common\BaseRepository;

class WorkflowCloseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'days',
        'condition',
        'send_email',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return WorkflowClose::class;
    }
}
