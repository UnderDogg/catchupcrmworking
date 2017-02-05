<?php

namespace App\Repositories\Core;

use App\Models\Core\SettingsAutoResponse;
use InfyOm\Generator\Common\BaseRepository;

class SettingsAutoResponseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'new_ticket',
        'agent_new_ticket',
        'submitter',
        'participants',
        'overlimit'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SettingsAutoResponse::class;
    }
}
