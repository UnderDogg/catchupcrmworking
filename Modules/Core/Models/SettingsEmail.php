<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SettingsEmail extends Model
{
    use SoftDeletes;

    public $table = 'settings__email';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'template',
        'sys_email',
        'alert_email',
        'admin_email',
        'mta',
        'email_fetching',
        'notification_cron',
        'strip',
        'separator',
        'all_emails',
        'email_collaborator',
        'attachment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'template' => 'string',
        'sys_email' => 'string',
        'alert_email' => 'string',
        'admin_email' => 'string',
        'mta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
