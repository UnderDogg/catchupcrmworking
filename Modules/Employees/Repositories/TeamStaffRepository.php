<?php

namespace App\Repositories\Employees;

use Modules\Employees\Models\TeamStaff;
use InfyOm\Generator\Common\BaseRepository;

class TeamStaffRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'team_id',
        'staff_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TeamStaff::class;
    }
}
