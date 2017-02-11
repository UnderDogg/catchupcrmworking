<?php

namespace App\Repositories\Tickets;

use App\Models\Tickets\TicketTypes;
use InfyOm\Generator\Common\BaseRepository;

class TicketTypesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ismaster',
        'ispublic',
        'title',
        'displayicon',
        'department_id',
        'displayorder'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TicketTypes::class;
    }
}
