<?php

namespace App\Repositories\Email;

use App\Models\Email\Mailboxes;
use InfyOm\Generator\Common\BaseRepository;

class MailboxesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Mailboxes::class;
    }
}
