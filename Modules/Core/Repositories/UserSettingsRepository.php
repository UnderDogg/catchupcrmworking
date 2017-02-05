<?php

namespace App\Repositories\Core;

use App\Models\Core\UserSettings;
use InfyOm\Generator\Common\BaseRepository;

class UserSettingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'value',
        'userid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserSettings::class;
    }
}
