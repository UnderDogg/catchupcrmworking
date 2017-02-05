<?php

namespace App\Repositories\Email;

use App\Models\Email\MailTemplates;
use InfyOm\Generator\Common\BaseRepository;

class MailTemplatesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'is_active',
        'set_id',
        'type_id',
        'variable',
        'subject',
        'message',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MailTemplates::class;
    }
}
