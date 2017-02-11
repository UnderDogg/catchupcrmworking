<?php

namespace App\Models\Tickets;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class TicketHelpTopic extends Model
{
    use SoftDeletes;

    public $table = 'tickets__helptopics';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'topic',
        'parent_topic',
        'custom_form',
        'department_id',
        'ticketstatus_id',
        'ticketpriority_id',
        'slaplan_id',
        'thank_page',
        'ticket_num_format',
        'status',
        'type',
        'auto_assign',
        'auto_response',
        'internal_notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'topic' => 'string',
        'parent_topic' => 'string',
        'custom_form' => 'integer',
        'department_id' => 'integer',
        'ticketstatus_id' => 'integer',
        'ticketpriority_id' => 'integer',
        'slaplan_id' => 'integer',
        'thank_page' => 'string',
        'ticket_num_format' => 'string',
        'auto_assign' => 'integer',
        'internal_notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
