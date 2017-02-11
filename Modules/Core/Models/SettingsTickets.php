<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SettingsTickets extends Model
{
    use SoftDeletes;

    public $table = 'settings__tickets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'num_format',
        'num_sequence',
        'priority',
        'sla',
        'help_topic',
        'max_open_ticket',
        'collision_avoid',
        'lock_ticket_frequency',
        'captcha',
        'status',
        'claim_response',
        'assigned_ticket',
        'answered_ticket',
        'agent_mask',
        'html',
        'client_update',
        'max_file_size'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'num_format' => 'string',
        'num_sequence' => 'string',
        'priority' => 'string',
        'sla' => 'string',
        'help_topic' => 'string',
        'max_open_ticket' => 'string',
        'collision_avoid' => 'string',
        'lock_ticket_frequency' => 'string',
        'captcha' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
