<?php

namespace App\Repositories\Tickets;

use App\Models\Tickets\TicketCategories;
use InfyOm\Generator\Common\BaseRepository;

class TicketCategoriesRepository extends BaseRepository
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
        return TicketCategories::class;
    }
}
