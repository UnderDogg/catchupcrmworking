<?php

namespace App\Repositories\Tickets;

use App\Models\Tickets\TicketSources;
use InfyOm\Generator\Common\BaseRepository;

class TicketSourcesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TicketSources::class;
    }
}
