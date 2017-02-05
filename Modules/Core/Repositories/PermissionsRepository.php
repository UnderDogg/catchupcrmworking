<?php

namespace App\Repositories\Core;

use App\Models\Core\Permissions;
use InfyOm\Generator\Common\BaseRepository;

class PermissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'display_name',
        'description',
        'enabled'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Permissions::class;
    }
}
