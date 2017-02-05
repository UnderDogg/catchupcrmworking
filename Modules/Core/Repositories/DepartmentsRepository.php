<?php

namespace App\Repositories\Core;

use App\Models\Core\Departments;
use InfyOm\Generator\Common\BaseRepository;

class DepartmentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'departmenttype',
        'isdefault',
        'slaplan_id',
        'manager_id',
        'department_signature'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Departments::class;
    }
}
