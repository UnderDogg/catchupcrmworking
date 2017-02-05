<?php

namespace App\Repositories\Email;

use App\Models\Email\MailtemplatesTypes;
use InfyOm\Generator\Common\BaseRepository;

class MailtemplatesTypesRepository extends BaseRepository
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
        return MailtemplatesTypes::class;
    }
}
