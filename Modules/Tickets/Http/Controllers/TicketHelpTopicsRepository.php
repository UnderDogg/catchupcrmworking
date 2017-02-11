<?php

namespace App\Repositories\Tickets;

use App\Models\Tickets\TicketHelpTopics;
use InfyOm\Generator\Common\BaseRepository;

class TicketHelpTopicsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return TicketHelpTopics::class;
    }
}
