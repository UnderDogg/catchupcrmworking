<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SettingsAlertNotice extends Model
{
    use SoftDeletes;

    public $table = 'settings__alert_notice';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ticket_status',
        'ticket_admin_email',
        'ticket_department_manager',
        'ticket_department_member',
        'ticket_organization_accmanager',
        'message_status',
        'message_last_responder',
        'message_assigned_agent',
        'message_department_manager',
        'message_organization_accmanager',
        'internal_status',
        'internal_last_responder',
        'internal_assigned_agent',
        'internal_department_manager',
        'assignment_status',
        'assignment_assigned_agent',
        'assignment_team_leader',
        'assignment_team_member',
        'transfer_status',
        'transfer_assigned_agent',
        'transfer_department_manager',
        'transfer_department_member',
        'overdue_status',
        'overdue_assigned_agent',
        'overdue_department_manager',
        'overdue_department_member',
        'system_error',
        'sql_error',
        'excessive_failure'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
