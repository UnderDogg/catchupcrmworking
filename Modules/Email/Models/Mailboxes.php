<?php

namespace App\Models\Email;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mailboxes extends Model
{
    use SoftDeletes;

    public $table = 'mailboxes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'email_address',
        'email_name',
        'is_active',
        'department_id',
        'priority_id',
        'helptopic_id',
        'username',
        'password',
        'mailbox_type',
        'fetchtype',
        'fetching_status',
        'fetching_host',
        'fetching_port',
        'fetching_protocol',
        'fetching_encryption',
        'imap_config',
        'sending_status',
        'sending_host',
        'sending_port',
        'sending_protocol',
        'sending_encryption',
        'smtp_validate',
        'smtp_authentication',
        'tickettypeid',
        'priorityid',
        'ticketstatusid',
        'auto_response',
        'replyautoresponse',
        'leavecopyonserver'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email_address' => 'string',
        'email_name' => 'string',
        'department_id' => 'integer',
        'priority_id' => 'integer',
        'helptopic_id' => 'integer',
        'username' => 'string',
        'password' => 'string',
        'mailbox_type' => 'string',
        'fetchtype' => 'string',
        'fetching_host' => 'string',
        'fetching_port' => 'string',
        'fetching_protocol' => 'string',
        'fetching_encryption' => 'string',
        'imap_config' => 'string',
        'sending_host' => 'string',
        'sending_port' => 'string',
        'sending_protocol' => 'string',
        'sending_encryption' => 'string',
        'smtp_validate' => 'string',
        'smtp_authentication' => 'string',
        'tickettypeid' => 'integer',
        'priorityid' => 'integer',
        'ticketstatusid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
