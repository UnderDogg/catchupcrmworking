<?php

namespace App\Models\Email;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Mailboxes",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="email_address",
 *          description="email_address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email_name",
 *          description="email_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="department_id",
 *          description="department_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="priority_id",
 *          description="priority_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="helptopic_id",
 *          description="helptopic_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="username",
 *          description="username",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="mailbox_type",
 *          description="mailbox_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fetchtype",
 *          description="fetchtype",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fetching_host",
 *          description="fetching_host",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fetching_port",
 *          description="fetching_port",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fetching_protocol",
 *          description="fetching_protocol",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="fetching_encryption",
 *          description="fetching_encryption",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="imap_config",
 *          description="imap_config",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sending_host",
 *          description="sending_host",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sending_port",
 *          description="sending_port",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sending_protocol",
 *          description="sending_protocol",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sending_encryption",
 *          description="sending_encryption",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="smtp_validate",
 *          description="smtp_validate",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="smtp_authentication",
 *          description="smtp_authentication",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tickettypeid",
 *          description="tickettypeid",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="priorityid",
 *          description="priorityid",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ticketstatusid",
 *          description="ticketstatusid",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
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
