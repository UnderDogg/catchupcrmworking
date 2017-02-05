<?php

namespace App\Repositories\Core;

use App\Models\Core\TeamAssigns;
use InfyOm\Generator\Common\BaseRepository;

class TeamAssignsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'shortname',
        'relationtype_id',
        'language_id',
        'slaplanid',
        'slaexpirytimeline'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TeamAssigns::class;
    }
}
