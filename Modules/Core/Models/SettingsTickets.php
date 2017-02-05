<?php

namespace App\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="SettingsTickets",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="num_format",
 *          description="num_format",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="num_sequence",
 *          description="num_sequence",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="priority",
 *          description="priority",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sla",
 *          description="sla",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="help_topic",
 *          description="help_topic",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="max_open_ticket",
 *          description="max_open_ticket",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="collision_avoid",
 *          description="collision_avoid",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lock_ticket_frequency",
 *          description="lock_ticket_frequency",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="captcha",
 *          description="captcha",
 *          type="string"
 *      )
 * )
 */
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
