<?php

namespace App\Repositories\Core;

use App\Models\Core\UserRoles;
use InfyOm\Generator\Common\BaseRepository;

class UserRolesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'display_name',
        'description',
        'enabled',
        'resync_on_login'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserRoles::class;
    }
}
