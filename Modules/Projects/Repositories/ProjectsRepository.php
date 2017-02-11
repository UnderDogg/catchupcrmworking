<?php

namespace Modules\Projects\Repositories;

use Modules\Projects\Models\Projects;
use InfyOm\Generator\Common\BaseRepository;

class ProjectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'relation_id',
        'user_id',
        'name',
        'public_id',
        'is_deleted'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Projects::class;
    }
}
