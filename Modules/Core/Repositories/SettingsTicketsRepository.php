<?php

namespace App\Repositories\Core;

use App\Models\Core\SettingsTickets;
use InfyOm\Generator\Common\BaseRepository;

class SettingsTicketsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return SettingsTickets::class;
    }
}
