<?php

namespace App\Repositories\Employees;

use Modules\Employees\Models\Employees;
use InfyOm\Generator\Common\BaseRepository;

class EmployeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'remember_token',
        'enabled',
        'auth_type',
        'confirmed',
        'confirmation_code'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employees::class;
    }
}
