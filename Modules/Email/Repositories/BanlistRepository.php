<?php

namespace App\Repositories\Email;

use App\Models\Email\Banlist;
use InfyOm\Generator\Common\BaseRepository;

class BanlistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ban_status',
        'email_address',
        'internal_notes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Banlist::class;
    }
}
