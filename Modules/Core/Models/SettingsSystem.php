<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="SettingsSystem",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="url",
 *          description="url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="department",
 *          description="department",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="page_size",
 *          description="page_size",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="log_level",
 *          description="log_level",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="purge_log",
 *          description="purge_log",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="api_enable",
 *          description="api_enable",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="api_key_mandatory",
 *          description="api_key_mandatory",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="api_key",
 *          description="api_key",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name_format",
 *          description="name_format",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="time_farmat",
 *          description="time_farmat",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="date_format",
 *          description="date_format",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="date_time_format",
 *          description="date_time_format",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="day_date_time",
 *          description="day_date_time",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="time_zone",
 *          description="time_zone",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="content",
 *          description="content",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="version",
 *          description="version",
 *          type="string"
 *      )
 * )
 */
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
