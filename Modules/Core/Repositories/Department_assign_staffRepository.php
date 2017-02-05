<?php

namespace App\Repositories\Core;

use App\Models\Core\Department_assign_staff;
use InfyOm\Generator\Common\BaseRepository;

class Department_assign_staffRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'department_id',
        'staff_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Department_assign_staff::class;
    }
}
