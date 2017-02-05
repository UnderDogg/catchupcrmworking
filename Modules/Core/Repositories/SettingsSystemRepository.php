<?php

namespace App\Repositories\Core;

use App\Models\Core\SettingsSystem;
use InfyOm\Generator\Common\BaseRepository;

class SettingsSystemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status',
        'url',
        'name',
        'department',
        'page_size',
        'log_level',
        'purge_log',
        'api_enable',
        'api_key_mandatory',
        'api_key',
        'name_format',
        'time_farmat',
        'date_format',
        'date_time_format',
        'day_date_time',
        'time_zone',
        'content',
        'version'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SettingsSystem::class;
    }
}
