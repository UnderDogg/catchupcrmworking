<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SettingsSystem extends Model
{
    use SoftDeletes;

    public $table = 'settings__system';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'url' => 'string',
        'name' => 'string',
        'department' => 'string',
        'page_size' => 'string',
        'log_level' => 'string',
        'purge_log' => 'string',
        'api_enable' => 'integer',
        'api_key_mandatory' => 'integer',
        'api_key' => 'string',
        'name_format' => 'string',
        'time_farmat' => 'integer',
        'date_format' => 'integer',
        'date_time_format' => 'integer',
        'day_date_time' => 'string',
        'time_zone' => 'integer',
        'content' => 'string',
        'version' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
